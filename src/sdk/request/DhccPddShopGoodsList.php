<?php

namespace dhcc\sdk\request;

use dhcc\sdk\traits\Page;

/**
 * 店铺商品列表
 * @package dhcc\sdk\request
 */
class DhccPddShopGoodsList extends Request
{
    use Page;

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.pdd.shop.goodslist';
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


}
