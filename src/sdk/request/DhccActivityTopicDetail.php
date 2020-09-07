<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 淘宝各大榜单数据，1.实时榜 2.全天榜 3.热推榜
 * 由平台人工整理，收集优质商品
 * Class DhccTbkGoodsRanking
 * @package Dhcc\sdk\request
 */
class DhccActivityTopicDetail extends Request
{
    protected $params = [
        'has_activity_list' => 0
    ];

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.activity.topic.detail';
    }

    /**
     * 活动专题id
     * @param int $activityTopicId
     * @return $this
     */
    public function setActivityTopicId(int $activityTopicId)
    {
        $this->params['activity_topic_id'] = $activityTopicId;

        return $this;
    }

    /**
     * 是否返回此专题中的活动列表，默认为不返回
     * @param bool $hasActivityList
     * @return $this
     */
    public function sethasActivityList(bool $hasActivityList)
    {
        $this->params['has_activity_list'] = $hasActivityList ? 1 : 0;

        return $this;
    }
}
