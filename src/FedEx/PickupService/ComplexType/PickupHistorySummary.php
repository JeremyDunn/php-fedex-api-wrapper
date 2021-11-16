<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupHistorySummary
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property Address $Address
 * @property string $CompanyName
 * @property string $ReadyTimestamp
 * @property string $CompletionTimestamp
 * @property string $CloseTime
 * @property string $CallProcessedTimestamp
 * @property AssociatedAccount[] $AssociatedAccountNumbers
 * @property string $PickupConfirmationNumber
 * @property string $StandingInstructionId
 * @property string $Location
 * @property \FedEx\PickupService\SimpleType\PickupEventType|string $LatestEventType
 * @property \FedEx\PickupService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property string $ServiceType
 * @property boolean $IsExpressFreight
 * @property \FedEx\PickupService\SimpleType\PickupType|string $PickupType
 * @property \FedEx\PickupService\SimpleType\CountryRelationshipType|string $CountryRelationship
 * @property Contact $Contact
 * @property string $UserId
 * @property string $InternalSystemId
 * @property PickupHistoryServiceSummary[] $ServiceSummaries
 * @property \FedEx\PickupService\SimpleType\PickupStatusType|string $Status

 */
class PickupHistorySummary extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupHistorySummary';

    /**
     * Set Address
     *
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->values['Address'] = $address;
        return $this;
    }

    /**
     * Identifies the shipper's company from which the shipment was picked up
     *
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->values['CompanyName'] = $companyName;
        return $this;
    }

    /**
     * Set ReadyTimestamp
     *
     * @param string $readyTimestamp
     * @return $this
     */
    public function setReadyTimestamp($readyTimestamp)
    {
        $this->values['ReadyTimestamp'] = $readyTimestamp;
        return $this;
    }

    /**
     * Set CompletionTimestamp
     *
     * @param string $completionTimestamp
     * @return $this
     */
    public function setCompletionTimestamp($completionTimestamp)
    {
        $this->values['CompletionTimestamp'] = $completionTimestamp;
        return $this;
    }

    /**
     * Set CloseTime
     *
     * @param string $closeTime
     * @return $this
     */
    public function setCloseTime($closeTime)
    {
        $this->values['CloseTime'] = $closeTime;
        return $this;
    }

    /**
     * Specifies the time when a customer service representative assisted a customer.
     *
     * @param string $callProcessedTimestamp
     * @return $this
     */
    public function setCallProcessedTimestamp($callProcessedTimestamp)
    {
        $this->values['CallProcessedTimestamp'] = $callProcessedTimestamp;
        return $this;
    }

    /**
     * Set AssociatedAccountNumbers
     *
     * @param AssociatedAccount[] $associatedAccountNumbers
     * @return $this
     */
    public function setAssociatedAccountNumbers(array $associatedAccountNumbers)
    {
        $this->values['AssociatedAccountNumbers'] = $associatedAccountNumbers;
        return $this;
    }

    /**
     * Set PickupConfirmationNumber
     *
     * @param string $pickupConfirmationNumber
     * @return $this
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber)
    {
        $this->values['PickupConfirmationNumber'] = $pickupConfirmationNumber;
        return $this;
    }

    /**
     * Set StandingInstructionId
     *
     * @param string $standingInstructionId
     * @return $this
     */
    public function setStandingInstructionId($standingInstructionId)
    {
        $this->values['StandingInstructionId'] = $standingInstructionId;
        return $this;
    }

    /**
     * Set Location
     *
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->values['Location'] = $location;
        return $this;
    }

    /**
     * Set LatestEventType
     *
     * @param \FedEx\PickupService\SimpleType\PickupEventType|string $latestEventType
     * @return $this
     */
    public function setLatestEventType($latestEventType)
    {
        $this->values['LatestEventType'] = $latestEventType;
        return $this;
    }

    /**
     * Set CarrierCode
     *
     * @param \FedEx\PickupService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Set ServiceType
     *
     * @param string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['ServiceType'] = $serviceType;
        return $this;
    }

    /**
     * Set IsExpressFreight
     *
     * @param boolean $isExpressFreight
     * @return $this
     */
    public function setIsExpressFreight($isExpressFreight)
    {
        $this->values['IsExpressFreight'] = $isExpressFreight;
        return $this;
    }

    /**
     * Set PickupType
     *
     * @param \FedEx\PickupService\SimpleType\PickupType|string $pickupType
     * @return $this
     */
    public function setPickupType($pickupType)
    {
        $this->values['PickupType'] = $pickupType;
        return $this;
    }

    /**
     * Describes the country relationship (domestic and/or international) among the shipments being picked up.
     *
     * @param \FedEx\PickupService\SimpleType\CountryRelationshipType|string $countryRelationship
     * @return $this
     */
    public function setCountryRelationship($countryRelationship)
    {
        $this->values['CountryRelationship'] = $countryRelationship;
        return $this;
    }

    /**
     * Set Contact
     *
     * @param Contact $contact
     * @return $this
     */
    public function setContact(Contact $contact)
    {
        $this->values['Contact'] = $contact;
        return $this;
    }

    /**
     * Set UserId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->values['UserId'] = $userId;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY. FedEx internal system identifier.
     *
     * @param string $internalSystemId
     * @return $this
     */
    public function setInternalSystemId($internalSystemId)
    {
        $this->values['InternalSystemId'] = $internalSystemId;
        return $this;
    }

    /**
     * Set ServiceSummaries
     *
     * @param PickupHistoryServiceSummary[] $serviceSummaries
     * @return $this
     */
    public function setServiceSummaries(array $serviceSummaries)
    {
        $this->values['ServiceSummaries'] = $serviceSummaries;
        return $this;
    }

    /**
     * The status of the requested pickup.
     *
     * @param \FedEx\PickupService\SimpleType\PickupStatusType|string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->values['Status'] = $status;
        return $this;
    }
}
