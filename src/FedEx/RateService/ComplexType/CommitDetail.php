<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information about the transit time and delivery commitment date and time.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CommitDetail
    extends AbstractComplexType
{
    protected $_name = 'CommitDetail';

    /**
     * The Commodity applicable to this commitment.
     *
     * @param string $CommodityName
     * return CommitDetail
     */
    public function setCommodityName($commodityName)
    {
        $this->CommodityName = $commodityName;
        return $this;
    }
    
    /**
     * The FedEx service type applicable to this commitment.
     *
     * @param ServiceType $ServiceType
     * return CommitDetail
     */
    public function setServiceType(\FedEx\RateService\SimpleType\ServiceType $serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Shows the specific combination of service options combined with the service type that produced this committment in the set returned to the caller.
     *
     * @param array[ServiceOptionType] $AppliedOptions
     * return CommitDetail
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
     * return CommitDetail
     */
    public function setAppliedSubOptions(ServiceSubOptionDetail $appliedSubOptions)
    {
        $this->AppliedSubOptions = $appliedSubOptions;
        return $this;
    }
    
    /**
     * THe delivery commitment date/time. Express Only.
     *
     * @param dateTime $CommitTimestamp
     * return CommitDetail
     */
    public function setCommitTimestamp($commitTimestamp)
    {
        $this->CommitTimestamp = $commitTimestamp;
        return $this;
    }
    
    /**
     * The delivery commitment day of the week.
     *
     * @param DayOfWeekType $DayOfWeek
     * return CommitDetail
     */
    public function setDayOfWeek(\FedEx\RateService\SimpleType\DayOfWeekType $dayOfWeek)
    {
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    
    /**
     * The number of transit days; applies to Ground and LTL Freight; indicates minimum transit time for SmartPost.
     *
     * @param TransitTimeType $TransitTime
     * return CommitDetail
     */
    public function setTransitTime(\FedEx\RateService\SimpleType\TransitTimeType $transitTime)
    {
        $this->TransitTime = $transitTime;
        return $this;
    }
    
    /**
     * Maximum number of transit days, for SmartPost shipments.
     *
     * @param TransitTimeType $MaximumTransitTime
     * return CommitDetail
     */
    public function setMaximumTransitTime(\FedEx\RateService\SimpleType\TransitTimeType $maximumTransitTime)
    {
        $this->MaximumTransitTime = $maximumTransitTime;
        return $this;
    }
    
    /**
     * The service area code for the destination of this shipment. Express only.
     *
     * @param string $DestinationServiceArea
     * return CommitDetail
     */
    public function setDestinationServiceArea($destinationServiceArea)
    {
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    
    /**
     * The address of the broker to be used for this shipment.
     *
     * @param Address $BrokerAddress
     * return CommitDetail
     */
    public function setBrokerAddress(Address $brokerAddress)
    {
        $this->BrokerAddress = $brokerAddress;
        return $this;
    }
    
    /**
     * The FedEx location identifier for the broker.
     *
     * @param string $BrokerLocationId
     * return CommitDetail
     */
    public function setBrokerLocationId($brokerLocationId)
    {
        $this->BrokerLocationId = $brokerLocationId;
        return $this;
    }
    
    /**
     * The delivery commitment date/time the shipment will arrive at the border.
     *
     * @param dateTime $BrokerCommitTimestamp
     * return CommitDetail
     */
    public function setBrokerCommitTimestamp($brokerCommitTimestamp)
    {
        $this->BrokerCommitTimestamp = $brokerCommitTimestamp;
        return $this;
    }
    
    /**
     * The delivery commitment day of the week the shipment will arrive at the border.
     *
     * @param DayOfWeekType $BrokerCommitDayOfWeek
     * return CommitDetail
     */
    public function setBrokerCommitDayOfWeek(\FedEx\RateService\SimpleType\DayOfWeekType $brokerCommitDayOfWeek)
    {
        $this->BrokerCommitDayOfWeek = $brokerCommitDayOfWeek;
        return $this;
    }
    
    /**
     * The number of days it will take for the shipment to make it from broker to destination
     *
     * @param nonNegativeInteger $BrokerToDestinationDays
     * return CommitDetail
     */
    public function setBrokerToDestinationDays($brokerToDestinationDays)
    {
        $this->BrokerToDestinationDays = $brokerToDestinationDays;
        return $this;
    }
    
    /**
     * The delivery commitment date for shipment served by GSP (Global Service Provider)
     *
     * @param date $ProofOfDeliveryDate
     * return CommitDetail
     */
    public function setProofOfDeliveryDate($proofOfDeliveryDate)
    {
        $this->ProofOfDeliveryDate = $proofOfDeliveryDate;
        return $this;
    }
    
    /**
     * The delivery commitment day of the week for the shipment served by GSP (Global Service Provider)
     *
     * @param DayOfWeekType $ProofOfDeliveryDayOfWeek
     * return CommitDetail
     */
    public function setProofOfDeliveryDayOfWeek(\FedEx\RateService\SimpleType\DayOfWeekType $proofOfDeliveryDayOfWeek)
    {
        $this->ProofOfDeliveryDayOfWeek = $proofOfDeliveryDayOfWeek;
        return $this;
    }
    
    /**
     * Messages concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be messages providing information about why a commitment could not be returned or a successful message such as "REQUEST COMPLETED"
     *
     * @param array[Notification] $CommitMessages
     * return CommitDetail
     */
    public function setCommitMessages(array $commitMessages)
    {
        $this->CommitMessages = $commitMessages;
        return $this;
    }
    
    /**
     * Messages concerning the delivery commitment on an International commit quote such as "0:00 A.M. IF NO CUSTOMS DELAY"
     *
     * @param array[string] $DeliveryMessages
     * return CommitDetail
     */
    public function setDeliveryMessages(array $deliveryMessages)
    {
        $this->DeliveryMessages = $deliveryMessages;
        return $this;
    }
    
    /**
     * Information about why a shipment delivery is delayed and at what level (country/service etc.).
     *
     * @param array[DelayDetail] $DelayDetails
     * return CommitDetail
     */
    public function setDelayDetails(array $delayDetails)
    {
        $this->DelayDetails = $delayDetails;
        return $this;
    }
    
    /**
     * 
     *
     * @param InternationalDocumentContentType $DocumentContent
     * return CommitDetail
     */
    public function setDocumentContent(\FedEx\RateService\SimpleType\InternationalDocumentContentType $documentContent)
    {
        $this->DocumentContent = $documentContent;
        return $this;
    }
    
    /**
     * Required documentation for this shipment.
     *
     * @param array[RequiredShippingDocumentType] $RequiredDocuments
     * return CommitDetail
     */
    public function setRequiredDocuments(array $requiredDocuments)
    {
        $this->RequiredDocuments = $requiredDocuments;
        return $this;
    }
    
    /**
     * Freight origin and destination city center information and total distance between origin and destination city centers.
     *
     * @param FreightCommitDetail $FreightCommitDetail
     * return CommitDetail
     */
    public function setFreightCommitDetail(FreightCommitDetail $freightCommitDetail)
    {
        $this->FreightCommitDetail = $freightCommitDetail;
        return $this;
    }
    

    
}