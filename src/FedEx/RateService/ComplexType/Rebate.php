<?php
namespace FedEx\RateService\ComplexType;

/**
 * Identifies a discount applied to the shipment.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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