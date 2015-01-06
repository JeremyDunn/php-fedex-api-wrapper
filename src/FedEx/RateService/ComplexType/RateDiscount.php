<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies a discount applied to the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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
     * @param \FedEx\RateService\SimpleType\RateDiscountType|string $rateDiscountType
     * @return RateDiscount
     */
    public function setRateDiscountType($rateDiscountType)
    {
        $this->RateDiscountType = $rateDiscountType;
        return $this;
    }
    
    /**
     * Returns Identifies the type of discount applied to the shipment.
     *
     * @return \FedEx\RateService\SimpleType\RateDiscountType|string
     */
    public function getRateDiscountType()
    {
        return $this->RateDiscountType;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return RateDiscount
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Set Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * The amount of the discount applied to the shipment.
     *
     * @param Money $amount
     * @return RateDiscount
     */
    public function setAmount(Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * Returns The amount of the discount applied to the shipment.
     *
     * @return Money
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    
    /**
     * The percentage of the discount applied to the shipment.
     *
     * @param decimal $percent
     * @return RateDiscount
     */
    public function setPercent($percent)
    {
        $this->Percent = $percent;
        return $this;
    }
    
    /**
     * Returns The percentage of the discount applied to the shipment.
     *
     * @return decimal
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    

    
}