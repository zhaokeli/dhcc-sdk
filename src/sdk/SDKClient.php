<?php

namespace Dhcc\sdk;

use Dhcc\sdk\request\Request;

class SDKClient
{
    protected $apiUrl = 'https://openapi.dhcc.wang';

    protected $appKey = '';

    protected $appSecret = '';

    protected static $instance = null;

    /**
     * 执行一个api名字和参数
     * @param  $apiName
     * @param  array               $params
     * @return array|bool|string
     */
    public function executeApi(string $apiName, array $params = [])
    {
        $params = array_merge($params, [
            'app_key'  => $this->appKey,
            'api_name' => $apiName,
            'time'     => time(),
        ]);
        $params['sign'] = $this->getSign($params);

        return $this->sendRequest([
            'url'      => $this->apiUrl,
            'postdata' => $params,
        ]);

    }

    /**
     * 执行一个api请求
     * @param  Request             $request
     * @return array|bool|string
     */
    public function executeRequest(Request $request)
    {
        $params  = $request->getParams();
        $apiName = $request->getApiName();

        $params = array_merge($params, [
            'app_key'  => $this->appKey,
            'api_name' => $apiName,
            'time'     => time(),
        ]);
        $params['sign'] = $this->getSign($params);

        return $this->sendRequest([
            'url'      => $this->apiUrl,
            'postdata' => $params,
        ]);

    }

    public static function getInstance($appKey, $appSecret, $apiUrl = null)
    {
        if (self::$instance === null) {
            self::$instance = new static($appKey, $appSecret, $apiUrl);
        }

        return self::$instance;
    }

    /**
     * @param  array    $params
     * @return string
     */
    protected function getSign($params = [])
    {
        //去除空参数
        $signParams = [];
        foreach ($params as $key => $value) {
            if ($value !== '') {
                $signParams[$key] = $value;
            }
        }
        //排序后计算签名
        ksort($signParams);

        return md5(http_build_query($signParams) . $this->appSecret);
    }

    /**
     * url请求
     * @param  $opt
     * @return array|bool|string
     */
    protected function sendRequest($opt)
    {
        $conf = [
            // 请求url
            'url'            => '',
            'timeout'        => 60,
            // 有数据时自动转为post
            'postdata'       => [],
            // 请求头,可以是字符串或数组
            'requestHeader'  => [],
            // 默认为false，true时当前请求强制转为post
            'post'           => false,
            // 返回响应头,开启后返回值为一个数组
            'responseHeader' => false,
            // 解析响应中的cookie为一个数组,返回值会强制返回数组
            'parseCookie'    => false,
            // 自动跟踪重定向url
            'followRedirect' => true,
            // 不需要返回内容,只会返回响应头
            'nobody'         => false,
                                    // 保持会话的cookie绝对路径
            'cookiePath'     => '', // __dir__ . '/cookie',
                                    // 代理ip:port
            'proxy'          => '',
            // 代理user:pwd
            'proxyUserpwd'   => '',
        ];
        if (is_string($opt)) {
            $conf['url'] = $opt;
        } else {
            $conf = array_merge($conf, $opt);
        }
        $conf['parseCookie'] && ($conf['responseHeader'] = true);
        if (is_string($conf['requestHeader'])) {
            $conf['requestHeader'] = trim($conf['requestHeader']);
            $conf['requestHeader'] = preg_split('/\r?\n/', $conf['requestHeader']);
        }
        if (!$conf['url']) {
            return '';
        }
        $ch = curl_init();
        //跳过ssl检查项。
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_URL, $conf['url']);
        if ($conf['postdata'] || $conf['post'] === true) {
            $postdata = $conf['postdata'];
            curl_setopt($ch, CURLOPT_POST, 1);
            if (is_array($postdata)) {
                $postdata = http_build_query($postdata);
            }
            $postdata && curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata); //设置post数据
        } else {
            curl_setopt($ch, CURLOPT_POST, 0);
        }
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $conf['timeout']); //超时
                                                                    //自动递归的抓取重定向后的页面,0时禁止重定向
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, $conf['followRedirect']);
        //设置请求头
        $conf['requestHeader'] && curl_setopt($ch, CURLOPT_HTTPHEADER, $conf['requestHeader']);
        //返回内容不直接输出到浏览器,保存到变量中
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //不取正文内容,在只需要响应头的时候开启这个,加快响应速度
        curl_setopt($ch, CURLOPT_NOBODY, $conf['nobody']);
        curl_setopt($ch, CURLOPT_HEADER, $conf['responseHeader']); //将响应头信息作为数据流输出
        if ($conf['cookiePath']) {
            // 设置将返回的cookie保存到$cookie所指文件
            curl_setopt($ch, CURLOPT_COOKIEJAR, $conf['cookiePath']);
            // 设置从$cookie所指文件中读取cookie信息以发送
            curl_setopt($ch, CURLOPT_COOKIEFILE, $conf['cookiePath']);
        }

        $conf['proxy'] && curl_setopt($ch, CURLOPT_PROXY, $conf['proxy']);                      //设置代理
        $conf['proxyUserpwd'] && curl_setopt($ch, CURLOPT_PROXYUSERPWD, $conf['proxyUserpwd']); //设置代理账号密码
        $data = curl_exec($ch);
        //如果上面设置啦响应头信息输出到数据流可以用下面的方法取响应头中的信息
        //取响应头信息
        if ($conf['responseHeader']) {
            $weizhi = strpos($data, "\r\n\r\n");
            $data   = [
                'header'  => substr($data, 0, $weizhi),
                'content' => substr($data, $weizhi + 4),
            ];
        }
        if ($conf['parseCookie']) {
            $cookie = [];
            if (preg_match_all('/Set-Cookie:\s(.+?)=(.+?);/i', $data['header'], $mat)) {
                foreach ($mat[1] as $key => $value) {
                    $cookie[$value] = $mat[2][$key];
                }
            }
            $data['cookie'] = $cookie;
        }
        //请求出错退出
        if ($error = curl_error($ch)) {
            return $error;
        }
        curl_close($ch);

        return $data;

    }

    /**
     * sdk constructor.
     * @param $appKey
     * @param $appSecret
     * @param null         $apiUrl
     */
    private function __construct($appKey, $appSecret, $apiUrl = null)
    {
        $this->appKey    = $appKey;
        $this->appSecret = $appSecret;
        if ($apiUrl !== null) {
            $this->apiUrl = $apiUrl;
        }
    }
}
