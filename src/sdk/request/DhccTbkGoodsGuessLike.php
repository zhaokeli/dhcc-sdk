<?php

namespace Dhcc\sdk\request;

use Dhcc\sdk\traits\Page;

/**
 * 猜你喜欢
 * @package Dhcc\sdk\request
 */
class DhccTbkGoodsGuessLike extends Request
{
    use Page;

    public function getApiName(): string
    {
        // TODO: Implement getApiName() method.
        return 'dhcc.tbk.goods.guesslike';
    }

    /**
     * 设备类型
     * @param string $deviceType
     * @return $this
     */
    public function setDeviceType(string $deviceType)
    {
        $this->params['device_type'] = $deviceType;

        return $this;
    }

    /**
     * 设备号
     * @param string $deviceValue
     * @return $this
     */
    public function setDeviceValue(string $deviceValue)
    {
        $this->params['device_value'] = $deviceValue;

        return $this;
    }
}
