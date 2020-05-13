<?php

namespace dhcc\opensdk\request;

use dhcc\opensdk\traits\Page;

class DhccTbkActivityHotList extends Request
{
    use Page;

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.tbk.activity.hot.list';
    }


}