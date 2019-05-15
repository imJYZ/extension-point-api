<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 联系地址
 * @author Baymax
 * @create Sat Sep 29 21:39:22 CST 2018
 */
class ContactAddressModifyDTO implements \JsonSerializable {

    /**
     * 地域编码
     * @var string
     */
    private $areaCode;

    /**
     * 详细地址
     * @var string
     */
    private $address;



    /**
     * @return string
     */
    public function getAreaCode(): string
    {
        return $this->areaCode;
    }

    /**
     * @param string $areaCode
     */
    public function setAreaCode(string $areaCode): void
    {
        $this->areaCode = $areaCode;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}