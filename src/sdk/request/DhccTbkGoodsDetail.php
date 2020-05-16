<?php

namespace dhcc\sdk\request;

use dhcc\sdk\traits\Page;

/**
 * 商品详情
 * @package dhcc\sdk\request
 */
class DhccTbkGoodsDetail extends Request
{

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.tbk.goods.detail';
    }

    /**
     * @param int $numIid
     * @return $this
     */
    public function setNumIid(int $numIid)
    {
        $this->params['num_iid'] = $numIid;

        return $this;
    }

    /**
     * 活动id
     * @param string $activityId
     * @return $this
     */
    public function setActivityId(string $activityId)
    {
        $this->params['activity_id'] = $activityId;

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
}
