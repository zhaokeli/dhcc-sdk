<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 9.9包邮分类
 * @package Dhcc\sdk\request
 */
class DhccTbkGoodsNineCate extends Request
{
    protected $params = [
        'num' => 20
    ];

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.tbk.goods.nine.cate';
    }

    /**
     * 分类id,使用 ','分隔
     * @param string $cateIds
     * @return $this
     */
    public function setCateIds(string $cateIds)
    {
        $this->params['cate_ids'] = $cateIds;

        return $this;
    }
}
