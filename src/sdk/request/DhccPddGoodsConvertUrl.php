<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 商品链接
 * @package Dhcc\sdk\request
 */
class DhccPddGoodsConvertUrl extends Request
{

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.pdd.goods.converturl';
    }

    /**
     * 商品id
     * @param int $originId
     * @return $this
     */
    public function setOriginId(int $originId)
    {
        $this->params['origin_id'] = $originId;

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
