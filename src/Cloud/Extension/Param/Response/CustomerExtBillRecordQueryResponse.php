<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Dto\VlaueCardExtBillRecordDTO;

/**
 * 
 * @author Baymax
 * @create Mon Jan 06 11:40:30 CST 2020
 */
class CustomerExtBillRecordQueryResponse implements \JsonSerializable {

    /**
     * 卡列表
     * @var array
     */
    private $valueCardBillRecords;

    /**
     * 记录总条数（用于分页）
     * @var int
     */
    private $totalNum;



    /**
     * @return array
     */
    public function getValueCardBillRecords(): array
    {
        return $this->valueCardBillRecords;
    }

    /**
     * @param array $valueCardBillRecords
     */
    public function setValueCardBillRecords(array $valueCardBillRecords): void
    {
        $this->valueCardBillRecords = $valueCardBillRecords;
    }

    /**
     * @return int
     */
    public function getTotalNum(): int
    {
        return $this->totalNum;
    }

    /**
     * @param int $totalNum
     */
    public function setTotalNum(int $totalNum): void
    {
        $this->totalNum = $totalNum;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}