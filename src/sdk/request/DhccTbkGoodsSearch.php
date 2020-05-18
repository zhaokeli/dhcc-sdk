<?php

namespace dhcc\sdk\request;

use dhcc\sdk\traits\Page;

/**
 * 淘宝联盟搜索，结合本站人工精选商品显示最佳结果
 * @package dhcc\sdk\request
 */
class DhccTbkGoodsSearch extends Request
{
    protected $params = [
        'is_coupon' => 0
    ];
    use Page;

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.tbk.goods.search';
    }

    /**
     * 搜索关键字
     * @param string $keyword
     * @return $this
     */
    public function setKeyword(string $keyword)
    {
        $this->params['keyword'] = $keyword;

        return $this;
    }

    /**
     * 物料id(详细物料id见：https://tbk.bbs.taobao.com/detail.html?appId=45301&postId=8576096)。不传时默认为2836
     * @param int $materialId
     * @return $this
     */
    public function setMaterialId(int $materialId)
    {
        $this->params['material_id'] = $materialId;

        return $this;
    }

    /**
     * 商品类型 1-淘宝，2-天猫
     * @param int $type
     * @return $this
     */
    public function setType(int $type = 1)
    {
        $this->params['type'] = $type;

        return $this;
    }

    /**
     * 商品排序,0.综合，1.最新，2.销量（高到低），3.销量（低到高），4.价格(高到低）5.价格（低到高）6.佣金比例（高到低）
     * @param int $sort
     * @return $this
     */
    public function setSort(int $sort = 1)
    {
        $this->params['sort'] = $sort;

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

    /**
     * 口令搜索模式
     * @param bool $isTklMode
     * @return $this
     */
    public function setTaobaokoulingSearchMode(bool $isTklMode)
    {
        $this->params['taobaokouling_search_mode'] = $isTklMode ? 1 : 0;

        return $this;
    }

    /**
     * 口令转标题搜索模式
     * @param bool $isTitleMode
     * @return $this
     */
    public function setTaobaokoulingTitleMode(bool $isTitleMode)
    {
        $this->params['taobaokouling_title_mode'] = $isTitleMode ? 1 : 0;

        return $this;
    }

    /**
     * 起始佣金比例
     * @param bool $startTkRate
     * @return $this
     */
    public function setStartTkRate(bool $startTkRate)
    {
        $this->params['start_tk_rate'] = $startTkRate;

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
}
