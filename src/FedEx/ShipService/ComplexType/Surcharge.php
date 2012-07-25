<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Identifies each surcharge applied to the shipment.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Surcharge
    extends AbstractComplexType
{
    protected $_name = 'Surcharge';

    /**
     * The type of surcharge applied to the shipment.
     *
     * @param SurchargeType $SurchargeType
     * return Surcharge
     */
    public function setSurchargeType(\FedEx\ShipService\SimpleType\SurchargeType $surchargeType)
    {
        $this->SurchargeType = $surchargeType;
        return $this;
    }
    
    /**
     * 
     *
     * @param SurchargeLevelType $Level
     * return Surcharge
     */
    public function setLevel(\FedEx\ShipService\SimpleType\SurchargeLevelType $level)
    {
        $this->Level = $level;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
     * return Surcharge
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * The amount of the surcharge applied to the shipment.
     *
     * @param Money $Amount
     * return Surcharge
     */
    public function setAmount(Money $amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    

    
}