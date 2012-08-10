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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CommitDetail';

    /**
     * The Commodity applicable to this commitment.
     *
     * @param string $commodityName
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
     * @param \FedEx\RateService\SimpleType\ServiceType|string $serviceType
     * return CommitDetail
     */
    public function setServiceType($serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Shows the specific combination of service options combined with the service type that produced this committment in the set returned to the caller.
     *
     * @param ServiceOptionType[] $appliedOptions
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
     * @param ServiceSubOptionDetail $appliedSubOptions
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
     * @param dateTime $commitTimestamp
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
     * @param \FedEx\RateService\SimpleType\DayOfWeekType|string $dayOfWeek
     * return CommitDetail
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    
    /**
     * The number of transit days; applies to Ground and LTL Freight; indicates minimum transit time for SmartPost.
     *
     * @param \FedEx\RateService\SimpleType\TransitTimeType|string $transitTime
     * return CommitDetail
     */
    public function setTransitTime($transitTime)
    {
        $this->TransitTime = $transitTime;
        return $this;
    }
    
    /**
     * Maximum number of transit days, for SmartPost shipments.
     *
     * @param \FedEx\RateService\SimpleType\TransitTimeType|string $maximumTransitTime
     * return CommitDetail
     */
    public function setMaximumTransitTime($maximumTransitTime)
    {
        $this->MaximumTransitTime = $maximumTransitTime;
        return $this;
    }
    
    /**
     * The service area code for the destination of this shipment. Express only.
     *
     * @param string $destinationServiceArea
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
     * @param Address $brokerAddress
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
     * @param string $brokerLocationId
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
     * @param dateTime $brokerCommitTimestamp
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
     * @param \FedEx\RateService\SimpleType\DayOfWeekType|string $brokerCommitDayOfWeek
     * return CommitDetail
     */
    public function setBrokerCommitDayOfWeek($brokerCommitDayOfWeek)
    {
        $this->BrokerCommitDayOfWeek = $brokerCommitDayOfWeek;
        return $this;
    }
    
    /**
     * The number of days it will take for the shipment to make it from broker to destination
     *
     * @param nonNegativeInteger $brokerToDestinationDays
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
     * @param date $proofOfDeliveryDate
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
     * @param \FedEx\RateService\SimpleType\DayOfWeekType|string $proofOfDeliveryDayOfWeek
     * return CommitDetail
     */
    public function setProofOfDeliveryDayOfWeek($proofOfDeliveryDayOfWeek)
    {
        $this->ProofOfDeliveryDayOfWeek = $proofOfDeliveryDayOfWeek;
        return $this;
    }
    
    /**
     * Messages concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be messages providing information about why a commitment could not be returned or a successful message such as "REQUEST COMPLETED"
     *
     * @param Notification[] $commitMessages
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
     * @param string[] $deliveryMessages
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
     * @param DelayDetail[] $delayDetails
     * return CommitDetail
     */
    public function setDelayDetails(array $delayDetails)
    {
        $this->DelayDetails = $delayDetails;
        return $this;
    }
    
    /**
     * Set DocumentContent
     *
     * @param \FedEx\RateService\SimpleType\InternationalDocumentContentType|string $documentContent
     * return CommitDetail
     */
    public function setDocumentContent($documentContent)
    {
        $this->DocumentContent = $documentContent;
        return $this;
    }
    
    /**
     * Required documentation for this shipment.
     *
     * @param RequiredShippingDocumentType[] $requiredDocuments
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
     * @param FreightCommitDetail $freightCommitDetail
     * return CommitDetail
     */
    public function setFreightCommitDetail(FreightCommitDetail $freightCommitDetail)
    {
        $this->FreightCommitDetail = $freightCommitDetail;
        return $this;
    }
    

    
}