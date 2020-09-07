<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 两级分类列表
 * 带子分类列表，分类为:1=淘宝（默认）,2=天猫,3=京东,4=拼多多,5=本站分类
 * Class DhccGoodsCateListTwo
 * @package Dhcc\sdk\request
 */
class DhccGoodsCateListTwo extends Request
{

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.goods.cate.list.two';
    }
}
