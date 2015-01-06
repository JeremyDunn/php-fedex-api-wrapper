<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies each surcharge applied to the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Surcharge
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Surcharge';

    /**
     * The type of surcharge applied to the shipment.
     *
     * @param \FedEx\RateService\SimpleType\SurchargeType|string $surchargeType
     * @return Surcharge
     */
    public function setSurchargeType($surchargeType)
    {
        $this->SurchargeType = $surchargeType;
        return $this;
    }
    
    /**
     * Returns The type of surcharge applied to the shipment.
     *
     * @return \FedEx\RateService\SimpleType\SurchargeType|string
     */
    public function getSurchargeType()
    {
        return $this->SurchargeType;
    }
    
    /**
     * Set Level
     *
     * @param \FedEx\RateService\SimpleType\SurchargeLevelType|string $level
     * @return Surcharge
     */
    public function setLevel($level)
    {
        $this->Level = $level;
        return $this;
    }
    
    /**
     * Returns Set Level
     *
     * @return \FedEx\RateService\SimpleType\SurchargeLevelType|string
     */
    public function getLevel()
    {
        return $this->Level;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return Surcharge
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
     * The amount of the surcharge applied to the shipment.
     *
     * @param Money $amount
     * @return Surcharge
     */
    public function setAmount(Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * Returns The amount of the surcharge applied to the shipment.
     *
     * @return Money
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    

    
}