<?php

namespace Com\Youzan\Cloud\Extension\Param\Refund;



/**
 * 头消息
 * @author Baymax
 * @create Fri Jan 11 14:24:24 CST 2019
 */
class ThirdPartyRefundNsqMessageHeadersDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $produced_at;

    /**
     * 
     * @var string
     */
    private $from;



    /**
     * @return string
     */
    public function getProduced_at(): string
    {
        return $this->produced_at;
    }

    /**
     * @param string $produced_at
     */
    public function setProduced_at(string $produced_at): void
    {
        $this->produced_at = $produced_at;
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom(string $from): void
    {
        $this->from = $from;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}