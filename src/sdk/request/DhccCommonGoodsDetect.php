<?php

namespace dhcc\sdk\request;

/**
 * 可检测淘口令，淘宝，拼多多，京东,唯品会链接
 * Class DhccTbkActivityList
 * @package dhcc\sdk\request
 */
class DhccCommonGoodsDetect extends Request
{
    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.common.goods.detect';
    }

    /**
     * 可检测淘口令，淘宝，拼多多，京东,唯品会链接
     * @param  string                  $content
     * @return DhccCommonGoodsDetect
     */
    public function setContent(string $content)
    {
        $this->params['content'] = $content;

        return $this;
    }
}
