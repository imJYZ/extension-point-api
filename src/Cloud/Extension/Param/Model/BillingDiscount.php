<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\Goods;

/**
 * 优惠信息
 * @author Baymax
 * @create Wed Feb 08 10:55:56 CST 2023
 */
class BillingDiscount implements \JsonSerializable {

    /**
     * 商品及均摊优惠信息
     * @var array
     */
    private $goodsList;

    /**
     * 订单总优惠（单位/分）
     * @var int
     */
    private $decrease;

    /**
     * 订单总支付金额（单位/分）
     * @var int
     */
    private $pay;



    /**
     * @return array
     */
    public function getGoodsList(): ?array
    {
        return $this->goodsList;
    }

    /**
     * @param array $goodsList
     */
    public function setGoodsList(?array $goodsList): void
    {
        $this->goodsList = $goodsList;
    }

    /**
     * @return int
     */
    public function getDecrease(): ?int
    {
        return $this->decrease;
    }

    /**
     * @param int $decrease
     */
    public function setDecrease(?int $decrease): void
    {
        $this->decrease = $decrease;
    }

    /**
     * @return int
     */
    public function getPay(): ?int
    {
        return $this->pay;
    }

    /**
     * @param int $pay
     */
    public function setPay(?int $pay): void
    {
        $this->pay = $pay;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}