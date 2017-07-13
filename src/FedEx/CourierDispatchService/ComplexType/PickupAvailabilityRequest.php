<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data to request availability of pickup.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property Address $PickupAddress
 * @property \FedEx\CourierDispatchService\SimpleType\PickupRequestType|string[] $PickupRequestType
 * @property string $DispatchDate
 * @property string $PackageReadyTime
 * @property string $CustomerCloseTime
 * @property \FedEx\CourierDispatchService\SimpleType\CarrierCodeType|string[] $Carriers
 * @property PickupShipmentAttributes $ShipmentAttributes

 */
class PickupAvailabilityRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupAvailabilityRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return $this
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->values['WebAuthenticationDetail'] = $webAuthenticationDetail;
        return $this;
    }

    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * @return $this
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->values['ClientDetail'] = $clientDetail;
        return $this;
    }

    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * @return $this
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->values['TransactionDetail'] = $transactionDetail;
        return $this;
    }

    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * @return $this
     */
    public function setVersion(VersionId $version)
    {
        $this->values['Version'] = $version;
        return $this;
    }

    /**
     * Descriptive data providing information about address to pickup from.
     *
     * @param Address $pickupAddress
     * @return $this
     */
    public function setPickupAddress(Address $pickupAddress)
    {
        $this->values['PickupAddress'] = $pickupAddress;
        return $this;
    }

    /**
     * An array of PickupRequestType. If SAME_DAY is included, Options with ScheduleDay of SAME_DAY will be included in the reply.
If FUTURE_DAY is included, Options with ScheduleDay of FUTURE_DAY will be included in the reply.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\PickupRequestType[]|string[] $pickupRequestType
     * @return $this
     */
    public function setPickupRequestType(array $pickupRequestType)
    {
        $this->values['PickupRequestType'] = $pickupRequestType;
        return $this;
    }

    /**
     * The dispatch date (in the local time zone) for the pickup whose availability is being requested.
     *
     * @param string $dispatchDate
     * @return $this
     */
    public function setDispatchDate($dispatchDate)
    {
        $this->values['DispatchDate'] = $dispatchDate;
        return $this;
    }

    /**
     * The time when the package will be ready to be picked up. The time is local to the pickup postal code, in 24-hour form (e.g. 13:00:00). It should not contain a TZD. If a TZD is included, it will be ignored
     *
     * @param string $packageReadyTime
     * @return $this
     */
    public function setPackageReadyTime($packageReadyTime)
    {
        $this->values['PackageReadyTime'] = $packageReadyTime;
        return $this;
    }

    /**
     * The lastest time at which the courier will be able to gain access to pick up the package(s). The time is local to the pickup postal code, in 24-hour form (e.g. 17:00:00). It should not contain a TZD. If a TZD is included, it will be ignored
     *
     * @param string $customerCloseTime
     * @return $this
     */
    public function setCustomerCloseTime($customerCloseTime)
    {
        $this->values['CustomerCloseTime'] = $customerCloseTime;
        return $this;
    }

    /**
     * The FedEx carrier(s) for which availability is requested.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\CarrierCodeType[]|string[] $carriers
     * @return $this
     */
    public function setCarriers(array $carriers)
    {
        $this->values['Carriers'] = $carriers;
        return $this;
    }

    /**
     * Descriptive information about the shipment.
     *
     * @param PickupShipmentAttributes $shipmentAttributes
     * @return $this
     */
    public function setShipmentAttributes(PickupShipmentAttributes $shipmentAttributes)
    {
        $this->values['ShipmentAttributes'] = $shipmentAttributes;
        return $this;
    }
}
