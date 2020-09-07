<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 分类列表
 * 根据传入的父分类id，返回一维数组分类列表，支持 1=淘宝（默认）,3=京东,4=拼多多,5=本站分类
 * Class DhccGoodsCateList
 * @package Dhcc\sdk\request
 */
class DhccGoodsCateList extends Request
{


    protected $params = [
        'pid' => 0
    ];

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.goods.cate.list';
    }

    /**
     * 分类id,多个,连接
     * @param string $ids
     * @return $this
     */
    public function setIds(string $ids)
    {
        $this->params['ids'] = $ids;

        return $this;
    }

    /**
     * 上级id 默认0
     * @param int $pid
     * @return $this
     */
    public function setPid(int $pid = 0)
    {
        $this->params['pid'] = $pid;

        return $this;
    }

    /**
     * 类型:1=淘宝（默认）,3=京东,4=拼多多,5=本站分类
     * @param int $type
     * @return $this
     */
    public function setType(int $type = 1)
    {
        $this->params['type'] = $type;

        return $this;
    }
}
