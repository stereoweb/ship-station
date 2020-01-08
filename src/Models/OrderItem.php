<?php


namespace MichaelB\ShipStation\Models;


class OrderItem extends BaseModel
{
    /**
     * @var int
     */
    protected $orderItemId;

    /**
     * @var string
     */
    protected $lineItemKey;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $imageUrl;

    /**
     * @var Weight
     */
    protected $weight;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var int
     */
    protected $unitPrice;

    /**
     * @var int
     */
    protected $taxAmount;

    /**
     * @var int
     */
    protected $shippingAmount;

    /**
     * @var string
     */
    protected $warehouseLocation;

    /**
     * @var ItemOption[]
     */
    protected $options;

    /**
     * @var int
     */
    protected $productId;

    /**
     * @var string
     */
    protected $fulfillmentSku;

    /**
     * @var boolean
     */
    protected $adjustment;

    /**
     * @var string
     */
    protected $upc;

    /**
     * @var string
     */
    protected $createDate;

    /**
     * @var string
     */
    protected $modifyDate;

    protected function setWeightAttribute($value)
    {
        if ($value instanceof Weight) {
            $this->weight = $value;
        } else {
            $this->weight = new Weight($value);
        }
    }
}
