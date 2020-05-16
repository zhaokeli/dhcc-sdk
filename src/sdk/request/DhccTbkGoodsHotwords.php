<?php

namespace dhcc\sdk\request;

use dhcc\sdk\traits\Page;

/**
 * 热搜词
 * @package dhcc\sdk\request
 */
class DhccTbkGoodsHotwords extends Request
{
    protected $params = [
        'num' => 20
    ];

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.tbk.goods.hotwords';
    }

    /**
     * 关键词个数1-100,默认20
     * @param int $num
     * @return $this
     */
    public function setNum(int $num)
    {
        $this->params['num'] = $num;

        return $this;
    }
}
