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
    protected $_name = 'Rebate';

    /**
     * 
     *
     * @param RebateType $RebateType
     * return Rebate
     */
    public function setRebateType(\FedEx\RateService\SimpleType\RebateType $rebateType)
    {
        $this->RebateType = $rebateType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
     * return Rebate
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
     * return Rebate
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
     * return Rebate
     */
    public function setPercent($percent)
    {
        $this->Percent = $percent;
        return $this;
    }
    

    
}