<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';
$appKey    = 'xxxxxxx';
$appSecret = 'xxxxxxxxxxx';
$apiUrl    = 'http://openapi.dhcc.wang';

$sdk    = new \dhcc\opensdk\OpenSDK($appKey, $appSecret, $apiUrl);
$params = [
    'rank_type' => 1
];
$data   = $sdk->execute('dhcc.tbk.goods.ranking', $params);
$data   = json_decode($data, true);
var_dump($data);