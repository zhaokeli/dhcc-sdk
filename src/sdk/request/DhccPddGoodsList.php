<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 商品列表
 * @package Dhcc\sdk\request
 */
class DhccPddGoodsList extends Request
{
    use Page;

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.pdd.goods.list';
    }

    /**
     * 商品id,可以多个，','分隔
     * @param string $originIds
     * @return $this
     */
    public function setOriginIds(string $originIds)
    {
        $this->params['origin_ids'] = $originIds;

        return $this;
    }

    /**
     * 商品排序,0.综合，1.最新，2.销量（高到低），3.销量（低到高），4.价格(高到低）5.价格（低到高）6.佣金比例（高到低）7.佣金比例（低到高）8.优惠券价格（高到低）9.优惠券价格（低到高）10.券后价（高到低）11.券后价（低到高）
     * @param int $sort
     * @return $this
     */
    public function setSort(int $sort)
    {
        $this->params['sort'] = $sort;

        return $this;
    }

    /**
     * 搜索id,它将影响转换效率，佣金收益，API 调用频次！
     * @param string $searchId
     * @return $this
     */
    public function setSearchId(string $searchId)
    {
        $this->params['search_id'] = $searchId;

        return $this;
    }

    /**
     * 分类id
     * @param string $cateId
     * @return $this
     */
    public function setCateId(string $cateId)
    {
        $this->params['cate_id'] = $cateId;

        return $this;
    }

    /**
     * 是否是多人团
     * @param bool $multiGroup
     * @return $this
     */
    public function setMultiGroup(bool $multiGroup)
    {
        $this->params['multi_group'] = $multiGroup ? 1 : 0;

        return $this;
    }

    /**
     * access_token
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken(string $accessToken)
    {
        $this->params['access_token'] = $accessToken;

        return $this;
    }

    /**
     * pid
     * @param string $pid
     * @return $this
     */
    public function setPid(string $pid)
    {
        $this->params['pid'] = $pid;

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
