<?php
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
$apiUrl = 'https://openapi.huatuitui.com';
$client = SDKClient::getInstance($appKey, $appSecret, $apiUrl);
$params = [
    'keyword' => '女装',
];
$data   = $client->executeApi('dhcc.tbk.goods.search', $params);
$data   = json_decode($data, true);
var_dump($data);
