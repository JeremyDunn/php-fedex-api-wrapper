<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data to request availability of pickup.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class PickupAvailabilityRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PickupAvailabilityRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return PickupAvailabilityRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Returns The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @return WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    
    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * @return PickupAvailabilityRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns The descriptive data identifying the client submitting the transaction.
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * @return PickupAvailabilityRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * @return PickupAvailabilityRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Descriptive data providing information about address to pickup from.
     *
     * @param Address $pickupAddress
     * @return PickupAvailabilityRequest
     */
    public function setPickupAddress(Address $pickupAddress)
    {
        $this->PickupAddress = $pickupAddress;
        return $this;
    }
    
    /**
     * Returns Descriptive data providing information about address to pickup from.
     *
     * @return Address
     */
    public function getPickupAddress()
    {
        return $this->PickupAddress;
    }
    
    /**
     * An array of PickupRequestType. If SAME_DAY is included, Options with ScheduleDay of SAME_DAY will be included in the reply.
								If FUTURE_DAY is included, Options with ScheduleDay of FUTURE_DAY will be included in the reply.
     *
     * @param PickupRequestType[] $pickupRequestType
     * @return PickupAvailabilityRequest
     */
    public function setPickupRequestType(array $pickupRequestType)
    {
        $this->PickupRequestType = $pickupRequestType;
        return $this;
    }
    
    /**
     * Returns An array of PickupRequestType. If SAME_DAY is included, Options with ScheduleDay of SAME_DAY will be included in the reply.
								If FUTURE_DAY is included, Options with ScheduleDay of FUTURE_DAY will be included in the reply.
     *
     * @return PickupRequestType[]
     */
    public function getPickupRequestType()
    {
        return $this->PickupRequestType;
    }
    
    /**
     * The dispatch date (in the local time zone) for the pickup whose availability is being requested.
     *
     * @param date $dispatchDate
     * @return PickupAvailabilityRequest
     */
    public function setDispatchDate($dispatchDate)
    {
        $this->DispatchDate = $dispatchDate;
        return $this;
    }
    
    /**
     * Returns The dispatch date (in the local time zone) for the pickup whose availability is being requested.
     *
     * @return date
     */
    public function getDispatchDate()
    {
        return $this->DispatchDate;
    }
    
    /**
     * The time when the package will be ready to be picked up. The time is local to the pickup postal code, in 24-hour form (e.g. 13:00:00). It should not contain a TZD. If a TZD is included, it will be ignored
     *
     * @param time $packageReadyTime
     * @return PickupAvailabilityRequest
     */
    public function setPackageReadyTime(time $packageReadyTime)
    {
        $this->PackageReadyTime = $packageReadyTime;
        return $this;
    }
    
    /**
     * Returns The time when the package will be ready to be picked up. The time is local to the pickup postal code, in 24-hour form (e.g. 13:00:00). It should not contain a TZD. If a TZD is included, it will be ignored
     *
     * @return time
     */
    public function getPackageReadyTime()
    {
        return $this->PackageReadyTime;
    }
    
    /**
     * The lastest time at which the courier will be able to gain access to pick up the package(s). The time is local to the pickup postal code, in 24-hour form (e.g. 17:00:00). It should not contain a TZD. If a TZD is included, it will be ignored
     *
     * @param time $customerCloseTime
     * @return PickupAvailabilityRequest
     */
    public function setCustomerCloseTime(time $customerCloseTime)
    {
        $this->CustomerCloseTime = $customerCloseTime;
        return $this;
    }
    
    /**
     * Returns The lastest time at which the courier will be able to gain access to pick up the package(s). The time is local to the pickup postal code, in 24-hour form (e.g. 17:00:00). It should not contain a TZD. If a TZD is included, it will be ignored
     *
     * @return time
     */
    public function getCustomerCloseTime()
    {
        return $this->CustomerCloseTime;
    }
    
    /**
     * The FedEx carrier(s) for which availability is requested.
     *
     * @param CarrierCodeType[] $carriers
     * @return PickupAvailabilityRequest
     */
    public function setCarriers(array $carriers)
    {
        $this->Carriers = $carriers;
        return $this;
    }
    
    /**
     * Returns The FedEx carrier(s) for which availability is requested.
     *
     * @return CarrierCodeType[]
     */
    public function getCarriers()
    {
        return $this->Carriers;
    }
    
    /**
     * Descriptive information about the shipment.
     *
     * @param PickupShipmentAttributes $shipmentAttributes
     * @return PickupAvailabilityRequest
     */
    public function setShipmentAttributes(PickupShipmentAttributes $shipmentAttributes)
    {
        $this->ShipmentAttributes = $shipmentAttributes;
        return $this;
    }
    
    /**
     * Returns Descriptive information about the shipment.
     *
     * @return PickupShipmentAttributes
     */
    public function getShipmentAttributes()
    {
        return $this->ShipmentAttributes;
    }
    

    
}