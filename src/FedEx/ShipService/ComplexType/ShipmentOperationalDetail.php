<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentOperationalDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $UrsaPrefixCode
 * @property string $UrsaSuffixCode
 * @property string $OriginLocationId
 * @property int $OriginLocationNumber
 * @property string $OriginServiceArea
 * @property string $DestinationLocationId
 * @property int $DestinationLocationNumber
 * @property string $DestinationServiceArea
 * @property string $DestinationLocationStateOrProvinceCode
 * @property string $DeliveryDate
 * @property \FedEx\ShipService\SimpleType\DayOfWeekType|string $DeliveryDay
 * @property string $PublishedDeliveryTime
 * @property string $CommitDate
 * @property \FedEx\ShipService\SimpleType\DayOfWeekType|string $CommitDay
 * @property \FedEx\ShipService\SimpleType\TransitTimeType|string $TransitTime
 * @property \FedEx\ShipService\SimpleType\TransitTimeType|string $MaximumTransitTime
 * @property \FedEx\ShipService\SimpleType\TransitTimeType|string $CustomTransitTime
 * @property boolean $IneligibleForMoneyBackGuarantee
 * @property \FedEx\ShipService\SimpleType\GroundDeliveryEligibilityType|string[] $DeliveryEligibilities
 * @property string $AstraPlannedServiceLevel
 * @property string $AstraDescription
 * @property string $PostalCode
 * @property string $StateOrProvinceCode
 * @property string $CountryCode
 * @property string $AirportId
 * @property string $ServiceCode
 * @property string $PackagingCode
 * @property string $Scac

 */
class ShipmentOperationalDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentOperationalDetail';

    /**
     * Set UrsaPrefixCode
     *
     * @param string $ursaPrefixCode
     * @return $this
     */
    public function setUrsaPrefixCode($ursaPrefixCode)
    {
        $this->values['UrsaPrefixCode'] = $ursaPrefixCode;
        return $this;
    }

    /**
     * Set UrsaSuffixCode
     *
     * @param string $ursaSuffixCode
     * @return $this
     */
    public function setUrsaSuffixCode($ursaSuffixCode)
    {
        $this->values['UrsaSuffixCode'] = $ursaSuffixCode;
        return $this;
    }

    /**
     * Set OriginLocationId
     *
     * @param string $originLocationId
     * @return $this
     */
    public function setOriginLocationId($originLocationId)
    {
        $this->values['OriginLocationId'] = $originLocationId;
        return $this;
    }

    /**
     * Set OriginLocationNumber
     *
     * @param int $originLocationNumber
     * @return $this
     */
    public function setOriginLocationNumber($originLocationNumber)
    {
        $this->values['OriginLocationNumber'] = $originLocationNumber;
        return $this;
    }

    /**
     * Set OriginServiceArea
     *
     * @param string $originServiceArea
     * @return $this
     */
    public function setOriginServiceArea($originServiceArea)
    {
        $this->values['OriginServiceArea'] = $originServiceArea;
        return $this;
    }

    /**
     * Set DestinationLocationId
     *
     * @param string $destinationLocationId
     * @return $this
     */
    public function setDestinationLocationId($destinationLocationId)
    {
        $this->values['DestinationLocationId'] = $destinationLocationId;
        return $this;
    }

    /**
     * Set DestinationLocationNumber
     *
     * @param int $destinationLocationNumber
     * @return $this
     */
    public function setDestinationLocationNumber($destinationLocationNumber)
    {
        $this->values['DestinationLocationNumber'] = $destinationLocationNumber;
        return $this;
    }

    /**
     * Set DestinationServiceArea
     *
     * @param string $destinationServiceArea
     * @return $this
     */
    public function setDestinationServiceArea($destinationServiceArea)
    {
        $this->values['DestinationServiceArea'] = $destinationServiceArea;
        return $this;
    }

    /**
     * This is the state of the destination location ID, and is not necessarily the same as the postal state.
     *
     * @param string $destinationLocationStateOrProvinceCode
     * @return $this
     */
    public function setDestinationLocationStateOrProvinceCode($destinationLocationStateOrProvinceCode)
    {
        $this->values['DestinationLocationStateOrProvinceCode'] = $destinationLocationStateOrProvinceCode;
        return $this;
    }

    /**
     * Expected/estimated date of delivery.
     *
     * @param string $deliveryDate
     * @return $this
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->values['DeliveryDate'] = $deliveryDate;
        return $this;
    }

    /**
     * Expected/estimated day of week of delivery.
     *
     * @param \FedEx\ShipService\SimpleType\DayOfWeekType|string $deliveryDay
     * @return $this
     */
    public function setDeliveryDay($deliveryDay)
    {
        $this->values['DeliveryDay'] = $deliveryDay;
        return $this;
    }

    /**
     * Delivery time, as published in Service Guide.
     *
     * @param string $publishedDeliveryTime
     * @return $this
     */
    public function setPublishedDeliveryTime($publishedDeliveryTime)
    {
        $this->values['PublishedDeliveryTime'] = $publishedDeliveryTime;
        return $this;
    }

    /**
     * Committed date of delivery.
     *
     * @param string $commitDate
     * @return $this
     */
    public function setCommitDate($commitDate)
    {
        $this->values['CommitDate'] = $commitDate;
        return $this;
    }

    /**
     * Committed day of week of delivery.
     *
     * @param \FedEx\ShipService\SimpleType\DayOfWeekType|string $commitDay
     * @return $this
     */
    public function setCommitDay($commitDay)
    {
        $this->values['CommitDay'] = $commitDay;
        return $this;
    }

    /**
     * Standard transit time per origin, destination, and service.
     *
     * @param \FedEx\ShipService\SimpleType\TransitTimeType|string $transitTime
     * @return $this
     */
    public function setTransitTime($transitTime)
    {
        $this->values['TransitTime'] = $transitTime;
        return $this;
    }

    /**
     * Maximum expected transit time
     *
     * @param \FedEx\ShipService\SimpleType\TransitTimeType|string $maximumTransitTime
     * @return $this
     */
    public function setMaximumTransitTime($maximumTransitTime)
    {
        $this->values['MaximumTransitTime'] = $maximumTransitTime;
        return $this;
    }

    /**
     * Transit time based on customer eligibility.
     *
     * @param \FedEx\ShipService\SimpleType\TransitTimeType|string $customTransitTime
     * @return $this
     */
    public function setCustomTransitTime($customTransitTime)
    {
        $this->values['CustomTransitTime'] = $customTransitTime;
        return $this;
    }

    /**
     * Indicates that this shipment is not eligible for money back guarantee.
     *
     * @param boolean $ineligibleForMoneyBackGuarantee
     * @return $this
     */
    public function setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee)
    {
        $this->values['IneligibleForMoneyBackGuarantee'] = $ineligibleForMoneyBackGuarantee;
        return $this;
    }

    /**
     * FedEx Ground delivery features for which this shipment may be eligible.
     *
     * @param \FedEx\ShipService\SimpleType\GroundDeliveryEligibilityType[]|string[] $deliveryEligibilities
     * @return $this
     */
    public function setDeliveryEligibilities(array $deliveryEligibilities)
    {
        $this->values['DeliveryEligibilities'] = $deliveryEligibilities;
        return $this;
    }

    /**
     * Text describing planned delivery.
     *
     * @param string $astraPlannedServiceLevel
     * @return $this
     */
    public function setAstraPlannedServiceLevel($astraPlannedServiceLevel)
    {
        $this->values['AstraPlannedServiceLevel'] = $astraPlannedServiceLevel;
        return $this;
    }

    /**
     * Set AstraDescription
     *
     * @param string $astraDescription
     * @return $this
     */
    public function setAstraDescription($astraDescription)
    {
        $this->values['AstraDescription'] = $astraDescription;
        return $this;
    }

    /**
     * Set PostalCode
     *
     * @param string $postalCode
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->values['PostalCode'] = $postalCode;
        return $this;
    }

    /**
     * Set StateOrProvinceCode
     *
     * @param string $stateOrProvinceCode
     * @return $this
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->values['StateOrProvinceCode'] = $stateOrProvinceCode;
        return $this;
    }

    /**
     * Set CountryCode
     *
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->values['CountryCode'] = $countryCode;
        return $this;
    }

    /**
     * Set AirportId
     *
     * @param string $airportId
     * @return $this
     */
    public function setAirportId($airportId)
    {
        $this->values['AirportId'] = $airportId;
        return $this;
    }

    /**
     * Set ServiceCode
     *
     * @param string $serviceCode
     * @return $this
     */
    public function setServiceCode($serviceCode)
    {
        $this->values['ServiceCode'] = $serviceCode;
        return $this;
    }

    /**
     * Set PackagingCode
     *
     * @param string $packagingCode
     * @return $this
     */
    public function setPackagingCode($packagingCode)
    {
        $this->values['PackagingCode'] = $packagingCode;
        return $this;
    }

    /**
     * Set Scac
     *
     * @param string $scac
     * @return $this
     */
    public function setScac($scac)
    {
        $this->values['Scac'] = $scac;
        return $this;
    }
}
