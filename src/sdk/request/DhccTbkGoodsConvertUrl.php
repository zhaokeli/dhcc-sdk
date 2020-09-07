<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 商品转链
 * @package Dhcc\sdk\request
 */
class DhccTbkGoodsConvertUrl extends Request
{

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.tbk.goods.converturl';
    }

    /**
     * 商品id,链接或淘口令
     * @param string $numIid
     * @return $this
     */
    public function setNumIid(string $numIid)
    {
        $this->params['num_iid'] = $numIid;

        return $this;
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
     * 是否爆料0否1是
     * @param bool $isCustom
     * @return $this
     */
    public function setIsCustom(bool $isCustom)
    {
        $this->params['is_custom'] = $isCustom ? 1 : 0;

        return $this;
    }

    /**
     * 是否0元购 1是 0否 默认否
     * @param bool $isDisc
     * @return $this
     */
    public function setIsDisc(bool $isDisc)
    {
        $this->params['is_disc'] = $isDisc ? 1 : 0;

        return $this;
    }

    /**
     * 是否需要淘口令 0否1是
     * @param bool $needTbkPwd
     * @return $this
     */
    public function setNeedTbkPwd(bool $needTbkPwd)
    {
        $this->params['need_tbk_pwd'] = $needTbkPwd ? 1 : 0;

        return $this;
    }

    /**
     * 活动id
     * @param string $activityId
     * @return $this
     */
    public function setActivityId(string $activityId)
    {
        $this->params['activityId'] = $activityId;

        return $this;
    }

    /**
     * 券id
     * @param string $couponId
     * @return $this
     */
    public function setCouponId(string $couponId)
    {
        $this->params['coupon_id'] = $couponId;

        return $this;
    }

    /**
     * 渠道id
     * @param string $relationId
     * @return $this
     */
    public function setRelationId(string $relationId)
    {
        $this->params['relation_id'] = $relationId;

        return $this;
    }
}
