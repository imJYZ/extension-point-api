<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 退款计算结果
 * @author Baymax
 * @create Tue Oct 09 10:05:17 CST 2018
 */
class RefundableAmountDTO implements \JsonSerializable {

    /**
     * 订单或者商品的可退金额（单位分）
     * @var integer
     */
    private $refundableAmt;

    /**
     * orderNo 或者 itemId，可以针对商品也可以针对整个订单
     * @var string
     */
    private $bizNo;



    /**
     * @return integer
     */
    public function getRefundableAmt(): integer
    {
        return $this->refundableAmt;
    }

    /**
     * @param integer $refundableAmt
     */
    public function setRefundableAmt(integer $refundableAmt): void
    {
        $this->refundableAmt = $refundableAmt;
    }

    /**
     * @return string
     */
    public function getBizNo(): string
    {
        return $this->bizNo;
    }

    /**
     * @param string $bizNo
     */
    public function setBizNo(string $bizNo): void
    {
        $this->bizNo = $bizNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}