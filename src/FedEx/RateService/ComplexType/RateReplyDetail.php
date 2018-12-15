<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RateReplyDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\ServiceType|string $ServiceType
 * @property ServiceDescription $ServiceDescription
 * @property \FedEx\RateService\SimpleType\PackagingType|string $PackagingType
 * @property \FedEx\RateService\SimpleType\ServiceOptionType|string[] $AppliedOptions
 * @property ServiceSubOptionDetail $AppliedSubOptions
 * @property string $DeliveryStation
 * @property \FedEx\RateService\SimpleType\DayOfWeekType|string $DeliveryDayOfWeek
 * @property string $DeliveryTimestamp
 * @property CommitDetail[] $CommitDetails
 * @property string $DestinationAirportId
 * @property boolean $IneligibleForMoneyBackGuarantee
 * @property string $OriginServiceArea
 * @property string $DestinationServiceArea
 * @property \FedEx\RateService\SimpleType\TransitTimeType|string $TransitTime
 * @property \FedEx\RateService\SimpleType\TransitTimeType|string $MaximumTransitTime
 * @property \FedEx\RateService\SimpleType\SignatureOptionType|string $SignatureOption
 * @property \FedEx\RateService\SimpleType\ReturnedRateType|string $ActualRateType
 * @property RatedShipmentDetail[] $RatedShipmentDetails

 */
class RateReplyDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateReplyDetail';

    /**
     * Deprecated: This field will be removed in a future DOM release. New code should use serviceDescription.serviceType instead.
     *
     * @param \FedEx\RateService\SimpleType\ServiceType|string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['ServiceType'] = $serviceType;
        return $this;
    }

    /**
     * Descriptions and alternate identifiers for a service.
     *
     * @param ServiceDescription $serviceDescription
     * @return $this
     */
    public function setServiceDescription(ServiceDescription $serviceDescription)
    {
        $this->values['ServiceDescription'] = $serviceDescription;
        return $this;
    }

    /**
     * Set PackagingType
     *
     * @param \FedEx\RateService\SimpleType\PackagingType|string $packagingType
     * @return $this
     */
    public function setPackagingType($packagingType)
    {
        $this->values['PackagingType'] = $packagingType;
        return $this;
    }

    /**
     * Shows the specific combination of service options combined with the service type that produced this committment in the set returned to the caller.
     *
     * @param \FedEx\RateService\SimpleType\ServiceOptionType[]|string[] $appliedOptions
     * @return $this
     */
    public function setAppliedOptions(array $appliedOptions)
    {
        $this->values['AppliedOptions'] = $appliedOptions;
        return $this;
    }

    /**
     * Supporting detail for applied options identified in preceding field.
     *
     * @param ServiceSubOptionDetail $appliedSubOptions
     * @return $this
     */
    public function setAppliedSubOptions(ServiceSubOptionDetail $appliedSubOptions)
    {
        $this->values['AppliedSubOptions'] = $appliedSubOptions;
        return $this;
    }

    /**
     * Set DeliveryStation
     *
     * @param string $deliveryStation
     * @return $this
     */
    public function setDeliveryStation($deliveryStation)
    {
        $this->values['DeliveryStation'] = $deliveryStation;
        return $this;
    }

    /**
     * Set DeliveryDayOfWeek
     *
     * @param \FedEx\RateService\SimpleType\DayOfWeekType|string $deliveryDayOfWeek
     * @return $this
     */
    public function setDeliveryDayOfWeek($deliveryDayOfWeek)
    {
        $this->values['DeliveryDayOfWeek'] = $deliveryDayOfWeek;
        return $this;
    }

    /**
     * Set DeliveryTimestamp
     *
     * @param string $deliveryTimestamp
     * @return $this
     */
    public function setDeliveryTimestamp($deliveryTimestamp)
    {
        $this->values['DeliveryTimestamp'] = $deliveryTimestamp;
        return $this;
    }

    /**
     * Set CommitDetails
     *
     * @param CommitDetail[] $commitDetails
     * @return $this
     */
    public function setCommitDetails(array $commitDetails)
    {
        $this->values['CommitDetails'] = $commitDetails;
        return $this;
    }

    /**
     * Set DestinationAirportId
     *
     * @param string $destinationAirportId
     * @return $this
     */
    public function setDestinationAirportId($destinationAirportId)
    {
        $this->values['DestinationAirportId'] = $destinationAirportId;
        return $this;
    }

    /**
     * Set IneligibleForMoneyBackGuarantee
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
     * Not populated by FAST service in Jan07.
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
     * Not populated by FAST service in Jan07.
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
     * Not populated by FAST service in Jan07.
     *
     * @param \FedEx\RateService\SimpleType\TransitTimeType|string $transitTime
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
     * @param \FedEx\RateService\SimpleType\TransitTimeType|string $maximumTransitTime
     * @return $this
     */
    public function setMaximumTransitTime($maximumTransitTime)
    {
        $this->values['MaximumTransitTime'] = $maximumTransitTime;
        return $this;
    }

    /**
     * Not populated by FAST service in Jan07. Actual signature option applied, to allow for cases in wihch the original value conflicted with other service features in the shipment.
     *
     * @param \FedEx\RateService\SimpleType\SignatureOptionType|string $signatureOption
     * @return $this
     */
    public function setSignatureOption($signatureOption)
    {
        $this->values['SignatureOption'] = $signatureOption;
        return $this;
    }

    /**
     * Set ActualRateType
     *
     * @param \FedEx\RateService\SimpleType\ReturnedRateType|string $actualRateType
     * @return $this
     */
    public function setActualRateType($actualRateType)
    {
        $this->values['ActualRateType'] = $actualRateType;
        return $this;
    }

    /**
     * Each element contains all rate data for a single rate type.
     *
     * @param RatedShipmentDetail[] $ratedShipmentDetails
     * @return $this
     */
    public function setRatedShipmentDetails(array $ratedShipmentDetails)
    {
        $this->values['RatedShipmentDetails'] = $ratedShipmentDetails;
        return $this;
    }
}
