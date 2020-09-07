<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 9.9包邮列表
 * @package Dhcc\sdk\request
 */
class DhccTbkGoodsNineList extends Request
{
    use Page;

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.tbk.goods.nine.list';
    }


    /**
     * 分类id： - 1 - 精选，1 - 居家百货，2 - 美食，3 - 服饰，4 - 配饰，5 - 美妆，6 - 内衣，7 - 母婴，8 - 箱包，9 - 数码配件，10 - 文娱车品
     * @param int $nineId
     * @return $this
     */
    public function setNineCid(int $nineId)
    {
        $this->params['nine_cid'] = $nineId;

        return $this;
    }
}
