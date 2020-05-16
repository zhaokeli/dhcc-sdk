<?php

namespace dhcc\sdk\request;

use dhcc\sdk\traits\Page;

/**
 * 分类树
 * 分类标题里带缩进字符串，支持 1=淘宝（默认）,3=京东,4=拼多多,5=本站分类
 * Class DhccGoodsCateTree
 * @package dhcc\sdk\request
 */
class DhccGoodsCateTree extends Request
{

    protected $params = [
        'pid' => 0
    ];

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.goods.cate.tree';
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
