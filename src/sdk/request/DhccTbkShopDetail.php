<?php

namespace dhcc\sdk\request;

use dhcc\sdk\traits\Page;

/**
 * 店铺详情
 * @package dhcc\sdk\request
 */
class DhccTbkShopDetail extends Request
{

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.tbk.shop.detail';
    }

    /**
     * @param int $numIid
     * @return $this
     */
    public function setNumIid(int $numIid)
    {
        $this->params['num_iid'] = $numIid;

        return $this;
    }
}
