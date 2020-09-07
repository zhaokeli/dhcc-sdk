<?php

namespace Dhcc\sdk\request;

class DhccTbkActivityHotDetail extends Request
{
    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.tbk.activity.hot.detail';
    }

    public function setActivityId(string $activityId)
    {
        $this->params['activity_id'] = $activityId;

        return $this;
    }
}
