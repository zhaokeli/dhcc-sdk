<?php

namespace dhcc\sdk\request;

use dhcc\sdk\traits\Page;

/**
 * 店铺列表
 * @package dhcc\sdk\request
 */
class DhccPddShopList extends Request
{
    protected $params = [
        'nogoods' => 0
    ];
    use Page;

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.pdd.shop.list';
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
     * 无需返回商品 1=是，0=否，默认0
     * @param bool $noGoods
     * @return $this
     */
    public function setNoGodos(bool $noGoods)
    {
        $this->params['nogoods'] = $noGoods ? 1 : 0;

        return $this;
    }


}
