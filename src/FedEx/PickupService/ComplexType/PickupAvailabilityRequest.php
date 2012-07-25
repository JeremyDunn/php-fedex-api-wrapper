<?php
namespace FedEx\PickupService\ComplexType;

/**
 * The descriptive data to request availability of pickup.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupAvailabilityRequest
    extends AbstractComplexType
{
    protected $_name = 'PickupAvailabilityRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return PickupAvailabilityRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return PickupAvailabilityRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return PickupAvailabilityRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return PickupAvailabilityRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Identifies the account number for Freight Pickup Availability
     *
     * @param AssociatedAccount $AccountNumber
     * return PickupAvailabilityRequest
     */
    public function setAccountNumber(AssociatedAccount $accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * Descriptive data providing information about address to pickup from.
     *
     * @param Address $PickupAddress
     * return PickupAvailabilityRequest
     */
    public function setPickupAddress(Address $pickupAddress)
    {
        $this->PickupAddress = $pickupAddress;
        return $this;
    }
    
    /**
     * An array of PickupRequestType. If SAME_DAY is included, Options with ScheduleDay of SAME_DAY will be included in the reply.
								If FUTURE_DAY is included, Options with ScheduleDay of FUTURE_DAY will be included in the reply.
     *
     * @param array[PickupRequestType] $PickupRequestType
     * return PickupAvailabilityRequest
     */
    public function setPickupRequestType(array $pickupRequestType)
    {
        $this->PickupRequestType = $pickupRequestType;
        return $this;
    }
    
    /**
     * The dispatch date (in the local time zone) for the pickup whose availability is being requested.
     *
     * @param date $DispatchDate
     * return PickupAvailabilityRequest
     */
    public function setDispatchDate($dispatchDate)
    {
        $this->DispatchDate = $dispatchDate;
        return $this;
    }
    
    /**
     * Number of business days to consider when checking availability.
     *
     * @param positiveInteger $NumberOfBusinessDays
     * return PickupAvailabilityRequest
     */
    public function setNumberOfBusinessDays($numberOfBusinessDays)
    {
        $this->NumberOfBusinessDays = $numberOfBusinessDays;
        return $this;
    }
    
    /**
     * The time when the package will be ready to be picked up. The time is local to the pickup postal code, in 24-hour form (e.g. 13:00:00). It should not contain a TZD. If a TZD is included, it will be ignored
     *
     * @param time $PackageReadyTime
     * return PickupAvailabilityRequest
     */
    public function setPackageReadyTime(time $packageReadyTime)
    {
        $this->PackageReadyTime = $packageReadyTime;
        return $this;
    }
    
    /**
     * The lastest time at which the courier will be able to gain access to pick up the package(s). The time is local to the pickup postal code, in 24-hour form (e.g. 17:00:00). It should not contain a TZD. If a TZD is included, it will be ignored
     *
     * @param time $CustomerCloseTime
     * return PickupAvailabilityRequest
     */
    public function setCustomerCloseTime(time $customerCloseTime)
    {
        $this->CustomerCloseTime = $customerCloseTime;
        return $this;
    }
    
    /**
     * The FedEx carrier(s) for which availability is requested.
     *
     * @param array[CarrierCodeType] $Carriers
     * return PickupAvailabilityRequest
     */
    public function setCarriers(array $carriers)
    {
        $this->Carriers = $carriers;
        return $this;
    }
    
    /**
     * Descriptive information about the shipment.
     *
     * @param PickupShipmentAttributes $ShipmentAttributes
     * return PickupAvailabilityRequest
     */
    public function setShipmentAttributes(PickupShipmentAttributes $shipmentAttributes)
    {
        $this->ShipmentAttributes = $shipmentAttributes;
        return $this;
    }
    

    
}