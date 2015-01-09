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
     * Set ServiceType
     *
     * @param \FedEx\RateService\SimpleType\ServiceType|string $serviceType
     * @return RateReplyDetail
     */
    public function setServiceType($serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Returns Set ServiceType
     *
     * @return \FedEx\RateService\SimpleType\ServiceType|string
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    
    /**
     * Set PackagingType
     *
     * @param \FedEx\RateService\SimpleType\PackagingType|string $packagingType
     * @return RateReplyDetail
     */
    public function setPackagingType($packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * Returns Set PackagingType
     *
     * @return \FedEx\RateService\SimpleType\PackagingType|string
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }
    
    /**
     * Shows the specific combination of service options combined with the service type that produced this committment in the set returned to the caller.
     *
     * @param ServiceOptionType[] $appliedOptions
     * @return RateReplyDetail
     */
    public function setAppliedOptions(array $appliedOptions)
    {
        $this->AppliedOptions = $appliedOptions;
        return $this;
    }
    
    /**
     * Returns Shows the specific combination of service options combined with the service type that produced this committment in the set returned to the caller.
     *
     * @return ServiceOptionType[]
     */
    public function getAppliedOptions()
    {
        return $this->AppliedOptions;
    }
    
    /**
     * Supporting detail for applied options identified in preceding field.
     *
     * @param ServiceSubOptionDetail $appliedSubOptions
     * @return RateReplyDetail
     */
    public function setAppliedSubOptions(ServiceSubOptionDetail $appliedSubOptions)
    {
        $this->AppliedSubOptions = $appliedSubOptions;
        return $this;
    }
    
    /**
     * Returns Supporting detail for applied options identified in preceding field.
     *
     * @return ServiceSubOptionDetail
     */
    public function getAppliedSubOptions()
    {
        return $this->AppliedSubOptions;
    }
    
    /**
     * Set DeliveryStation
     *
     * @param string $deliveryStation
     * @return RateReplyDetail
     */
    public function setDeliveryStation($deliveryStation)
    {
        $this->DeliveryStation = $deliveryStation;
        return $this;
    }
    
    /**
     * Returns Set DeliveryStation
     *
     * @return string
     */
    public function getDeliveryStation()
    {
        return $this->DeliveryStation;
    }
    
    /**
     * Set DeliveryDayOfWeek
     *
     * @param \FedEx\RateService\SimpleType\DayOfWeekType|string $deliveryDayOfWeek
     * @return RateReplyDetail
     */
    public function setDeliveryDayOfWeek($deliveryDayOfWeek)
    {
        $this->DeliveryDayOfWeek = $deliveryDayOfWeek;
        return $this;
    }
    
    /**
     * Returns Set DeliveryDayOfWeek
     *
     * @return \FedEx\RateService\SimpleType\DayOfWeekType|string
     */
    public function getDeliveryDayOfWeek()
    {
        return $this->DeliveryDayOfWeek;
    }
    
    /**
     * Set DeliveryTimestamp
     *
     * @param dateTime $deliveryTimestamp
     * @return RateReplyDetail
     */
    public function setDeliveryTimestamp($deliveryTimestamp)
    {
        $this->DeliveryTimestamp = $deliveryTimestamp;
        return $this;
    }
    
    /**
     * Returns Set DeliveryTimestamp
     *
     * @return dateTime
     */
    public function getDeliveryTimestamp()
    {
        return $this->DeliveryTimestamp;
    }
    
    /**
     * Set CommitDetails
     *
     * @param CommitDetail[] $commitDetails
     * @return RateReplyDetail
     */
    public function setCommitDetails(array $commitDetails)
    {
        $this->CommitDetails = $commitDetails;
        return $this;
    }
    
    /**
     * Returns Set CommitDetails
     *
     * @return CommitDetail[]
     */
    public function getCommitDetails()
    {
        return $this->CommitDetails;
    }
    
    /**
     * Set DestinationAirportId
     *
     * @param string $destinationAirportId
     * @return RateReplyDetail
     */
    public function setDestinationAirportId($destinationAirportId)
    {
        $this->DestinationAirportId = $destinationAirportId;
        return $this;
    }
    
    /**
     * Returns Set DestinationAirportId
     *
     * @return string
     */
    public function getDestinationAirportId()
    {
        return $this->DestinationAirportId;
    }
    
    /**
     * Set IneligibleForMoneyBackGuarantee
     *
     * @param boolean $ineligibleForMoneyBackGuarantee
     * @return RateReplyDetail
     */
    public function setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee)
    {
        $this->IneligibleForMoneyBackGuarantee = $ineligibleForMoneyBackGuarantee;
        return $this;
    }
    
    /**
     * Returns Set IneligibleForMoneyBackGuarantee
     *
     * @return boolean
     */
    public function getIneligibleForMoneyBackGuarantee()
    {
        return $this->IneligibleForMoneyBackGuarantee;
    }
    
    /**
     * Not populated by FAST service in Jan07.
     *
     * @param string $originServiceArea
     * @return RateReplyDetail
     */
    public function setOriginServiceArea($originServiceArea)
    {
        $this->OriginServiceArea = $originServiceArea;
        return $this;
    }
    
    /**
     * Returns Not populated by FAST service in Jan07.
     *
     * @return string
     */
    public function getOriginServiceArea()
    {
        return $this->OriginServiceArea;
    }
    
    /**
     * Not populated by FAST service in Jan07.
     *
     * @param string $destinationServiceArea
     * @return RateReplyDetail
     */
    public function setDestinationServiceArea($destinationServiceArea)
    {
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    
    /**
     * Returns Not populated by FAST service in Jan07.
     *
     * @return string
     */
    public function getDestinationServiceArea()
    {
        return $this->DestinationServiceArea;
    }
    
    /**
     * Not populated by FAST service in Jan07.
     *
     * @param \FedEx\RateService\SimpleType\TransitTimeType|string $transitTime
     * @return RateReplyDetail
     */
    public function setTransitTime($transitTime)
    {
        $this->TransitTime = $transitTime;
        return $this;
    }
    
    /**
     * Returns Not populated by FAST service in Jan07.
     *
     * @return \FedEx\RateService\SimpleType\TransitTimeType|string
     */
    public function getTransitTime()
    {
        return $this->TransitTime;
    }
    
    /**
     * Maximum expected transit time
     *
     * @param \FedEx\RateService\SimpleType\TransitTimeType|string $maximumTransitTime
     * @return RateReplyDetail
     */
    public function setMaximumTransitTime($maximumTransitTime)
    {
        $this->MaximumTransitTime = $maximumTransitTime;
        return $this;
    }
    
    /**
     * Returns Maximum expected transit time
     *
     * @return \FedEx\RateService\SimpleType\TransitTimeType|string
     */
    public function getMaximumTransitTime()
    {
        return $this->MaximumTransitTime;
    }
    
    /**
     * Not populated by FAST service in Jan07. Actual signature option applied, to allow for cases in wihch the original value conflicted with other service features in the shipment.
     *
     * @param \FedEx\RateService\SimpleType\SignatureOptionType|string $signatureOption
     * @return RateReplyDetail
     */
    public function setSignatureOption($signatureOption)
    {
        $this->SignatureOption = $signatureOption;
        return $this;
    }
    
    /**
     * Returns Not populated by FAST service in Jan07. Actual signature option applied, to allow for cases in wihch the original value conflicted with other service features in the shipment.
     *
     * @return \FedEx\RateService\SimpleType\SignatureOptionType|string
     */
    public function getSignatureOption()
    {
        return $this->SignatureOption;
    }
    
    /**
     * Set ActualRateType
     *
     * @param \FedEx\RateService\SimpleType\ReturnedRateType|string $actualRateType
     * @return RateReplyDetail
     */
    public function setActualRateType($actualRateType)
    {
        $this->ActualRateType = $actualRateType;
        return $this;
    }
    
    /**
     * Returns Set ActualRateType
     *
     * @return \FedEx\RateService\SimpleType\ReturnedRateType|string
     */
    public function getActualRateType()
    {
        return $this->ActualRateType;
    }
    
    /**
     * Each element contains all rate data for a single rate type.
     *
     * @param RatedShipmentDetail[] $ratedShipmentDetails
     * @return RateReplyDetail
     */
    public function setRatedShipmentDetails(array $ratedShipmentDetails)
    {
        $this->RatedShipmentDetails = $ratedShipmentDetails;
        return $this;
    }
    
    /**
     * Returns Each element contains all rate data for a single rate type.
     *
     * @return RatedShipmentDetail[]
     */
    public function getRatedShipmentDetails()
    {
        return $this->RatedShipmentDetails;
    }
    

    
}