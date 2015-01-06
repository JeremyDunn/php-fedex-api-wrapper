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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PackageRateDetail';

    /**
     * Type used for this specific set of rate data.
     *
     * @param \FedEx\RateService\SimpleType\ReturnedRateType|string $rateType
     * @return PackageRateDetail
     */
    public function setRateType($rateType)
    {
        $this->RateType = $rateType;
        return $this;
    }
    
    /**
     * Returns Type used for this specific set of rate data.
     *
     * @return \FedEx\RateService\SimpleType\ReturnedRateType|string
     */
    public function getRateType()
    {
        return $this->RateType;
    }
    
    /**
     * Indicates which weight was used.
     *
     * @param \FedEx\RateService\SimpleType\RatedWeightMethod|string $ratedWeightMethod
     * @return PackageRateDetail
     */
    public function setRatedWeightMethod($ratedWeightMethod)
    {
        $this->RatedWeightMethod = $ratedWeightMethod;
        return $this;
    }
    
    /**
     * Returns Indicates which weight was used.
     *
     * @return \FedEx\RateService\SimpleType\RatedWeightMethod|string
     */
    public function getRatedWeightMethod()
    {
        return $this->RatedWeightMethod;
    }
    
    /**
     * INTERNAL FEDEX USE ONLY.
     *
     * @param \FedEx\RateService\SimpleType\MinimumChargeType|string $minimumChargeType
     * @return PackageRateDetail
     */
    public function setMinimumChargeType($minimumChargeType)
    {
        $this->MinimumChargeType = $minimumChargeType;
        return $this;
    }
    
    /**
     * Returns INTERNAL FEDEX USE ONLY.
     *
     * @return \FedEx\RateService\SimpleType\MinimumChargeType|string
     */
    public function getMinimumChargeType()
    {
        return $this->MinimumChargeType;
    }
    
    /**
     * The weight that was used to calculate the rate.
     *
     * @param Weight $billingWeight
     * @return PackageRateDetail
     */
    public function setBillingWeight(Weight $billingWeight)
    {
        $this->BillingWeight = $billingWeight;
        return $this;
    }
    
    /**
     * Returns The weight that was used to calculate the rate.
     *
     * @return Weight
     */
    public function getBillingWeight()
    {
        return $this->BillingWeight;
    }
    
    /**
     * The dimensional weight of this package (if greater than actual).
     *
     * @param Weight $dimWeight
     * @return PackageRateDetail
     */
    public function setDimWeight(Weight $dimWeight)
    {
        $this->DimWeight = $dimWeight;
        return $this;
    }
    
    /**
     * Returns The dimensional weight of this package (if greater than actual).
     *
     * @return Weight
     */
    public function getDimWeight()
    {
        return $this->DimWeight;
    }
    
    /**
     * The oversize weight of this package (if the package is oversize).
     *
     * @param Weight $oversizeWeight
     * @return PackageRateDetail
     */
    public function setOversizeWeight(Weight $oversizeWeight)
    {
        $this->OversizeWeight = $oversizeWeight;
        return $this;
    }
    
    /**
     * Returns The oversize weight of this package (if the package is oversize).
     *
     * @return Weight
     */
    public function getOversizeWeight()
    {
        return $this->OversizeWeight;
    }
    
    /**
     * The transportation charge only (prior to any discounts applied) for this package.
     *
     * @param Money $baseCharge
     * @return PackageRateDetail
     */
    public function setBaseCharge(Money $baseCharge)
    {
        $this->BaseCharge = $baseCharge;
        return $this;
    }
    
    /**
     * Returns The transportation charge only (prior to any discounts applied) for this package.
     *
     * @return Money
     */
    public function getBaseCharge()
    {
        return $this->BaseCharge;
    }
    
    /**
     * The sum of all discounts on this package.
     *
     * @param Money $totalFreightDiscounts
     * @return PackageRateDetail
     */
    public function setTotalFreightDiscounts(Money $totalFreightDiscounts)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    
    /**
     * Returns The sum of all discounts on this package.
     *
     * @return Money
     */
    public function getTotalFreightDiscounts()
    {
        return $this->TotalFreightDiscounts;
    }
    
    /**
     * This package's baseCharge - totalFreightDiscounts.
     *
     * @param Money $netFreight
     * @return PackageRateDetail
     */
    public function setNetFreight(Money $netFreight)
    {
        $this->NetFreight = $netFreight;
        return $this;
    }
    
    /**
     * Returns This package's baseCharge - totalFreightDiscounts.
     *
     * @return Money
     */
    public function getNetFreight()
    {
        return $this->NetFreight;
    }
    
    /**
     * The sum of all surcharges on this package.
     *
     * @param Money $totalSurcharges
     * @return PackageRateDetail
     */
    public function setTotalSurcharges(Money $totalSurcharges)
    {
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    
    /**
     * Returns The sum of all surcharges on this package.
     *
     * @return Money
     */
    public function getTotalSurcharges()
    {
        return $this->TotalSurcharges;
    }
    
    /**
     * This package's netFreight + totalSurcharges (not including totalTaxes).
     *
     * @param Money $netFedExCharge
     * @return PackageRateDetail
     */
    public function setNetFedExCharge(Money $netFedExCharge)
    {
        $this->NetFedExCharge = $netFedExCharge;
        return $this;
    }
    
    /**
     * Returns This package's netFreight + totalSurcharges (not including totalTaxes).
     *
     * @return Money
     */
    public function getNetFedExCharge()
    {
        return $this->NetFedExCharge;
    }
    
    /**
     * The sum of all taxes on this package.
     *
     * @param Money $totalTaxes
     * @return PackageRateDetail
     */
    public function setTotalTaxes(Money $totalTaxes)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    
    /**
     * Returns The sum of all taxes on this package.
     *
     * @return Money
     */
    public function getTotalTaxes()
    {
        return $this->TotalTaxes;
    }
    
    /**
     * This package's netFreight + totalSurcharges + totalTaxes.
     *
     * @param Money $netCharge
     * @return PackageRateDetail
     */
    public function setNetCharge(Money $netCharge)
    {
        $this->NetCharge = $netCharge;
        return $this;
    }
    
    /**
     * Returns This package's netFreight + totalSurcharges + totalTaxes.
     *
     * @return Money
     */
    public function getNetCharge()
    {
        return $this->NetCharge;
    }
    
    /**
     * The total sum of all rebates applied to this package.
     *
     * @param Money $totalRebates
     * @return PackageRateDetail
     */
    public function setTotalRebates(Money $totalRebates)
    {
        $this->TotalRebates = $totalRebates;
        return $this;
    }
    
    /**
     * Returns The total sum of all rebates applied to this package.
     *
     * @return Money
     */
    public function getTotalRebates()
    {
        return $this->TotalRebates;
    }
    
    /**
     * All rate discounts that apply to this package.
     *
     * @param RateDiscount[] $freightDiscounts
     * @return PackageRateDetail
     */
    public function setFreightDiscounts(array $freightDiscounts)
    {
        $this->FreightDiscounts = $freightDiscounts;
        return $this;
    }
    
    /**
     * Returns All rate discounts that apply to this package.
     *
     * @return RateDiscount[]
     */
    public function getFreightDiscounts()
    {
        return $this->FreightDiscounts;
    }
    
    /**
     * All rebates that apply to this package.
     *
     * @param Rebate[] $rebates
     * @return PackageRateDetail
     */
    public function setRebates(array $rebates)
    {
        $this->Rebates = $rebates;
        return $this;
    }
    
    /**
     * Returns All rebates that apply to this package.
     *
     * @return Rebate[]
     */
    public function getRebates()
    {
        return $this->Rebates;
    }
    
    /**
     * All surcharges that apply to this package (either because of characteristics of the package itself, or because it is carrying per-shipment surcharges for the shipment of which it is a part).
     *
     * @param Surcharge[] $surcharges
     * @return PackageRateDetail
     */
    public function setSurcharges(array $surcharges)
    {
        $this->Surcharges = $surcharges;
        return $this;
    }
    
    /**
     * Returns All surcharges that apply to this package (either because of characteristics of the package itself, or because it is carrying per-shipment surcharges for the shipment of which it is a part).
     *
     * @return Surcharge[]
     */
    public function getSurcharges()
    {
        return $this->Surcharges;
    }
    
    /**
     * All taxes applicable (or distributed to) this package.
     *
     * @param Tax[] $taxes
     * @return PackageRateDetail
     */
    public function setTaxes(array $taxes)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    
    /**
     * Returns All taxes applicable (or distributed to) this package.
     *
     * @return Tax[]
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    
    /**
     * The variable handling charges calculated based on the type variable handling charges requested.
     *
     * @param VariableHandlingCharges $variableHandlingCharges
     * @return PackageRateDetail
     */
    public function setVariableHandlingCharges(VariableHandlingCharges $variableHandlingCharges)
    {
        $this->VariableHandlingCharges = $variableHandlingCharges;
        return $this;
    }
    
    /**
     * Returns The variable handling charges calculated based on the type variable handling charges requested.
     *
     * @return VariableHandlingCharges
     */
    public function getVariableHandlingCharges()
    {
        return $this->VariableHandlingCharges;
    }
    

    
}