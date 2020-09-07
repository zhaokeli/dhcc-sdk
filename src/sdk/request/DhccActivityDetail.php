<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 淘宝各大榜单数据，1.实时榜 2.全天榜 3.热推榜
 * 由平台人工整理，收集优质商品
 * Class DhccTbkGoodsRanking
 * @package Dhcc\sdk\request
 */
class DhccActivityDetail extends Request
{


    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.activity.detail';
    }

    /**
     * 活动id
     * @param int $activityId
     * @return $this
     */
    public function setActivityId(int $activityId)
    {
        $this->params['activity_id'] = $activityId;

        return $this;
    }
}
