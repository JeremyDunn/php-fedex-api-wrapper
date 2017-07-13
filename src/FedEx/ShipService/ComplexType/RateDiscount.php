<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies a discount applied to the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\RateDiscountType|string $RateDiscountType
 * @property string $Description
 * @property Money $Amount
 * @property float $Percent

 */
class RateDiscount extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateDiscount';

    /**
     * Identifies the type of discount applied to the shipment.
     *
     * @param \FedEx\ShipService\SimpleType\RateDiscountType|string $rateDiscountType
     * @return $this
     */
    public function setRateDiscountType($rateDiscountType)
    {
        $this->values['RateDiscountType'] = $rateDiscountType;
        return $this;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * The amount of the discount applied to the shipment.
     *
     * @param Money $amount
     * @return $this
     */
    public function setAmount(Money $amount)
    {
        $this->values['Amount'] = $amount;
        return $this;
    }

    /**
     * The percentage of the discount applied to the shipment.
     *
     * @param float $percent
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->values['Percent'] = $percent;
        return $this;
    }
}
