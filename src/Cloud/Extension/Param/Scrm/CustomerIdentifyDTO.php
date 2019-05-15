<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 
 * @author Baymax
 * @create Sat Sep 29 21:13:57 CST 2018
 */
class CustomerIdentifyDTO implements \JsonSerializable {

    /**
     * 账号类型
     * @var string
     */
    private $accountType;

    /**
     * 账号ID
     * @var string
     */
    private $accountId;



    /**
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     */
    public function setAccountType(string $accountType): void
    {
        $this->accountType = $accountType;
    }

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     */
    public function setAccountId(string $accountId): void
    {
        $this->accountId = $accountId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}