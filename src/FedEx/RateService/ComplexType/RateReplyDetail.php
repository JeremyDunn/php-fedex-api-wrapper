<?php
namespace FedEx\RateService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RateReplyDetail
    extends AbstractComplexType
{
    protected $_name = 'RateReplyDetail';

    /**
     * Identifies the FedEx service to use in shipping the package. See ServiceType for list of valid enumerated values.
     *
     * @param ServiceType $ServiceType
     * return RateReplyDetail
     */
    public function setServiceType(\FedEx\RateService\SimpleType\ServiceType $serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Identifies the packaging used by the requestor for the package. See PackagingType for list of valid enumerated values.
     *
     * @param PackagingType $PackagingType
     * return RateReplyDetail
     */
    public function setPackagingType(\FedEx\RateService\SimpleType\PackagingType $packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * Shows the specific combination of service options combined with the service type that produced this committment in the set returned to the caller.
     *
     * @param array[ServiceOptionType] $AppliedOptions
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
     * @param ServiceSubOptionDetail $AppliedSubOptions
     * return RateReplyDetail
     */
    public function setAppliedSubOptions(ServiceSubOptionDetail $appliedSubOptions)
    {
        $this->AppliedSubOptions = $appliedSubOptions;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $DeliveryStation
     * return RateReplyDetail
     */
    public function setDeliveryStation($deliveryStation)
    {
        $this->DeliveryStation = $deliveryStation;
        return $this;
    }
    
    /**
     * 
     *
     * @param DayOfWeekType $DeliveryDayOfWeek
     * return RateReplyDetail
     */
    public function setDeliveryDayOfWeek(\FedEx\RateService\SimpleType\DayOfWeekType $deliveryDayOfWeek)
    {
        $this->DeliveryDayOfWeek = $deliveryDayOfWeek;
        return $this;
    }
    
    /**
     * 
     *
     * @param dateTime $DeliveryTimestamp
     * return RateReplyDetail
     */
    public function setDeliveryTimestamp($deliveryTimestamp)
    {
        $this->DeliveryTimestamp = $deliveryTimestamp;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[CommitDetail] $CommitDetails
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
     * @param string $DestinationAirportId
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
     * @param boolean $IneligibleForMoneyBackGuarantee
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
     * @param string $OriginServiceArea
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
     * @param string $DestinationServiceArea
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
     * @param TransitTimeType $TransitTime
     * return RateReplyDetail
     */
    public function setTransitTime(\FedEx\RateService\SimpleType\TransitTimeType $transitTime)
    {
        $this->TransitTime = $transitTime;
        return $this;
    }
    
    /**
     * Maximum expected transit time
     *
     * @param TransitTimeType $MaximumTransitTime
     * return RateReplyDetail
     */
    public function setMaximumTransitTime(\FedEx\RateService\SimpleType\TransitTimeType $maximumTransitTime)
    {
        $this->MaximumTransitTime = $maximumTransitTime;
        return $this;
    }
    
    /**
     * The signature option for this package.
     *
     * @param SignatureOptionType $SignatureOption
     * return RateReplyDetail
     */
    public function setSignatureOption(\FedEx\RateService\SimpleType\SignatureOptionType $signatureOption)
    {
        $this->SignatureOption = $signatureOption;
        return $this;
    }
    
    /**
     * The actual rate type of the charges for this package.
     *
     * @param ReturnedRateType $ActualRateType
     * return RateReplyDetail
     */
    public function setActualRateType(\FedEx\RateService\SimpleType\ReturnedRateType $actualRateType)
    {
        $this->ActualRateType = $actualRateType;
        return $this;
    }
    
    /**
     * Each element contains all rate data for a single rate type.
     *
     * @param array[RatedShipmentDetail] $RatedShipmentDetails
     * return RateReplyDetail
     */
    public function setRatedShipmentDetails(array $ratedShipmentDetails)
    {
        $this->RatedShipmentDetails = $ratedShipmentDetails;
        return $this;
    }
    

    
}