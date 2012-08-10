<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies a discount applied to the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RateDiscount
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RateDiscount';

    /**
     * Identifies the type of discount applied to the shipment.
     *
     * @param \FedEx\ShipService\SimpleType\RateDiscountType|string $rateDiscountType
     * return RateDiscount
     */
    public function setRateDiscountType($rateDiscountType)
    {
        $this->RateDiscountType = $rateDiscountType;
        return $this;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * return RateDiscount
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * The amount of the discount applied to the shipment.
     *
     * @param Money $amount
     * return RateDiscount
     */
    public function setAmount(Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * The percentage of the discount applied to the shipment.
     *
     * @param decimal $percent
     * return RateDiscount
     */
    public function setPercent($percent)
    {
        $this->Percent = $percent;
        return $this;
    }
    

    
}