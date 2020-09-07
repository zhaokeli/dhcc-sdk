<?php

use Dhcc\sdk\request\DhccTbkGoodsRanking;
use Dhcc\sdk\SDKClient;

require_once dirname(__DIR__) . '/vendor/autoload.php';
$appKey    = 'xxxxxxxxxx';
$appSecret = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$envPath   = __DIR__ . '/../.env';
if (is_file($envPath)) {
    $conf      = parse_ini_file($envPath, true);
    $appKey    = $conf['openapi']['app_key'];
    $appSecret = $conf['openapi']['app_secret'];
}
$apiUrl = 'http://openapi.dhcc.wang';
$client = SDKClient::getInstance($appKey, $appSecret, $apiUrl);
$params = [
    'rank_type' => 1,
];
$data   = $client->executeApi('dhcc.tbk.goods.ranking', $params);
$data   = json_decode($data, true);
var_dump($data);

$req = new DhccTbkGoodsRanking();
$req->setRankType(DhccTbkGoodsRanking::RANK_TYPE_HOUR);
$data = $client->executeRequest($req);
$data = json_decode($data, true);
var_dump($data);

$req = new \Dhcc\sdk\request\DhccTbkGoodsSearch();
$req->setKeyword('女装');
$data = $client->executeRequest($req);
$data = json_decode($data, true);
var_dump($data);
