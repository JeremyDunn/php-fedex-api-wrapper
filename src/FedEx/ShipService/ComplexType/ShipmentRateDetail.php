<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data for a shipment's total/summary rates, as calculated per a specific rate type. The "total..." fields may differ from the sum of corresponding package data for Multiweight or Express MPS.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\ReturnedRateType|string $RateType
 * @property string $RateScale
 * @property string $RateZone
 * @property \FedEx\ShipService\SimpleType\PricingCodeType|string $PricingCode
 * @property \FedEx\ShipService\SimpleType\RatedWeightMethod|string $RatedWeightMethod
 * @property \FedEx\ShipService\SimpleType\MinimumChargeType|string $MinimumChargeType
 * @property CurrencyExchangeRate $CurrencyExchangeRate
 * @property \FedEx\ShipService\SimpleType\SpecialRatingAppliedType|string[] $SpecialRatingApplied
 * @property int $DimDivisor
 * @property \FedEx\ShipService\SimpleType\RateDimensionalDivisorType|string $DimDivisorType
 * @property float $FuelSurchargePercent
 * @property Weight $TotalBillingWeight
 * @property Weight $TotalDimWeight
 * @property Money $TotalBaseCharge
 * @property Money $TotalFreightDiscounts
 * @property Money $TotalNetFreight
 * @property Money $TotalSurcharges
 * @property Money $TotalNetFedExCharge
 * @property Money $TotalTaxes
 * @property Money $TotalNetCharge
 * @property Money $TotalRebates
 * @property Money $TotalDutiesAndTaxes
 * @property Money $TotalAncillaryFeesAndTaxes
 * @property Money $TotalDutiesTaxesAndFees
 * @property Money $TotalNetChargeWithDutiesAndTaxes
 * @property ShipmentLegRateDetail[] $ShipmentLegRateDetails
 * @property FreightRateDetail $FreightRateDetail
 * @property RateDiscount[] $FreightDiscounts
 * @property Rebate[] $Rebates
 * @property Surcharge[] $Surcharges
 * @property Tax[] $Taxes
 * @property EdtCommodityTax[] $DutiesAndTaxes
 * @property AncillaryFeeAndTax[] $AncillaryFeesAndTaxes
 * @property VariableHandlingCharges $VariableHandlingCharges
 * @property VariableHandlingCharges $TotalVariableHandlingCharges

 */
class ShipmentRateDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentRateDetail';

    /**
     * Type used for this specific set of rate data.
     *
     * @param \FedEx\ShipService\SimpleType\ReturnedRateType|string $rateType
     * @return $this
     */
    public function setRateType($rateType)
    {
        $this->values['RateType'] = $rateType;
        return $this;
    }

    /**
     * Indicates the rate scale used.
     *
     * @param string $rateScale
     * @return $this
     */
    public function setRateScale($rateScale)
    {
        $this->values['RateScale'] = $rateScale;
        return $this;
    }

    /**
     * Indicates the rate zone used (based on origin and destination).
     *
     * @param string $rateZone
     * @return $this
     */
    public function setRateZone($rateZone)
    {
        $this->values['RateZone'] = $rateZone;
        return $this;
    }

    /**
     * Set PricingCode
     *
     * @param \FedEx\ShipService\SimpleType\PricingCodeType|string $pricingCode
     * @return $this
     */
    public function setPricingCode($pricingCode)
    {
        $this->values['PricingCode'] = $pricingCode;
        return $this;
    }

    /**
     * Indicates which weight was used.
     *
     * @param \FedEx\ShipService\SimpleType\RatedWeightMethod|string $ratedWeightMethod
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
     * @param \FedEx\ShipService\SimpleType\MinimumChargeType|string $minimumChargeType
     * @return $this
     */
    public function setMinimumChargeType($minimumChargeType)
    {
        $this->values['MinimumChargeType'] = $minimumChargeType;
        return $this;
    }

    /**
     * Specifies the currency exchange performed on financial amounts for this rate.
     *
     * @param CurrencyExchangeRate $currencyExchangeRate
     * @return $this
     */
    public function setCurrencyExchangeRate(CurrencyExchangeRate $currencyExchangeRate)
    {
        $this->values['CurrencyExchangeRate'] = $currencyExchangeRate;
        return $this;
    }

    /**
     * Indicates which special rating cases applied to this shipment.
     *
     * @param \FedEx\ShipService\SimpleType\SpecialRatingAppliedType[]|string[] $specialRatingApplied
     * @return $this
     */
    public function setSpecialRatingApplied(array $specialRatingApplied)
    {
        $this->values['SpecialRatingApplied'] = $specialRatingApplied;
        return $this;
    }

    /**
     * Set DimDivisor
     *
     * @param int $dimDivisor
     * @return $this
     */
    public function setDimDivisor($dimDivisor)
    {
        $this->values['DimDivisor'] = $dimDivisor;
        return $this;
    }

    /**
     * Identifies the type of dim divisor that was applied.
     *
     * @param \FedEx\ShipService\SimpleType\RateDimensionalDivisorType|string $dimDivisorType
     * @return $this
     */
    public function setDimDivisorType($dimDivisorType)
    {
        $this->values['DimDivisorType'] = $dimDivisorType;
        return $this;
    }

    /**
     * Set FuelSurchargePercent
     *
     * @param float $fuelSurchargePercent
     * @return $this
     */
    public function setFuelSurchargePercent($fuelSurchargePercent)
    {
        $this->values['FuelSurchargePercent'] = $fuelSurchargePercent;
        return $this;
    }

    /**
     * Set TotalBillingWeight
     *
     * @param Weight $totalBillingWeight
     * @return $this
     */
    public function setTotalBillingWeight(Weight $totalBillingWeight)
    {
        $this->values['TotalBillingWeight'] = $totalBillingWeight;
        return $this;
    }

    /**
     * Sum of dimensional weights for all packages.
     *
     * @param Weight $totalDimWeight
     * @return $this
     */
    public function setTotalDimWeight(Weight $totalDimWeight)
    {
        $this->values['TotalDimWeight'] = $totalDimWeight;
        return $this;
    }

    /**
     * Set TotalBaseCharge
     *
     * @param Money $totalBaseCharge
     * @return $this
     */
    public function setTotalBaseCharge(Money $totalBaseCharge)
    {
        $this->values['TotalBaseCharge'] = $totalBaseCharge;
        return $this;
    }

    /**
     * Set TotalFreightDiscounts
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
     * Set TotalNetFreight
     *
     * @param Money $totalNetFreight
     * @return $this
     */
    public function setTotalNetFreight(Money $totalNetFreight)
    {
        $this->values['TotalNetFreight'] = $totalNetFreight;
        return $this;
    }

    /**
     * Set TotalSurcharges
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
     * This shipment's totalNetFreight + totalSurcharges (not including totalTaxes).
     *
     * @param Money $totalNetFedExCharge
     * @return $this
     */
    public function setTotalNetFedExCharge(Money $totalNetFedExCharge)
    {
        $this->values['TotalNetFedExCharge'] = $totalNetFedExCharge;
        return $this;
    }

    /**
     * Total of the transportation-based taxes.
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
     * Set TotalNetCharge
     *
     * @param Money $totalNetCharge
     * @return $this
     */
    public function setTotalNetCharge(Money $totalNetCharge)
    {
        $this->values['TotalNetCharge'] = $totalNetCharge;
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
     * Total of all values under this shipment's dutiesAndTaxes; only provided if estimated duties and taxes were calculated for this shipment.
     *
     * @param Money $totalDutiesAndTaxes
     * @return $this
     */
    public function setTotalDutiesAndTaxes(Money $totalDutiesAndTaxes)
    {
        $this->values['TotalDutiesAndTaxes'] = $totalDutiesAndTaxes;
        return $this;
    }

    /**
     * Identifies the total amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     *
     * @param Money $totalAncillaryFeesAndTaxes
     * @return $this
     */
    public function setTotalAncillaryFeesAndTaxes(Money $totalAncillaryFeesAndTaxes)
    {
        $this->values['TotalAncillaryFeesAndTaxes'] = $totalAncillaryFeesAndTaxes;
        return $this;
    }

    /**
     * The total of the totalDutiesAndTaxes plus the totalAncillaryFeesAndTaxes.
     *
     * @param Money $totalDutiesTaxesAndFees
     * @return $this
     */
    public function setTotalDutiesTaxesAndFees(Money $totalDutiesTaxesAndFees)
    {
        $this->values['TotalDutiesTaxesAndFees'] = $totalDutiesTaxesAndFees;
        return $this;
    }

    /**
     * This shipment's totalNetCharge + totalDutiesTaxesAndFees; some duties and taxes are only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender's account.
     *
     * @param Money $totalNetChargeWithDutiesAndTaxes
     * @return $this
     */
    public function setTotalNetChargeWithDutiesAndTaxes(Money $totalNetChargeWithDutiesAndTaxes)
    {
        $this->values['TotalNetChargeWithDutiesAndTaxes'] = $totalNetChargeWithDutiesAndTaxes;
        return $this;
    }

    /**
     * Identifies the Rate Details per each leg in a Freight Shipment
     *
     * @param ShipmentLegRateDetail[] $shipmentLegRateDetails
     * @return $this
     */
    public function setShipmentLegRateDetails(array $shipmentLegRateDetails)
    {
        $this->values['ShipmentLegRateDetails'] = $shipmentLegRateDetails;
        return $this;
    }

    /**
     * Rate data specific to FedEx Freight and FedEx National Freight services.
     *
     * @param FreightRateDetail $freightRateDetail
     * @return $this
     */
    public function setFreightRateDetail(FreightRateDetail $freightRateDetail)
    {
        $this->values['FreightRateDetail'] = $freightRateDetail;
        return $this;
    }

    /**
     * All rate discounts that apply to this shipment.
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
     * All rebates that apply to this shipment.
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
     * All surcharges that apply to this shipment.
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
     * All transportation-based taxes applicable to this shipment.
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
     * All commodity-based duties and taxes applicable to this shipment.
     *
     * @param EdtCommodityTax[] $dutiesAndTaxes
     * @return $this
     */
    public function setDutiesAndTaxes(array $dutiesAndTaxes)
    {
        $this->values['DutiesAndTaxes'] = $dutiesAndTaxes;
        return $this;
    }

    /**
     * Identifies the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     *
     * @param AncillaryFeeAndTax[] $ancillaryFeesAndTaxes
     * @return $this
     */
    public function setAncillaryFeesAndTaxes(array $ancillaryFeesAndTaxes)
    {
        $this->values['AncillaryFeesAndTaxes'] = $ancillaryFeesAndTaxes;
        return $this;
    }

    /**
     * The "order level" variable handling charges.
     *
     * @param VariableHandlingCharges $variableHandlingCharges
     * @return $this
     */
    public function setVariableHandlingCharges(VariableHandlingCharges $variableHandlingCharges)
    {
        $this->values['VariableHandlingCharges'] = $variableHandlingCharges;
        return $this;
    }

    /**
     * The total of all variable handling charges at both shipment (order) and package level.
     *
     * @param VariableHandlingCharges $totalVariableHandlingCharges
     * @return $this
     */
    public function setTotalVariableHandlingCharges(VariableHandlingCharges $totalVariableHandlingCharges)
    {
        $this->values['TotalVariableHandlingCharges'] = $totalVariableHandlingCharges;
        return $this;
    }
}
