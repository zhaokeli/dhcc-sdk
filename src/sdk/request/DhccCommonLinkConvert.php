<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 智能链接转换
 * 自动识别平台链接进行转换,目前支持淘客，京东，拼多多，唯品会,接口中的参数在你知道所属平台的情况下也可以按需传参，如果识别出来的平台 没传这个平台的必传参数就会报错。
 * Class DhccCommonLinkConvert
 * @package Dhcc\sdk\request
 */
class DhccCommonLinkConvert extends Request
{
    use Page;

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.common.linkconvert';
    }

    /**
     * 需要转换文案中的淘口令，淘宝，拼多多，京东,唯品会分享的链接
     * @param string $content
     * @return $this
     */
    public function setContent(string $content)
    {
        $this->params['content'] = $content;

        return $this;
    }

    /**
     * @param string $tbPid
     * @return $this
     */
    public function setTbPid(string $tbPid)
    {
        $this->params['tb_pid'] = $tbPid;

        return $this;
    }

    /**
     * tb_relation_id 淘宝渠道id
     * @param string $tbRelationId
     * @return $this
     */
    public function setTbRelationId(string $tbRelationId)
    {
        $this->params['tb_relation_id'] = $tbRelationId;

        return $this;
    }

    /**
     * 淘宝授权key转链必须
     * @param string $tbSessionKey
     * @return $this
     */
    public function setTbSessionKey(string $tbSessionKey)
    {
        $this->params['tb_session_key'] = $tbSessionKey;

        return $this;
    }

    /**
     * @param string $jdPid
     * @return $this
     */
    public function setJdPid(string $jdPid)
    {
        $this->params['jd_pid'] = $jdPid;

        return $this;
    }

    /**
     * @param string $pddPid
     * @return $this
     */
    public function setPddPid(string $pddPid)
    {
        $this->params['pdd_pid'] = $pddPid;

        return $this;
    }

    /**
     * 拼多多访问token
     * @param string $pddAccessToken
     * @return $this
     */
    public function setPddAccessToken(string $pddAccessToken)
    {
        $this->params['pdd_access_token'] = $pddAccessToken;

        return $this;
    }

    /**
     * @param string $vipPid
     * @return $this
     */
    public function setVipPid(string $vipPid)
    {
        $this->params['vip_pid'] = $vipPid;

        return $this;
    }

    /**
     * 唯品会授权token
     * @param string $vipAccessToken
     * @return $this
     */
    public function setVipAccessToken(string $vipAccessToken)
    {
        $this->params['vip_access_token'] = $vipAccessToken;

        return $this;
    }
}
