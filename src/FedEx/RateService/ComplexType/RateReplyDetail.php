<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RateReplyDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RateReplyDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RateReplyDetail';

    /**
     * Identifies the FedEx service to use in shipping the package. See ServiceType for list of valid enumerated values.
     *
     * @param \FedEx\RateService\SimpleType\ServiceType|string $serviceType
     * return RateReplyDetail
     */
    public function setServiceType($serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Identifies the packaging used by the requestor for the package. See PackagingType for list of valid enumerated values.
     *
     * @param \FedEx\RateService\SimpleType\PackagingType|string $packagingType
     * return RateReplyDetail
     */
    public function setPackagingType($packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * Shows the specific combination of service options combined with the service type that produced this committment in the set returned to the caller.
     *
     * @param ServiceOptionType[] $appliedOptions
     * return RateReplyDetail
     */
    public function setAppliedOptions(array $appliedOptions)
    {
        $this->AppliedOptions = $appliedOptions;
        return $this;
    }
    
    /**
     * Supporting detail for applied options identified in preceding field.
     *
     * @param ServiceSubOptionDetail $appliedSubOptions
     * return RateReplyDetail
     */
    public function setAppliedSubOptions(ServiceSubOptionDetail $appliedSubOptions)
    {
        $this->AppliedSubOptions = $appliedSubOptions;
        return $this;
    }
    
    /**
     * Set DeliveryStation
     *
     * @param string $deliveryStation
     * return RateReplyDetail
     */
    public function setDeliveryStation($deliveryStation)
    {
        $this->DeliveryStation = $deliveryStation;
        return $this;
    }
    
    /**
     * Set DeliveryDayOfWeek
     *
     * @param \FedEx\RateService\SimpleType\DayOfWeekType|string $deliveryDayOfWeek
     * return RateReplyDetail
     */
    public function setDeliveryDayOfWeek($deliveryDayOfWeek)
    {
        $this->DeliveryDayOfWeek = $deliveryDayOfWeek;
        return $this;
    }
    
    /**
     * Set DeliveryTimestamp
     *
     * @param dateTime $deliveryTimestamp
     * return RateReplyDetail
     */
    public function setDeliveryTimestamp($deliveryTimestamp)
    {
        $this->DeliveryTimestamp = $deliveryTimestamp;
        return $this;
    }
    
    /**
     * Set CommitDetails
     *
     * @param CommitDetail[] $commitDetails
     * return RateReplyDetail
     */
    public function setCommitDetails(array $commitDetails)
    {
        $this->CommitDetails = $commitDetails;
        return $this;
    }
    
    /**
     * Identification of an airport, using standard three-letter abbreviations.
     *
     * @param string $destinationAirportId
     * return RateReplyDetail
     */
    public function setDestinationAirportId($destinationAirportId)
    {
        $this->DestinationAirportId = $destinationAirportId;
        return $this;
    }
    
    /**
     * Indicates whether or not this shipment is eligible for a money back guarantee.
     *
     * @param boolean $ineligibleForMoneyBackGuarantee
     * return RateReplyDetail
     */
    public function setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee)
    {
        $this->IneligibleForMoneyBackGuarantee = $ineligibleForMoneyBackGuarantee;
        return $this;
    }
    
    /**
     * Commitment code for the origin.
     *
     * @param string $originServiceArea
     * return RateReplyDetail
     */
    public function setOriginServiceArea($originServiceArea)
    {
        $this->OriginServiceArea = $originServiceArea;
        return $this;
    }
    
    /**
     * Commitment code for the destination.
     *
     * @param string $destinationServiceArea
     * return RateReplyDetail
     */
    public function setDestinationServiceArea($destinationServiceArea)
    {
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    
    /**
     * Time in transit from pickup to delivery.
     *
     * @param \FedEx\RateService\SimpleType\TransitTimeType|string $transitTime
     * return RateReplyDetail
     */
    public function setTransitTime($transitTime)
    {
        $this->TransitTime = $transitTime;
        return $this;
    }
    
    /**
     * Maximum expected transit time
     *
     * @param \FedEx\RateService\SimpleType\TransitTimeType|string $maximumTransitTime
     * return RateReplyDetail
     */
    public function setMaximumTransitTime($maximumTransitTime)
    {
        $this->MaximumTransitTime = $maximumTransitTime;
        return $this;
    }
    
    /**
     * The signature option for this package.
     *
     * @param \FedEx\RateService\SimpleType\SignatureOptionType|string $signatureOption
     * return RateReplyDetail
     */
    public function setSignatureOption($signatureOption)
    {
        $this->SignatureOption = $signatureOption;
        return $this;
    }
    
    /**
     * The actual rate type of the charges for this package.
     *
     * @param \FedEx\RateService\SimpleType\ReturnedRateType|string $actualRateType
     * return RateReplyDetail
     */
    public function setActualRateType($actualRateType)
    {
        $this->ActualRateType = $actualRateType;
        return $this;
    }
    
    /**
     * Each element contains all rate data for a single rate type.
     *
     * @param RatedShipmentDetail[] $ratedShipmentDetails
     * return RateReplyDetail
     */
    public function setRatedShipmentDetails(array $ratedShipmentDetails)
    {
        $this->RatedShipmentDetails = $ratedShipmentDetails;
        return $this;
    }
    

    
}