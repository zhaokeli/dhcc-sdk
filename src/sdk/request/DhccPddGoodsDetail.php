<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 商品详情
 * @package Dhcc\sdk\request
 */
class DhccPddGoodsDetail extends Request
{

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.pdd.goods.detail';
    }


    /**
     * 商品id
     * @param int $originId
     * @return $this
     */
    public function setOriginId(int $originId)
    {
        $this->params['origin_id'] = $originId;

        return $this;
    }

    /**
     * 搜索id,它将影响转换效率，佣金收益，API 调用频次！
     * @param string $searchId
     * @return $this
     */
    public function setSearchId(string $searchId)
    {
        $this->params['search_id'] = $searchId;

        return $this;
    }
}
