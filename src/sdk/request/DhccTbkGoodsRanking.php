<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 淘宝各大榜单数据，1.实时榜 2.全天榜 3.热推榜
 * 由平台人工整理，收集优质商品
 * Class DhccTbkGoodsRanking
 * @package Dhcc\sdk\request
 */
class DhccTbkGoodsRanking extends Request
{
    use Page;

    const RANK_TYPE_HOUR  = 1;
    const RANK_TYPE_DAY   = 2;
    const RANK_TYPE_MONTH = 3;

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.tbk.goods.ranking';
    }

    public function setCateId(int $cateId)
    {
        $this->params['cate_id'] = $cateId;

        return $this;
    }

    public function setRankType(int $rank_type)
    {
        $this->params['rank_type'] = $rank_type;

        return $this;
    }
}
