<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Rebate
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * @param \FedEx\ShipService\SimpleType\RebateType|string $rebateType
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
     * @return \FedEx\ShipService\SimpleType\RebateType|string
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
     * Set Amount
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
     * Returns Set Amount
     *
     * @return Money
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    
    /**
     * Set Percent
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
     * Returns Set Percent
     *
     * @return decimal
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    

    
}