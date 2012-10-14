<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data for a single leg of a shipment's total/summary rates, as calculated per a specific rate type.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentLegRateDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentLegRateDetail';

    /**
     * Human-readable text describing the shipment leg.
     *
     * @param string $legDescription
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
     * @param Address $legOrigin
     * return ShipmentLegRateDetail
     */
    public function setLegOrigin(Address $legOrigin)
    {
        $this->LegOrigin = $legOrigin;
        return $this;
    }
    
    /**
     * Specifies the location id the origin of shipment leg.
     *
     * @param string $legOriginLocationId
     * return ShipmentLegRateDetail
     */
    public function setLegOriginLocationId($legOriginLocationId)
    {
        $this->LegOriginLocationId = $legOriginLocationId;
        return $this;
    }
    
    /**
     * Destination for this leg.
     *
     * @param Address $legDestination
     * return ShipmentLegRateDetail
     */
    public function setLegDestination(Address $legDestination)
    {
        $this->LegDestination = $legDestination;
        return $this;
    }
    
    /**
     * Specifies the location id the destination of shipment leg.
     *
     * @param string $legDestinationLocationId
     * return ShipmentLegRateDetail
     */
    public function setLegDestinationLocationId($legDestinationLocationId)
    {
        $this->LegDestinationLocationId = $legDestinationLocationId;
        return $this;
    }
    
    /**
     * Type used for this specific set of rate data.
     *
     * @param \FedEx\ShipService\SimpleType\ReturnedRateType|string $rateType
     * return ShipmentLegRateDetail
     */
    public function setRateType($rateType)
    {
        $this->RateType = $rateType;
        return $this;
    }
    
    /**
     * Indicates the rate scale used.
     *
     * @param string $rateScale
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
     * @param string $rateZone
     * return ShipmentLegRateDetail
     */
    public function setRateZone($rateZone)
    {
        $this->RateZone = $rateZone;
        return $this;
    }
    
    /**
     * Set PricingCode
     *
     * @param \FedEx\ShipService\SimpleType\PricingCodeType|string $pricingCode
     * return ShipmentLegRateDetail
     */
    public function setPricingCode($pricingCode)
    {
        $this->PricingCode = $pricingCode;
        return $this;
    }
    
    /**
     * Indicates which weight was used.
     *
     * @param \FedEx\ShipService\SimpleType\RatedWeightMethod|string $ratedWeightMethod
     * return ShipmentLegRateDetail
     */
    public function setRatedWeightMethod($ratedWeightMethod)
    {
        $this->RatedWeightMethod = $ratedWeightMethod;
        return $this;
    }
    
    /**
     * INTERNAL FEDEX USE ONLY.
     *
     * @param \FedEx\ShipService\SimpleType\MinimumChargeType|string $minimumChargeType
     * return ShipmentLegRateDetail
     */
    public function setMinimumChargeType($minimumChargeType)
    {
        $this->MinimumChargeType = $minimumChargeType;
        return $this;
    }
    
    /**
     * Specifies the currency exchange performed on financial amounts for this rate.
     *
     * @param CurrencyExchangeRate $currencyExchangeRate
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
     * @param SpecialRatingAppliedType[] $specialRatingApplied
     * return ShipmentLegRateDetail
     */
    public function setSpecialRatingApplied(array $specialRatingApplied)
    {
        $this->SpecialRatingApplied = $specialRatingApplied;
        return $this;
    }
    
    /**
     * Set DimDivisor
     *
     * @param nonNegativeInteger $dimDivisor
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
     * @param \FedEx\ShipService\SimpleType\RateDimensionalDivisorType|string $dimDivisorType
     * return ShipmentLegRateDetail
     */
    public function setDimDivisorType($dimDivisorType)
    {
        $this->DimDivisorType = $dimDivisorType;
        return $this;
    }
    
    /**
     * Set FuelSurchargePercent
     *
     * @param decimal $fuelSurchargePercent
     * return ShipmentLegRateDetail
     */
    public function setFuelSurchargePercent($fuelSurchargePercent)
    {
        $this->FuelSurchargePercent = $fuelSurchargePercent;
        return $this;
    }
    
    /**
     * Set TotalBillingWeight
     *
     * @param Weight $totalBillingWeight
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
     * @param Weight $totalDimWeight
     * return ShipmentLegRateDetail
     */
    public function setTotalDimWeight(Weight $totalDimWeight)
    {
        $this->TotalDimWeight = $totalDimWeight;
        return $this;
    }
    
    /**
     * Set TotalBaseCharge
     *
     * @param Money $totalBaseCharge
     * return ShipmentLegRateDetail
     */
    public function setTotalBaseCharge(Money $totalBaseCharge)
    {
        $this->TotalBaseCharge = $totalBaseCharge;
        return $this;
    }
    
    /**
     * Set TotalFreightDiscounts
     *
     * @param Money $totalFreightDiscounts
     * return ShipmentLegRateDetail
     */
    public function setTotalFreightDiscounts(Money $totalFreightDiscounts)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    
    /**
     * Set TotalNetFreight
     *
     * @param Money $totalNetFreight
     * return ShipmentLegRateDetail
     */
    public function setTotalNetFreight(Money $totalNetFreight)
    {
        $this->TotalNetFreight = $totalNetFreight;
        return $this;
    }
    
    /**
     * Set TotalSurcharges
     *
     * @param Money $totalSurcharges
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
     * @param Money $totalNetFedExCharge
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
     * @param Money $totalTaxes
     * return ShipmentLegRateDetail
     */
    public function setTotalTaxes(Money $totalTaxes)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    
    /**
     * Set TotalNetCharge
     *
     * @param Money $totalNetCharge
     * return ShipmentLegRateDetail
     */
    public function setTotalNetCharge(Money $totalNetCharge)
    {
        $this->TotalNetCharge = $totalNetCharge;
        return $this;
    }
    
    /**
     * Set TotalRebates
     *
     * @param Money $totalRebates
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
     * @param Money $totalDutiesAndTaxes
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
     * @param Money $totalNetChargeWithDutiesAndTaxes
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
     * @param FreightRateDetail $freightRateDetail
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
     * @param RateDiscount[] $freightDiscounts
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
     * @param Rebate[] $rebates
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
     * @param Surcharge[] $surcharges
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
     * @param Tax[] $taxes
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
     * @param EdtCommodityTax[] $dutiesAndTaxes
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
     * @param VariableHandlingCharges $variableHandlingCharges
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
     * @param VariableHandlingCharges $totalVariableHandlingCharges
     * return ShipmentLegRateDetail
     */
    public function setTotalVariableHandlingCharges(VariableHandlingCharges $totalVariableHandlingCharges)
    {
        $this->TotalVariableHandlingCharges = $totalVariableHandlingCharges;
        return $this;
    }
    

    
}