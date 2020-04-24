<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';
$appKey    = 'xxxxx';
$appSecret = 'xxxxxx';
$sdk       = new \dhcc\opensdk\OpenSDK($appKey, $appSecret);
$params    = [
    'title' => '端口标题'
];
$data      = $sdk->execute('dhcc.tbk.randing', $params);
echo $data;