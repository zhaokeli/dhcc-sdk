<?php

namespace dhcc\sdk\request;

use dhcc\sdk\traits\Page;

/**
 * 联想词
 * @package dhcc\sdk\request
 */
class DhccTbkGoodsSuggestion extends Request
{
    protected $params = [
        'num' => 20
    ];

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.tbk.goods.suggestion';
    }

    /**
     * 搜索关键字
     * @param string $keywords
     * @return $this
     */
    public function setKeywords(string $keywords)
    {
        $this->params['keywords'] = $keywords;

        return $this;
    }

    /**
     * 当前搜索API类型：1.本站搜索 2.联盟搜索 3.超级搜索
     * @param int $type
     * @return $this
     */
    public function setType(int $type = 1)
    {
        $this->params['type'] = $type;

        return $this;
    }
}
