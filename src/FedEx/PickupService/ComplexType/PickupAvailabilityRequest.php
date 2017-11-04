<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupAvailabilityRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property \FedEx\PickupService\SimpleType\PickupType|string $PickupType
 * @property AssociatedAccount $AccountNumber
 * @property Address $PickupAddress
 * @property \FedEx\PickupService\SimpleType\PickupRequestType|string[] $PickupRequestType
 * @property string $DispatchDate
 * @property int $NumberOfBusinessDays
 * @property string $PackageReadyTime
 * @property string $CustomerCloseTime
 * @property \FedEx\PickupService\SimpleType\CarrierCodeType|string[] $Carriers
 * @property PickupShipmentAttributes $ShipmentAttributes
 * @property RequestedPickupPackageDetail[] $PackageDetails

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
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
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
     * Set ClientDetail
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
     * Set TransactionDetail
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
     * Set Version
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
     * Identifies the account number for Freight Pickup Availability
     *
     * @param AssociatedAccount $accountNumber
     * @return $this
     */
    public function setAccountNumber(AssociatedAccount $accountNumber)
    {
        $this->values['AccountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Set PickupAddress
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
     * Set PickupRequestType
     *
     * @param \FedEx\PickupService\SimpleType\PickupRequestType[]|string[] $pickupRequestType
     * @return $this
     */
    public function setPickupRequestType(array $pickupRequestType)
    {
        $this->values['PickupRequestType'] = $pickupRequestType;
        return $this;
    }

    /**
     * Set DispatchDate
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
     * Number of business days to consider when checking availability.
     *
     * @param int $numberOfBusinessDays
     * @return $this
     */
    public function setNumberOfBusinessDays($numberOfBusinessDays)
    {
        $this->values['NumberOfBusinessDays'] = $numberOfBusinessDays;
        return $this;
    }

    /**
     * Set PackageReadyTime
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
     * Set CustomerCloseTime
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
     * Set Carriers
     *
     * @param \FedEx\PickupService\SimpleType\CarrierCodeType[]|string[] $carriers
     * @return $this
     */
    public function setCarriers(array $carriers)
    {
        $this->values['Carriers'] = $carriers;
        return $this;
    }

    /**
     * Set ShipmentAttributes
     *
     * @param PickupShipmentAttributes $shipmentAttributes
     * @return $this
     */
    public function setShipmentAttributes(PickupShipmentAttributes $shipmentAttributes)
    {
        $this->values['ShipmentAttributes'] = $shipmentAttributes;
        return $this;
    }

    /**
     * Set PackageDetails
     *
     * @param RequestedPickupPackageDetail[] $packageDetails
     * @return $this
     */
    public function setPackageDetails(array $packageDetails)
    {
        $this->values['PackageDetails'] = $packageDetails;
        return $this;
    }
}
