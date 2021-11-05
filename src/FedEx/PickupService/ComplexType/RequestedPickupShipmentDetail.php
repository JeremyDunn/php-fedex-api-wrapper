<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RequestedPickupShipmentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property string $ServiceCode
 * @property string $ServiceType
 * @property string $PackagingType
 * @property PickupShipmentSpecialServicesRequested $ShipmentSpecialServices
 * @property Address $RecipientAddress
 * @property string $RecipientLocationId
 * @property RequestedPickupPackageDetail[] $PackageDetails

 */
class RequestedPickupShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RequestedPickupShipmentDetail';

    /**
     * FOR FEDEX INTERNAL USE ONLY: The service code will be provided for transportation network management.
     *
     * @param string $serviceCode
     * @return $this
     */
    public function setServiceCode($serviceCode)
    {
        $this->values['ServiceCode'] = $serviceCode;
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
     * Set PackagingType
     *
     * @param string $packagingType
     * @return $this
     */
    public function setPackagingType($packagingType)
    {
        $this->values['PackagingType'] = $packagingType;
        return $this;
    }

    /**
     * Set ShipmentSpecialServices
     *
     * @param PickupShipmentSpecialServicesRequested $shipmentSpecialServices
     * @return $this
     */
    public function setShipmentSpecialServices(PickupShipmentSpecialServicesRequested $shipmentSpecialServices)
    {
        $this->values['ShipmentSpecialServices'] = $shipmentSpecialServices;
        return $this;
    }

    /**
     * Set RecipientAddress
     *
     * @param Address $recipientAddress
     * @return $this
     */
    public function setRecipientAddress(Address $recipientAddress)
    {
        $this->values['RecipientAddress'] = $recipientAddress;
        return $this;
    }

    /**
     * Set RecipientLocationId
     *
     * @param string $recipientLocationId
     * @return $this
     */
    public function setRecipientLocationId($recipientLocationId)
    {
        $this->values['RecipientLocationId'] = $recipientLocationId;
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
