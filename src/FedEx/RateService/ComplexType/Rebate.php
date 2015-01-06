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
class Rebate
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Rebate';

    /**
     * Set RebateType
     *
     * @param \FedEx\RateService\SimpleType\RebateType|string $rebateType
     * @return Rebate
     */
    public function setRebateType($rebateType)
    {
        $this->RebateType = $rebateType;
        return $this;
    }
    
    /**
     * Returns Set RebateType
     *
     * @return \FedEx\RateService\SimpleType\RebateType|string
     */
    public function getRebateType()
    {
        return $this->RebateType;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return Rebate
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
     * @return Rebate
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
     * @return Rebate
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