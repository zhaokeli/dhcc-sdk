<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 店铺转链
 * @package Dhcc\sdk\request
 */
class DhccTbkShopConvertUrl extends Request
{

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.tbk.shop.converturl';
    }

    /**
     * 推广位id
     * @param string $pid
     * @return $this
     */
    public function setPid(string $pid)
    {
        $this->params['pid'] = $pid;

        return $this;
    }

    public function setSession(string $session)
    {
        $this->params['session'] = $session;

        return $this;
    }

    /**
     * 卖家ID串
     * @param string $userIds
     * @return $this
     */
    public function setUserIds(string $userIds)
    {
        $this->params['user_ids'] = $userIds;

        return $this;
    }
}
