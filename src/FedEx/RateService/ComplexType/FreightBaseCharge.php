<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Individual charge which contributes to the total base charge for the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\FreightClassType|string $FreightClass
 * @property \FedEx\RateService\SimpleType\FreightClassType|string $RatedAsClass
 * @property string $NmfcCode
 * @property string $Description
 * @property Weight $Weight
 * @property Money $ChargeRate
 * @property \FedEx\RateService\SimpleType\FreightChargeBasisType|string $ChargeBasis
 * @property Money $ExtendedAmount

 */
class FreightBaseCharge extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FreightBaseCharge';

    /**
     * Freight class for this line item.
     *
     * @param \FedEx\RateService\SimpleType\FreightClassType|string $freightClass
     * @return $this
     */
    public function setFreightClass($freightClass)
    {
        $this->values['FreightClass'] = $freightClass;
        return $this;
    }

    /**
     * Effective freight class used for rating this line item.
     *
     * @param \FedEx\RateService\SimpleType\FreightClassType|string $ratedAsClass
     * @return $this
     */
    public function setRatedAsClass($ratedAsClass)
    {
        $this->values['RatedAsClass'] = $ratedAsClass;
        return $this;
    }

    /**
     * NMFC Code for commodity.
     *
     * @param string $nmfcCode
     * @return $this
     */
    public function setNmfcCode($nmfcCode)
    {
        $this->values['NmfcCode'] = $nmfcCode;
        return $this;
    }

    /**
     * Customer-provided description for this commodity or class line.
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Weight for this commodity or class line.
     *
     * @param Weight $weight
     * @return $this
     */
    public function setWeight(Weight $weight)
    {
        $this->values['Weight'] = $weight;
        return $this;
    }

    /**
     * Rate or factor applied to this line item.
     *
     * @param Money $chargeRate
     * @return $this
     */
    public function setChargeRate(Money $chargeRate)
    {
        $this->values['ChargeRate'] = $chargeRate;
        return $this;
    }

    /**
     * Identifies the manner in which the chargeRate for this line item was applied.
     *
     * @param \FedEx\RateService\SimpleType\FreightChargeBasisType|string $chargeBasis
     * @return $this
     */
    public function setChargeBasis($chargeBasis)
    {
        $this->values['ChargeBasis'] = $chargeBasis;
        return $this;
    }

    /**
     * The net or extended charge for this line item.
     *
     * @param Money $extendedAmount
     * @return $this
     */
    public function setExtendedAmount(Money $extendedAmount)
    {
        $this->values['ExtendedAmount'] = $extendedAmount;
        return $this;
    }
}
