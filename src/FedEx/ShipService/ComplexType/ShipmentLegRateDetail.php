<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Data for a single leg of a shipment's total/summary rates, as calculated per a specific rate type.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentLegRateDetail
    extends AbstractComplexType
{
    protected $_name = 'ShipmentLegRateDetail';

    /**
     * Human-readable text describing the shipment leg.
     *
     * @param string $LegDescription
     * return ShipmentLegRateDetail
     */
    public function setLegDescription($legDescription)
    {
        $this->LegDescription = $legDescription;
        return $this;
    }
    
    /**
     * Origin for this leg.
     *
     * @param Address $LegOrigin
     * return ShipmentLegRateDetail
     */
    public function setLegOrigin(Address $legOrigin)
    {
        $this->LegOrigin = $legOrigin;
        return $this;
    }
    
    /**
     * Destination for this leg.
     *
     * @param Address $LegDestination
     * return ShipmentLegRateDetail
     */
    public function setLegDestination(Address $legDestination)
    {
        $this->LegDestination = $legDestination;
        return $this;
    }
    
    /**
     * Type used for this specific set of rate data.
     *
     * @param ReturnedRateType $RateType
     * return ShipmentLegRateDetail
     */
    public function setRateType(\FedEx\ShipService\SimpleType\ReturnedRateType $rateType)
    {
        $this->RateType = $rateType;
        return $this;
    }
    
    /**
     * Indicates the rate scale used.
     *
     * @param string $RateScale
     * return ShipmentLegRateDetail
     */
    public function setRateScale($rateScale)
    {
        $this->RateScale = $rateScale;
        return $this;
    }
    
    /**
     * Indicates the rate zone used (based on origin and destination).
     *
     * @param string $RateZone
     * return ShipmentLegRateDetail
     */
    public function setRateZone($rateZone)
    {
        $this->RateZone = $rateZone;
        return $this;
    }
    
    /**
     * 
     *
     * @param PricingCodeType $PricingCode
     * return ShipmentLegRateDetail
     */
    public function setPricingCode(\FedEx\ShipService\SimpleType\PricingCodeType $pricingCode)
    {
        $this->PricingCode = $pricingCode;
        return $this;
    }
    
    /**
     * Indicates which weight was used.
     *
     * @param RatedWeightMethod $RatedWeightMethod
     * return ShipmentLegRateDetail
     */
    public function setRatedWeightMethod(\FedEx\ShipService\SimpleType\RatedWeightMethod $ratedWeightMethod)
    {
        $this->RatedWeightMethod = $ratedWeightMethod;
        return $this;
    }
    
    /**
     * INTERNAL FEDEX USE ONLY.
     *
     * @param MinimumChargeType $MinimumChargeType
     * return ShipmentLegRateDetail
     */
    public function setMinimumChargeType(\FedEx\ShipService\SimpleType\MinimumChargeType $minimumChargeType)
    {
        $this->MinimumChargeType = $minimumChargeType;
        return $this;
    }
    
    /**
     * Specifies the currency exchange performed on financial amounts for this rate.
     *
     * @param CurrencyExchangeRate $CurrencyExchangeRate
     * return ShipmentLegRateDetail
     */
    public function setCurrencyExchangeRate(CurrencyExchangeRate $currencyExchangeRate)
    {
        $this->CurrencyExchangeRate = $currencyExchangeRate;
        return $this;
    }
    
    /**
     * Indicates which special rating cases applied to this shipment.
     *
     * @param array[SpecialRatingAppliedType] $SpecialRatingApplied
     * return ShipmentLegRateDetail
     */
    public function setSpecialRatingApplied(array $specialRatingApplied)
    {
        $this->SpecialRatingApplied = $specialRatingApplied;
        return $this;
    }
    
    /**
     * 
     *
     * @param nonNegativeInteger $DimDivisor
     * return ShipmentLegRateDetail
     */
    public function setDimDivisor($dimDivisor)
    {
        $this->DimDivisor = $dimDivisor;
        return $this;
    }
    
    /**
     * Identifies the type of dim divisor that was applied.
     *
     * @param RateDimensionalDivisorType $DimDivisorType
     * return ShipmentLegRateDetail
     */
    public function setDimDivisorType(\FedEx\ShipService\SimpleType\RateDimensionalDivisorType $dimDivisorType)
    {
        $this->DimDivisorType = $dimDivisorType;
        return $this;
    }
    
    /**
     * 
     *
     * @param decimal $FuelSurchargePercent
     * return ShipmentLegRateDetail
     */
    public function setFuelSurchargePercent($fuelSurchargePercent)
    {
        $this->FuelSurchargePercent = $fuelSurchargePercent;
        return $this;
    }
    
    /**
     * 
     *
     * @param Weight $TotalBillingWeight
     * return ShipmentLegRateDetail
     */
    public function setTotalBillingWeight(Weight $totalBillingWeight)
    {
        $this->TotalBillingWeight = $totalBillingWeight;
        return $this;
    }
    
    /**
     * Sum of dimensional weights for all packages.
     *
     * @param Weight $TotalDimWeight
     * return ShipmentLegRateDetail
     */
    public function setTotalDimWeight(Weight $totalDimWeight)
    {
        $this->TotalDimWeight = $totalDimWeight;
        return $this;
    }
    
    /**
     * 
     *
     * @param Money $TotalBaseCharge
     * return ShipmentLegRateDetail
     */
    public function setTotalBaseCharge(Money $totalBaseCharge)
    {
        $this->TotalBaseCharge = $totalBaseCharge;
        return $this;
    }
    
    /**
     * 
     *
     * @param Money $TotalFreightDiscounts
     * return ShipmentLegRateDetail
     */
    public function setTotalFreightDiscounts(Money $totalFreightDiscounts)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    
    /**
     * 
     *
     * @param Money $TotalNetFreight
     * return ShipmentLegRateDetail
     */
    public function setTotalNetFreight(Money $totalNetFreight)
    {
        $this->TotalNetFreight = $totalNetFreight;
        return $this;
    }
    
    /**
     * 
     *
     * @param Money $TotalSurcharges
     * return ShipmentLegRateDetail
     */
    public function setTotalSurcharges(Money $totalSurcharges)
    {
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    
    /**
     * This shipment's totalNetFreight + totalSurcharges (not including totalTaxes).
     *
     * @param Money $TotalNetFedExCharge
     * return ShipmentLegRateDetail
     */
    public function setTotalNetFedExCharge(Money $totalNetFedExCharge)
    {
        $this->TotalNetFedExCharge = $totalNetFedExCharge;
        return $this;
    }
    
    /**
     * Total of the transportation-based taxes.
     *
     * @param Money $TotalTaxes
     * return ShipmentLegRateDetail
     */
    public function setTotalTaxes(Money $totalTaxes)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    
    /**
     * 
     *
     * @param Money $TotalNetCharge
     * return ShipmentLegRateDetail
     */
    public function setTotalNetCharge(Money $totalNetCharge)
    {
        $this->TotalNetCharge = $totalNetCharge;
        return $this;
    }
    
    /**
     * 
     *
     * @param Money $TotalRebates
     * return ShipmentLegRateDetail
     */
    public function setTotalRebates(Money $totalRebates)
    {
        $this->TotalRebates = $totalRebates;
        return $this;
    }
    
    /**
     * Total of all values under this shipment's dutiesAndTaxes; only provided if estimated duties and taxes were calculated for this shipment.
     *
     * @param Money $TotalDutiesAndTaxes
     * return ShipmentLegRateDetail
     */
    public function setTotalDutiesAndTaxes(Money $totalDutiesAndTaxes)
    {
        $this->TotalDutiesAndTaxes = $totalDutiesAndTaxes;
        return $this;
    }
    
    /**
     * This shipment's totalNetCharge + totalDutiesAndTaxes; only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender's account.
     *
     * @param Money $TotalNetChargeWithDutiesAndTaxes
     * return ShipmentLegRateDetail
     */
    public function setTotalNetChargeWithDutiesAndTaxes(Money $totalNetChargeWithDutiesAndTaxes)
    {
        $this->TotalNetChargeWithDutiesAndTaxes = $totalNetChargeWithDutiesAndTaxes;
        return $this;
    }
    
    /**
     * Rate data specific to FedEx Freight and FedEx National Freight services.
     *
     * @param FreightRateDetail $FreightRateDetail
     * return ShipmentLegRateDetail
     */
    public function setFreightRateDetail(FreightRateDetail $freightRateDetail)
    {
        $this->FreightRateDetail = $freightRateDetail;
        return $this;
    }
    
    /**
     * All rate discounts that apply to this shipment.
     *
     * @param array[RateDiscount] $FreightDiscounts
     * return ShipmentLegRateDetail
     */
    public function setFreightDiscounts(array $freightDiscounts)
    {
        $this->FreightDiscounts = $freightDiscounts;
        return $this;
    }
    
    /**
     * All rebates that apply to this shipment.
     *
     * @param array[Rebate] $Rebates
     * return ShipmentLegRateDetail
     */
    public function setRebates(array $rebates)
    {
        $this->Rebates = $rebates;
        return $this;
    }
    
    /**
     * All surcharges that apply to this shipment.
     *
     * @param array[Surcharge] $Surcharges
     * return ShipmentLegRateDetail
     */
    public function setSurcharges(array $surcharges)
    {
        $this->Surcharges = $surcharges;
        return $this;
    }
    
    /**
     * All transportation-based taxes applicable to this shipment.
     *
     * @param array[Tax] $Taxes
     * return ShipmentLegRateDetail
     */
    public function setTaxes(array $taxes)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    
    /**
     * All commodity-based duties and taxes applicable to this shipment.
     *
     * @param array[EdtCommodityTax] $DutiesAndTaxes
     * return ShipmentLegRateDetail
     */
    public function setDutiesAndTaxes(array $dutiesAndTaxes)
    {
        $this->DutiesAndTaxes = $dutiesAndTaxes;
        return $this;
    }
    
    /**
     * The "order level" variable handling charges.
     *
     * @param VariableHandlingCharges $VariableHandlingCharges
     * return ShipmentLegRateDetail
     */
    public function setVariableHandlingCharges(VariableHandlingCharges $variableHandlingCharges)
    {
        $this->VariableHandlingCharges = $variableHandlingCharges;
        return $this;
    }
    
    /**
     * The total of all variable handling charges at both shipment (order) and package level.
     *
     * @param VariableHandlingCharges $TotalVariableHandlingCharges
     * return ShipmentLegRateDetail
     */
    public function setTotalVariableHandlingCharges(VariableHandlingCharges $totalVariableHandlingCharges)
    {
        $this->TotalVariableHandlingCharges = $totalVariableHandlingCharges;
        return $this;
    }
    

    
}