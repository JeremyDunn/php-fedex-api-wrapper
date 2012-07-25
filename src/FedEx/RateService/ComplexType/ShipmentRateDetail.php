<?php
namespace FedEx\RateService\ComplexType;

/**
 * Data for a shipment's total/summary rates, as calculated per a specific rate type. The "total..." fields may differ from the sum of corresponding package data for Multiweight or Express MPS.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class ShipmentRateDetail
    extends AbstractComplexType
{
    protected $_name = 'ShipmentRateDetail';

    /**
     * Type used for this specific set of rate data.
     *
     * @param ReturnedRateType $RateType
     * return ShipmentRateDetail
     */
    public function setRateType(\FedEx\RateService\SimpleType\ReturnedRateType $rateType)
    {
        $this->RateType = $rateType;
        return $this;
    }
    
    /**
     * Indicates the rate scale used.
     *
     * @param string $RateScale
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
     */
    public function setRateZone($rateZone)
    {
        $this->RateZone = $rateZone;
        return $this;
    }
    
    /**
     * Indicates the type of pricing used for this shipment.
     *
     * @param PricingCodeType $PricingCode
     * return ShipmentRateDetail
     */
    public function setPricingCode(\FedEx\RateService\SimpleType\PricingCodeType $pricingCode)
    {
        $this->PricingCode = $pricingCode;
        return $this;
    }
    
    /**
     * Indicates which weight was used.
     *
     * @param RatedWeightMethod $RatedWeightMethod
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
     */
    public function setMinimumChargeType(\FedEx\RateService\SimpleType\MinimumChargeType $minimumChargeType)
    {
        $this->MinimumChargeType = $minimumChargeType;
        return $this;
    }
    
    /**
     * Specifies the currency exchange performed on financial amounts for this rate.
     *
     * @param CurrencyExchangeRate $CurrencyExchangeRate
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
     */
    public function setSpecialRatingApplied(array $specialRatingApplied)
    {
        $this->SpecialRatingApplied = $specialRatingApplied;
        return $this;
    }
    
    /**
     * The value used to calculate the weight based on the dimensions.
     *
     * @param nonNegativeInteger $DimDivisor
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
     */
    public function setDimDivisorType(\FedEx\RateService\SimpleType\RateDimensionalDivisorType $dimDivisorType)
    {
        $this->DimDivisorType = $dimDivisorType;
        return $this;
    }
    
    /**
     * 
     *
     * @param decimal $FuelSurchargePercent
     * return ShipmentRateDetail
     */
    public function setFuelSurchargePercent($fuelSurchargePercent)
    {
        $this->FuelSurchargePercent = $fuelSurchargePercent;
        return $this;
    }
    
    /**
     * The weight used to calculate these rates.
     *
     * @param Weight $TotalBillingWeight
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
     */
    public function setTotalBaseCharge(Money $totalBaseCharge)
    {
        $this->TotalBaseCharge = $totalBaseCharge;
        return $this;
    }
    
    /**
     * The total discounts used in the rate calculation.
     *
     * @param Money $TotalFreightDiscounts
     * return ShipmentRateDetail
     */
    public function setTotalFreightDiscounts(Money $totalFreightDiscounts)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    
    /**
     * The freight charge minus discounts.
     *
     * @param Money $TotalNetFreight
     * return ShipmentRateDetail
     */
    public function setTotalNetFreight(Money $totalNetFreight)
    {
        $this->TotalNetFreight = $totalNetFreight;
        return $this;
    }
    
    /**
     * The total amount of all surcharges applied to this shipment.
     *
     * @param Money $TotalSurcharges
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
     */
    public function setTotalTaxes(Money $totalTaxes)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    
    /**
     * The net charge after applying all discounts and surcharges.
     *
     * @param Money $TotalNetCharge
     * return ShipmentRateDetail
     */
    public function setTotalNetCharge(Money $totalNetCharge)
    {
        $this->TotalNetCharge = $totalNetCharge;
        return $this;
    }
    
    /**
     * The total sum of all rebates applied to this shipment.
     *
     * @param Money $TotalRebates
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
     */
    public function setTotalNetChargeWithDutiesAndTaxes(Money $totalNetChargeWithDutiesAndTaxes)
    {
        $this->TotalNetChargeWithDutiesAndTaxes = $totalNetChargeWithDutiesAndTaxes;
        return $this;
    }
    
    /**
     * Identifies the Rate Details per each leg in a Freight Shipment
     *
     * @param array[ShipmentLegRateDetail] $ShipmentLegRateDetails
     * return ShipmentRateDetail
     */
    public function setShipmentLegRateDetails(array $shipmentLegRateDetails)
    {
        $this->ShipmentLegRateDetails = $shipmentLegRateDetails;
        return $this;
    }
    
    /**
     * Rate data specific to FedEx Freight and FedEx National Freight services.
     *
     * @param FreightRateDetail $FreightRateDetail
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
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
     * return ShipmentRateDetail
     */
    public function setTotalVariableHandlingCharges(VariableHandlingCharges $totalVariableHandlingCharges)
    {
        $this->TotalVariableHandlingCharges = $totalVariableHandlingCharges;
        return $this;
    }
    

    
}