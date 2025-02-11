<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 商品列表
 * @author Baymax
 * @create Wed Feb 08 10:55:56 CST 2023
 */
class GoodsInfo implements \JsonSerializable {

    /**
     * 商品ID
     * @var int
     */
    private $itemId;

    /**
     * SKU ID
     * @var int
     */
    private $skuId;

    /**
     * 条目 ID，可以确定一笔订单中的一项
     * @var int
     */
    private $orderItemId;

    /**
     * 商品价格
     * @var int
     */
    private $price;

    /**
     * 商品数量
     * @var int
     */
    private $num;

    /**
     * 商品编码
     * @var string
     */
    private $itemsNo;



    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(?int $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getSkuId(): ?int
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId(?int $skuId): void
    {
        $this->skuId = $skuId;
    }

    /**
     * @return int
     */
    public function getOrderItemId(): ?int
    {
        return $this->orderItemId;
    }

    /**
     * @param int $orderItemId
     */
    public function setOrderItemId(?int $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    /**
     * @return int
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(?int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(?int $num): void
    {
        $this->num = $num;
    }

    /**
     * @return string
     */
    public function getItemsNo(): ?string
    {
        return $this->itemsNo;
    }

    /**
     * @param string $itemsNo
     */
    public function setItemsNo(?string $itemsNo): void
    {
        $this->itemsNo = $itemsNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}