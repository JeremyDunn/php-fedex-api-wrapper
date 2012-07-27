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
    protected $_name = 'RateDiscount';

    /**
     * Identifies the type of discount applied to the shipment.
     *
     * @param RateDiscountType $RateDiscountType
     * return RateDiscount
     */
    public function setRateDiscountType(\FedEx\RateService\SimpleType\RateDiscountType $rateDiscountType)
    {
        $this->RateDiscountType = $rateDiscountType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
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
     * @param Money $Amount
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
     * @param decimal $Percent
     * return RateDiscount
     */
    public function setPercent($percent)
    {
        $this->Percent = $percent;
        return $this;
    }
    

    
}