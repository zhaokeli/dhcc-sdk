<?php

namespace dhcc\sdk\request;

use dhcc\sdk\traits\Page;

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
