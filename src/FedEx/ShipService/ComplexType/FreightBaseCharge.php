<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Individual charge which contributes to the total base charge for the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightBaseCharge
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightBaseCharge';

    /**
     * Freight class for this line item.
     *
     * @param \FedEx\ShipService\SimpleType\FreightClassType|string $freightClass
     * return FreightBaseCharge
     */
    public function setFreightClass($freightClass)
    {
        $this->FreightClass = $freightClass;
        return $this;
    }
    
    /**
     * Effective freight class used for rating this line item.
     *
     * @param \FedEx\ShipService\SimpleType\FreightClassType|string $ratedAsClass
     * return FreightBaseCharge
     */
    public function setRatedAsClass($ratedAsClass)
    {
        $this->RatedAsClass = $ratedAsClass;
        return $this;
    }
    
    /**
     * NMFC Code for commodity.
     *
     * @param string $nmfcCode
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
     * @param string $description
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
     * @param Weight $weight
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
     * @param Money $chargeRate
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
     * @param \FedEx\ShipService\SimpleType\FreightChargeBasisType|string $chargeBasis
     * return FreightBaseCharge
     */
    public function setChargeBasis($chargeBasis)
    {
        $this->ChargeBasis = $chargeBasis;
        return $this;
    }
    
    /**
     * The net or extended charge for this line item.
     *
     * @param Money $extendedAmount
     * return FreightBaseCharge
     */
    public function setExtendedAmount(Money $extendedAmount)
    {
        $this->ExtendedAmount = $extendedAmount;
        return $this;
    }
    

    
}