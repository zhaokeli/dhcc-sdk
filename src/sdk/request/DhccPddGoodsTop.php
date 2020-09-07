<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 实时热销榜
 * @package Dhcc\sdk\request
 */
class DhccPddGoodsTop extends Request
{
    use Page;

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.pdd.goods.top';
    }


    /**
     * 1-实时热销榜；2-实时收益榜,3-实时销量榜
     * @param int $sortType
     * @return $this
     */
    public function setSortType(int $sortType)
    {
        $this->params['sort_type'] = $sortType;

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


}
