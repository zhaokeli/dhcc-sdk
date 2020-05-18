<?php

namespace dhcc\sdk\request;

use dhcc\sdk\traits\Page;

/**
 * 全网搜
 * @package dhcc\sdk\request
 */
class DhccPddGoodsSearch extends Request
{
    use Page;

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.pdd.goods.search';
    }

    /**
     * 关键字
     * @param string $keyword
     * @return $this
     */
    public function setKeyword(string $keyword)
    {
        $this->params['keyword'] = $keyword;

        return $this;
    }

    /**
     * 商品排序,0.综合，1.最新，2.销量（高到低），3.销量（低到高），4.价格(高到低）5.价格（低到高）6.佣金比例（高到低）7.佣金比例（低到高）8.优惠券价格（高到低）9.优惠券价格（低到高）10.券后价（高到低）11.券后价（低到高）
     * @param int $sort
     * @return $this
     */
    public function setSort(int $sort)
    {
        $this->params['sort'] = $sort;

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

    /**
     * 起始价格
     * @param int $startPrice
     * @return $this
     */
    public function setStartPrice(int $startPrice)
    {
        $this->params['start_price'] = $startPrice;

        return $this;
    }

    /**
     * 结束价格
     * @param int $endPrice
     * @return $this
     */
    public function setEndPrice(int $endPrice)
    {
        $this->params['end_price'] = $endPrice;

        return $this;
    }

    /**
     * 是否有优惠券
     * @param bool $isHas
     * @return $this
     */
    public function setIsCoupon(bool $isHas = false)
    {
        $this->params['is_coupon'] = $isHas ? 1 : 0;

        return $this;
    }
}
