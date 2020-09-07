<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 频道商品
 * @package Dhcc\sdk\request
 */
class DhccPddGoodsChannel extends Request
{

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.pdd.goods.channel';
    }

    /**
     * 频道类型；0=1.9包邮, 1=今日爆款, 2=品牌清仓, 3=默认商城, 非必填 ,默认是1
     * @param int $channelType
     * @return $this
     */
    public function setChannelType(int $channelType)
    {
        $this->params['channel_type'] = $channelType;

        return $this;
    }

    /**
     * access_token
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken(string $accessToken)
    {
        $this->params['access_token'] = $accessToken;

        return $this;
    }

    /**
     * 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节
     * @param string $customParameters
     * @return $this
     */
    public function setCustomParameters(string $customParameters)
    {
        $this->params['custom_parameters'] = $customParameters;

        return $this;
    }
}
