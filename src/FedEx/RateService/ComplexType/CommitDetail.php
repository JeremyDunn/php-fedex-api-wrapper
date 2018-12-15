<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information about the transit time and delivery commitment date and time.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property string $CommodityName
 * @property \FedEx\RateService\SimpleType\ServiceType|string $ServiceType
 * @property ServiceDescription $ServiceDescription
 * @property \FedEx\RateService\SimpleType\ServiceOptionType|string[] $AppliedOptions
 * @property ServiceSubOptionDetail $AppliedSubOptions
 * @property SignatureOptionDetail $DerivedShipmentSignatureOption
 * @property SignatureOptionDetail[] $DerivedPackageSignatureOptions
 * @property CleansedAddressAndLocationDetail $DerivedOriginDetail
 * @property CleansedAddressAndLocationDetail $DerivedDestinationDetail
 * @property string $CommitTimestamp
 * @property \FedEx\RateService\SimpleType\DayOfWeekType|string $DayOfWeek
 * @property \FedEx\RateService\SimpleType\TransitTimeType|string $TransitTime
 * @property \FedEx\RateService\SimpleType\TransitTimeType|string $MaximumTransitTime
 * @property string $DestinationServiceArea
 * @property Address $BrokerAddress
 * @property string $BrokerLocationId
 * @property string $BrokerCommitTimestamp
 * @property \FedEx\RateService\SimpleType\DayOfWeekType|string $BrokerCommitDayOfWeek
 * @property int $BrokerToDestinationDays
 * @property string $ProofOfDeliveryDate
 * @property \FedEx\RateService\SimpleType\DayOfWeekType|string $ProofOfDeliveryDayOfWeek
 * @property Notification[] $CommitMessages
 * @property string[] $DeliveryMessages
 * @property DelayDetail[] $DelayDetails
 * @property \FedEx\RateService\SimpleType\InternationalDocumentContentType|string $DocumentContent
 * @property \FedEx\RateService\SimpleType\RequiredShippingDocumentType|string[] $RequiredDocuments
 * @property FreightCommitDetail $FreightCommitDetail

 */
class CommitDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CommitDetail';

    /**
     * The Commodity applicable to this commitment.
     *
     * @param string $commodityName
     * @return $this
     */
    public function setCommodityName($commodityName)
    {
        $this->values['CommodityName'] = $commodityName;
        return $this;
    }

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
     * Set DerivedShipmentSignatureOption
     *
     * @param SignatureOptionDetail $derivedShipmentSignatureOption
     * @return $this
     */
    public function setDerivedShipmentSignatureOption(SignatureOptionDetail $derivedShipmentSignatureOption)
    {
        $this->values['DerivedShipmentSignatureOption'] = $derivedShipmentSignatureOption;
        return $this;
    }

    /**
     * Set DerivedPackageSignatureOptions
     *
     * @param SignatureOptionDetail[] $derivedPackageSignatureOptions
     * @return $this
     */
    public function setDerivedPackageSignatureOptions(array $derivedPackageSignatureOptions)
    {
        $this->values['DerivedPackageSignatureOptions'] = $derivedPackageSignatureOptions;
        return $this;
    }

    /**
     * Set DerivedOriginDetail
     *
     * @param CleansedAddressAndLocationDetail $derivedOriginDetail
     * @return $this
     */
    public function setDerivedOriginDetail(CleansedAddressAndLocationDetail $derivedOriginDetail)
    {
        $this->values['DerivedOriginDetail'] = $derivedOriginDetail;
        return $this;
    }

    /**
     * Set DerivedDestinationDetail
     *
     * @param CleansedAddressAndLocationDetail $derivedDestinationDetail
     * @return $this
     */
    public function setDerivedDestinationDetail(CleansedAddressAndLocationDetail $derivedDestinationDetail)
    {
        $this->values['DerivedDestinationDetail'] = $derivedDestinationDetail;
        return $this;
    }

    /**
     * THe delivery commitment date/time. Express Only.
     *
     * @param string $commitTimestamp
     * @return $this
     */
    public function setCommitTimestamp($commitTimestamp)
    {
        $this->values['CommitTimestamp'] = $commitTimestamp;
        return $this;
    }

    /**
     * The delivery commitment day of the week.
     *
     * @param \FedEx\RateService\SimpleType\DayOfWeekType|string $dayOfWeek
     * @return $this
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->values['DayOfWeek'] = $dayOfWeek;
        return $this;
    }

    /**
     * The number of transit days; applies to Ground and LTL Freight; indicates minimum transit time for SmartPost.
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
     * Maximum number of transit days, for SmartPost shipments.
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
     * The service area code for the destination of this shipment. Express only.
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
     * The address of the broker to be used for this shipment.
     *
     * @param Address $brokerAddress
     * @return $this
     */
    public function setBrokerAddress(Address $brokerAddress)
    {
        $this->values['BrokerAddress'] = $brokerAddress;
        return $this;
    }

    /**
     * The FedEx location identifier for the broker.
     *
     * @param string $brokerLocationId
     * @return $this
     */
    public function setBrokerLocationId($brokerLocationId)
    {
        $this->values['BrokerLocationId'] = $brokerLocationId;
        return $this;
    }

    /**
     * The delivery commitment date/time the shipment will arrive at the border.
     *
     * @param string $brokerCommitTimestamp
     * @return $this
     */
    public function setBrokerCommitTimestamp($brokerCommitTimestamp)
    {
        $this->values['BrokerCommitTimestamp'] = $brokerCommitTimestamp;
        return $this;
    }

    /**
     * The delivery commitment day of the week the shipment will arrive at the border.
     *
     * @param \FedEx\RateService\SimpleType\DayOfWeekType|string $brokerCommitDayOfWeek
     * @return $this
     */
    public function setBrokerCommitDayOfWeek($brokerCommitDayOfWeek)
    {
        $this->values['BrokerCommitDayOfWeek'] = $brokerCommitDayOfWeek;
        return $this;
    }

    /**
     * The number of days it will take for the shipment to make it from broker to destination
     *
     * @param int $brokerToDestinationDays
     * @return $this
     */
    public function setBrokerToDestinationDays($brokerToDestinationDays)
    {
        $this->values['BrokerToDestinationDays'] = $brokerToDestinationDays;
        return $this;
    }

    /**
     * The delivery commitment date for shipment served by GSP (Global Service Provider)
     *
     * @param string $proofOfDeliveryDate
     * @return $this
     */
    public function setProofOfDeliveryDate($proofOfDeliveryDate)
    {
        $this->values['ProofOfDeliveryDate'] = $proofOfDeliveryDate;
        return $this;
    }

    /**
     * The delivery commitment day of the week for the shipment served by GSP (Global Service Provider)
     *
     * @param \FedEx\RateService\SimpleType\DayOfWeekType|string $proofOfDeliveryDayOfWeek
     * @return $this
     */
    public function setProofOfDeliveryDayOfWeek($proofOfDeliveryDayOfWeek)
    {
        $this->values['ProofOfDeliveryDayOfWeek'] = $proofOfDeliveryDayOfWeek;
        return $this;
    }

    /**
     * Messages concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be messages providing information about why a commitment could not be returned or a successful message such as "REQUEST COMPLETED"
     *
     * @param Notification[] $commitMessages
     * @return $this
     */
    public function setCommitMessages(array $commitMessages)
    {
        $this->values['CommitMessages'] = $commitMessages;
        return $this;
    }

    /**
     * Messages concerning the delivery commitment on an International commit quote such as "0:00 A.M. IF NO CUSTOMS DELAY"
     *
     * @param string $deliveryMessages
     * @return $this
     */
    public function setDeliveryMessages($deliveryMessages)
    {
        $this->values['DeliveryMessages'] = $deliveryMessages;
        return $this;
    }

    /**
     * Information about why a shipment delivery is delayed and at what level (country/service etc.).
     *
     * @param DelayDetail[] $delayDetails
     * @return $this
     */
    public function setDelayDetails(array $delayDetails)
    {
        $this->values['DelayDetails'] = $delayDetails;
        return $this;
    }

    /**
     * Set DocumentContent
     *
     * @param \FedEx\RateService\SimpleType\InternationalDocumentContentType|string $documentContent
     * @return $this
     */
    public function setDocumentContent($documentContent)
    {
        $this->values['DocumentContent'] = $documentContent;
        return $this;
    }

    /**
     * Required documentation for this shipment.
     *
     * @param \FedEx\RateService\SimpleType\RequiredShippingDocumentType[]|string[] $requiredDocuments
     * @return $this
     */
    public function setRequiredDocuments(array $requiredDocuments)
    {
        $this->values['RequiredDocuments'] = $requiredDocuments;
        return $this;
    }

    /**
     * Freight origin and destination city center information and total distance between origin and destination city centers.
     *
     * @param FreightCommitDetail $freightCommitDetail
     * @return $this
     */
    public function setFreightCommitDetail(FreightCommitDetail $freightCommitDetail)
    {
        $this->values['FreightCommitDetail'] = $freightCommitDetail;
        return $this;
    }
}
