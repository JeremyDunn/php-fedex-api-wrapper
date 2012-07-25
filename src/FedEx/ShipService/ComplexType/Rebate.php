<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
    public function setRebateType(\FedEx\ShipService\SimpleType\RebateType $rebateType)
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
     * 
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
     * 
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