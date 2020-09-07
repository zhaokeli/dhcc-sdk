<?php

namespace Dhcc\sdk\traits;

trait Page
{
    /**
     * 当前请求页
     * @param  int    $page
     * @return Page
     */
    public function setPage(int $page = 1)
    {
        $this->params['page'] = $page;

        return $this;
    }

    /**
     * 当前请求页面大小
     * @param  int    $pageSize
     * @return Page
     */
    public function setPageSize(int $pageSize)
    {
        $this->params['pagesize'] = $pageSize;

        return $this;
    }

    /**
     * 当前列表请求id
     * @param  string $requestId
     * @return Page
     */
    public function setRequestId(string $requestId)
    {
        $this->params['request_id'] = $requestId;

        return $this;
    }
}
