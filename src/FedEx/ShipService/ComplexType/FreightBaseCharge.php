<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Individual charge which contributes to the total base charge for the shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightBaseCharge
    extends AbstractComplexType
{
    protected $_name = 'FreightBaseCharge';

    /**
     * Freight class for this line item.
     *
     * @param FreightClassType $FreightClass
     * return FreightBaseCharge
     */
    public function setFreightClass(\FedEx\ShipService\SimpleType\FreightClassType $freightClass)
    {
        $this->FreightClass = $freightClass;
        return $this;
    }
    
    /**
     * Effective freight class used for rating this line item.
     *
     * @param FreightClassType $RatedAsClass
     * return FreightBaseCharge
     */
    public function setRatedAsClass(\FedEx\ShipService\SimpleType\FreightClassType $ratedAsClass)
    {
        $this->RatedAsClass = $ratedAsClass;
        return $this;
    }
    
    /**
     * NMFC Code for commodity.
     *
     * @param string $NmfcCode
     * return FreightBaseCharge
     */
    public function setNmfcCode($nmfcCode)
    {
        $this->NmfcCode = $nmfcCode;
        return $this;
    }
    
    /**
     * Customer-provided description for this commodity or class line.
     *
     * @param string $Description
     * return FreightBaseCharge
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Weight for this commodity or class line.
     *
     * @param Weight $Weight
     * return FreightBaseCharge
     */
    public function setWeight(Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * Rate or factor applied to this line item.
     *
     * @param Money $ChargeRate
     * return FreightBaseCharge
     */
    public function setChargeRate(Money $chargeRate)
    {
        $this->ChargeRate = $chargeRate;
        return $this;
    }
    
    /**
     * Identifies the manner in which the chargeRate for this line item was applied.
     *
     * @param FreightChargeBasisType $ChargeBasis
     * return FreightBaseCharge
     */
    public function setChargeBasis(\FedEx\ShipService\SimpleType\FreightChargeBasisType $chargeBasis)
    {
        $this->ChargeBasis = $chargeBasis;
        return $this;
    }
    
    /**
     * The net or extended charge for this line item.
     *
     * @param Money $ExtendedAmount
     * return FreightBaseCharge
     */
    public function setExtendedAmount(Money $extendedAmount)
    {
        $this->ExtendedAmount = $extendedAmount;
        return $this;
    }
    

    
}