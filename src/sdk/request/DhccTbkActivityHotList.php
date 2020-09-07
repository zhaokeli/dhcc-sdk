<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

class DhccTbkActivityHotList extends Request
{
    use Page;

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.tbk.activity.hot.list';
    }
}
