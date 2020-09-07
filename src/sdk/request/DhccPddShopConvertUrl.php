<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 店铺转链
 * @package Dhcc\sdk\request
 */
class DhccPddShopConvertUrl extends Request
{

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.pdd.shop.converturl';
    }
    

    /**
     * 店铺id
     * @param string $shopId
     * @return $this
     */
    public function setShopId(string $shopId)
    {
        $this->params['shop_id'] = $shopId;

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
     * pid
     * @param string $pid
     * @return $this
     */
    public function setPid(string $pid)
    {
        $this->params['pid'] = $pid;

        return $this;
    }


}
