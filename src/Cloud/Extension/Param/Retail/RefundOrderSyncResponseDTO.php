<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 
 * @author Baymax
 * @create Thu Jul 25 11:45:35 CST 2019
 */
class RefundOrderSyncResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var bool
     */
    private $success;



    /**
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(bool $success): void
    {
        $this->success = $success;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}