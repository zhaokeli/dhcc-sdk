<?php

namespace dhcc\sdk\request;

use dhcc\sdk\traits\Page;

/**
 * 淘宝各大榜单数据，1.实时榜 2.全天榜 3.热推榜
 * 由平台人工整理，收集优质商品
 * Class DhccTbkGoodsRanking
 * @package dhcc\sdk\request
 */
class DhccActivityList extends Request
{
    use Page;

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.activity.list';
    }

    /**
     * 标题关键词搜索,可空
     * @param int $keywords
     * @return $this
     */
    public function setKeywords(int $keywords)
    {
        $this->params['keywords'] = $keywords;

        return $this;
    }

    /**
     * 平台活动细分类型,可空
     * @param int $subType
     * @return $this
     */
    public function setSubType(int $subType)
    {
        $this->params['sub_type'] = $subType;

        return $this;
    }

    /**
     * 平台类型,1淘客，3京东，4拼多多，9唯品会，12苏宁，11考拉, 默认全部
     * @param int $type
     * @return $this
     */
    public function setType(int $type)
    {
        $this->params['type'] = $type;

        return $this;
    }
}
