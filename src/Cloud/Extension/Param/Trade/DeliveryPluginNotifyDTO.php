<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;

use Com\Youzan\Cloud\Extension\Param\OrderMsgDTO;

/**
 * 
 * @author Baymax
 * @create Tue Nov 06 20:20:56 CST 2018
 */
class DeliveryPluginNotifyDTO implements \JsonSerializable {

    /**
     * 订单
     * @var OrderMsgDTO
     */
    private $order;



    /**
     * @return OrderMsgDTO
     */
    public function getOrder(): OrderMsgDTO
    {
        return $this->order;
    }

    /**
     * @param OrderMsgDTO $order
     */
    public function setOrder(OrderMsgDTO $order): void
    {
        $this->order = $order;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}