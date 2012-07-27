<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data for a package's rates, as calculated per a specific rate type.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class PackageRateDetail
    extends AbstractComplexType
{
    protected $_name = 'PackageRateDetail';

    /**
     * Type used for this specific set of rate data.
     *
     * @param ReturnedRateType $RateType
     * return PackageRateDetail
     */
    public function setRateType(\FedEx\RateService\SimpleType\ReturnedRateType $rateType)
    {
        $this->RateType = $rateType;
        return $this;
    }
    
    /**
     * Indicates which weight was used.
     *
     * @param RatedWeightMethod $RatedWeightMethod
     * return PackageRateDetail
     */
    public function setRatedWeightMethod(\FedEx\RateService\SimpleType\RatedWeightMethod $ratedWeightMethod)
    {
        $this->RatedWeightMethod = $ratedWeightMethod;
        return $this;
    }
    
    /**
     * INTERNAL FEDEX USE ONLY.
     *
     * @param MinimumChargeType $MinimumChargeType
     * return PackageRateDetail
     */
    public function setMinimumChargeType(\FedEx\RateService\SimpleType\MinimumChargeType $minimumChargeType)
    {
        $this->MinimumChargeType = $minimumChargeType;
        return $this;
    }
    
    /**
     * The weight that was used to calculate the rate.
     *
     * @param Weight $BillingWeight
     * return PackageRateDetail
     */
    public function setBillingWeight(Weight $billingWeight)
    {
        $this->BillingWeight = $billingWeight;
        return $this;
    }
    
    /**
     * The dimensional weight of this package (if greater than actual).
     *
     * @param Weight $DimWeight
     * return PackageRateDetail
     */
    public function setDimWeight(Weight $dimWeight)
    {
        $this->DimWeight = $dimWeight;
        return $this;
    }
    
    /**
     * The oversize weight of this package (if the package is oversize).
     *
     * @param Weight $OversizeWeight
     * return PackageRateDetail
     */
    public function setOversizeWeight(Weight $oversizeWeight)
    {
        $this->OversizeWeight = $oversizeWeight;
        return $this;
    }
    
    /**
     * The transportation charge only (prior to any discounts applied) for this package.
     *
     * @param Money $BaseCharge
     * return PackageRateDetail
     */
    public function setBaseCharge(Money $baseCharge)
    {
        $this->BaseCharge = $baseCharge;
        return $this;
    }
    
    /**
     * The sum of all discounts on this package.
     *
     * @param Money $TotalFreightDiscounts
     * return PackageRateDetail
     */
    public function setTotalFreightDiscounts(Money $totalFreightDiscounts)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    
    /**
     * This package's baseCharge - totalFreightDiscounts.
     *
     * @param Money $NetFreight
     * return PackageRateDetail
     */
    public function setNetFreight(Money $netFreight)
    {
        $this->NetFreight = $netFreight;
        return $this;
    }
    
    /**
     * The sum of all surcharges on this package.
     *
     * @param Money $TotalSurcharges
     * return PackageRateDetail
     */
    public function setTotalSurcharges(Money $totalSurcharges)
    {
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    
    /**
     * This package's netFreight + totalSurcharges (not including totalTaxes).
     *
     * @param Money $NetFedExCharge
     * return PackageRateDetail
     */
    public function setNetFedExCharge(Money $netFedExCharge)
    {
        $this->NetFedExCharge = $netFedExCharge;
        return $this;
    }
    
    /**
     * The sum of all taxes on this package.
     *
     * @param Money $TotalTaxes
     * return PackageRateDetail
     */
    public function setTotalTaxes(Money $totalTaxes)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    
    /**
     * This package's netFreight + totalSurcharges + totalTaxes.
     *
     * @param Money $NetCharge
     * return PackageRateDetail
     */
    public function setNetCharge(Money $netCharge)
    {
        $this->NetCharge = $netCharge;
        return $this;
    }
    
    /**
     * The total sum of all rebates applied to this package.
     *
     * @param Money $TotalRebates
     * return PackageRateDetail
     */
    public function setTotalRebates(Money $totalRebates)
    {
        $this->TotalRebates = $totalRebates;
        return $this;
    }
    
    /**
     * All rate discounts that apply to this package.
     *
     * @param array[RateDiscount] $FreightDiscounts
     * return PackageRateDetail
     */
    public function setFreightDiscounts(array $freightDiscounts)
    {
        $this->FreightDiscounts = $freightDiscounts;
        return $this;
    }
    
    /**
     * All rebates that apply to this package.
     *
     * @param array[Rebate] $Rebates
     * return PackageRateDetail
     */
    public function setRebates(array $rebates)
    {
        $this->Rebates = $rebates;
        return $this;
    }
    
    /**
     * All surcharges that apply to this package (either because of characteristics of the package itself, or because it is carrying per-shipment surcharges for the shipment of which it is a part).
     *
     * @param array[Surcharge] $Surcharges
     * return PackageRateDetail
     */
    public function setSurcharges(array $surcharges)
    {
        $this->Surcharges = $surcharges;
        return $this;
    }
    
    /**
     * All taxes applicable (or distributed to) this package.
     *
     * @param array[Tax] $Taxes
     * return PackageRateDetail
     */
    public function setTaxes(array $taxes)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    
    /**
     * The variable handling charges calculated based on the type variable handling charges requested.
     *
     * @param VariableHandlingCharges $VariableHandlingCharges
     * return PackageRateDetail
     */
    public function setVariableHandlingCharges(VariableHandlingCharges $variableHandlingCharges)
    {
        $this->VariableHandlingCharges = $variableHandlingCharges;
        return $this;
    }
    

    
}