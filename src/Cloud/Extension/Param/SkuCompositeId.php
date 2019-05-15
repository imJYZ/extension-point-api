<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 复合id
 * @author Baymax
 * @create Mon Oct 22 20:30:57 CST 2018
 */
class SkuCompositeId implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $goodsId;

    /**
     * 
     * @var int
     */
    private $skuId;



    /**
     * @return int
     */
    public function getGoodsId(): int
    {
        return $this->goodsId;
    }

    /**
     * @param int $goodsId
     */
    public function setGoodsId(int $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * @return int
     */
    public function getSkuId(): int
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId(int $skuId): void
    {
        $this->skuId = $skuId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}