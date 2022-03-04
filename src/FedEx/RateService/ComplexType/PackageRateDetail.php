<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data for a package's rates, as calculated per a specific rate type.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\ReturnedRateType|string $RateType
 * @property \FedEx\RateService\SimpleType\RatedWeightMethod|string $RatedWeightMethod
 * @property \FedEx\RateService\SimpleType\MinimumChargeType|string $MinimumChargeType
 * @property Weight $BillingWeight
 * @property Weight $DimWeight
 * @property Weight $OversizeWeight
 * @property Money $BaseCharge
 * @property Money $TotalFreightDiscounts
 * @property Money $NetFreight
 * @property Money $TotalSurcharges
 * @property Money $NetFedExCharge
 * @property Money $TotalTaxes
 * @property Money $NetCharge
 * @property Money $TotalRebates
 * @property RateDiscount[] $FreightDiscounts
 * @property Rebate[] $Rebates
 * @property Surcharge[] $Surcharges
 * @property Tax[] $Taxes
 * @property VariableHandlingCharges $VariableHandlingCharges

 */
class PackageRateDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PackageRateDetail';

    /**
     * Type used for this specific set of rate data.
     *
     * @param \FedEx\RateService\SimpleType\ReturnedRateType|string $rateType
     * @return $this
     */
    public function setRateType($rateType)
    {
        $this->values['RateType'] = $rateType;
        return $this;
    }

    /**
     * Indicates which weight was used.
     *
     * @param \FedEx\RateService\SimpleType\RatedWeightMethod|string $ratedWeightMethod
     * @return $this
     */
    public function setRatedWeightMethod($ratedWeightMethod)
    {
        $this->values['RatedWeightMethod'] = $ratedWeightMethod;
        return $this;
    }

    /**
     * INTERNAL FEDEX USE ONLY.
     *
     * @param \FedEx\RateService\SimpleType\MinimumChargeType|string $minimumChargeType
     * @return $this
     */
    public function setMinimumChargeType($minimumChargeType)
    {
        $this->values['MinimumChargeType'] = $minimumChargeType;
        return $this;
    }

    /**
     * Set BillingWeight
     *
     * @param Weight $billingWeight
     * @return $this
     */
    public function setBillingWeight(Weight $billingWeight)
    {
        $this->values['BillingWeight'] = $billingWeight;
        return $this;
    }

    /**
     * The dimensional weight of this package (if greater than actual).
     *
     * @param Weight $dimWeight
     * @return $this
     */
    public function setDimWeight(Weight $dimWeight)
    {
        $this->values['DimWeight'] = $dimWeight;
        return $this;
    }

    /**
     * The oversize weight of this package (if the package is oversize).
     *
     * @param Weight $oversizeWeight
     * @return $this
     */
    public function setOversizeWeight(Weight $oversizeWeight)
    {
        $this->values['OversizeWeight'] = $oversizeWeight;
        return $this;
    }

    /**
     * The transportation charge only (prior to any discounts applied) for this package.
     *
     * @param Money $baseCharge
     * @return $this
     */
    public function setBaseCharge(Money $baseCharge)
    {
        $this->values['BaseCharge'] = $baseCharge;
        return $this;
    }

    /**
     * The sum of all discounts on this package.
     *
     * @param Money $totalFreightDiscounts
     * @return $this
     */
    public function setTotalFreightDiscounts(Money $totalFreightDiscounts)
    {
        $this->values['TotalFreightDiscounts'] = $totalFreightDiscounts;
        return $this;
    }

    /**
     * This package's baseCharge - totalFreightDiscounts.
     *
     * @param Money $netFreight
     * @return $this
     */
    public function setNetFreight(Money $netFreight)
    {
        $this->values['NetFreight'] = $netFreight;
        return $this;
    }

    /**
     * The sum of all surcharges on this package.
     *
     * @param Money $totalSurcharges
     * @return $this
     */
    public function setTotalSurcharges(Money $totalSurcharges)
    {
        $this->values['TotalSurcharges'] = $totalSurcharges;
        return $this;
    }

    /**
     * This package's netFreight + totalSurcharges (not including totalTaxes).
     *
     * @param Money $netFedExCharge
     * @return $this
     */
    public function setNetFedExCharge(Money $netFedExCharge)
    {
        $this->values['NetFedExCharge'] = $netFedExCharge;
        return $this;
    }

    /**
     * The sum of all taxes on this package.
     *
     * @param Money $totalTaxes
     * @return $this
     */
    public function setTotalTaxes(Money $totalTaxes)
    {
        $this->values['TotalTaxes'] = $totalTaxes;
        return $this;
    }

    /**
     * This package's netFreight + totalSurcharges + totalTaxes.
     *
     * @param Money $netCharge
     * @return $this
     */
    public function setNetCharge(Money $netCharge)
    {
        $this->values['NetCharge'] = $netCharge;
        return $this;
    }

    /**
     * Set TotalRebates
     *
     * @param Money $totalRebates
     * @return $this
     */
    public function setTotalRebates(Money $totalRebates)
    {
        $this->values['TotalRebates'] = $totalRebates;
        return $this;
    }

    /**
     * All rate discounts that apply to this package.
     *
     * @param RateDiscount[] $freightDiscounts
     * @return $this
     */
    public function setFreightDiscounts(array $freightDiscounts)
    {
        $this->values['FreightDiscounts'] = $freightDiscounts;
        return $this;
    }

    /**
     * All rebates that apply to this package.
     *
     * @param Rebate[] $rebates
     * @return $this
     */
    public function setRebates(array $rebates)
    {
        $this->values['Rebates'] = $rebates;
        return $this;
    }

    /**
     * All surcharges that apply to this package (either because of characteristics of the package itself, or because it is carrying per-shipment surcharges for the shipment of which it is a part).
     *
     * @param Surcharge[] $surcharges
     * @return $this
     */
    public function setSurcharges(array $surcharges)
    {
        $this->values['Surcharges'] = $surcharges;
        return $this;
    }

    /**
     * All taxes applicable (or distributed to) this package.
     *
     * @param Tax[] $taxes
     * @return $this
     */
    public function setTaxes(array $taxes)
    {
        $this->values['Taxes'] = $taxes;
        return $this;
    }

    /**
     * Set VariableHandlingCharges
     *
     * @param VariableHandlingCharges $variableHandlingCharges
     * @return $this
     */
    public function setVariableHandlingCharges(VariableHandlingCharges $variableHandlingCharges)
    {
        $this->values['VariableHandlingCharges'] = $variableHandlingCharges;
        return $this;
    }
}
