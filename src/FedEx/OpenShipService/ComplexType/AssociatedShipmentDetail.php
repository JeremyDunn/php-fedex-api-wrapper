<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AssociatedShipmentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\AssociatedShipmentType|string $Type
 * @property Party $Sender
 * @property Party $Recipient
 * @property \FedEx\OpenShipService\SimpleType\ServiceType|string $ServiceType
 * @property \FedEx\OpenShipService\SimpleType\PackagingType|string $PackagingType
 * @property TrackingId $TrackingId
 * @property CustomerReference[] $CustomerReferences
 * @property ShipmentOperationalDetail $ShipmentOperationalDetail
 * @property PackageOperationalDetail $PackageOperationalDetail
 * @property ShippingDocument $Label

 */
class AssociatedShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AssociatedShipmentDetail';

    /**
     * Set Type
     *
     * @param \FedEx\OpenShipService\SimpleType\AssociatedShipmentType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set Sender
     *
     * @param Party $sender
     * @return $this
     */
    public function setSender(Party $sender)
    {
        $this->values['Sender'] = $sender;
        return $this;
    }

    /**
     * Set Recipient
     *
     * @param Party $recipient
     * @return $this
     */
    public function setRecipient(Party $recipient)
    {
        $this->values['Recipient'] = $recipient;
        return $this;
    }

    /**
     * Set ServiceType
     *
     * @param \FedEx\OpenShipService\SimpleType\ServiceType|string $serviceType
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
     * @param \FedEx\OpenShipService\SimpleType\PackagingType|string $packagingType
     * @return $this
     */
    public function setPackagingType($packagingType)
    {
        $this->values['PackagingType'] = $packagingType;
        return $this;
    }

    /**
     * Specifies the tracking id for the payment on the return.
     *
     * @param TrackingId $trackingId
     * @return $this
     */
    public function setTrackingId(TrackingId $trackingId)
    {
        $this->values['TrackingId'] = $trackingId;
        return $this;
    }

    /**
     * Specifies additional customer reference data about the associated shipment.
     *
     * @param CustomerReference[] $customerReferences
     * @return $this
     */
    public function setCustomerReferences(array $customerReferences)
    {
        $this->values['CustomerReferences'] = $customerReferences;
        return $this;
    }

    /**
     * Specifies shipment level operational information.
     *
     * @param ShipmentOperationalDetail $shipmentOperationalDetail
     * @return $this
     */
    public function setShipmentOperationalDetail(ShipmentOperationalDetail $shipmentOperationalDetail)
    {
        $this->values['ShipmentOperationalDetail'] = $shipmentOperationalDetail;
        return $this;
    }

    /**
     * Specifies package level operational information on the associated shipment. This information is not tied to an individual outbound package.
     *
     * @param PackageOperationalDetail $packageOperationalDetail
     * @return $this
     */
    public function setPackageOperationalDetail(PackageOperationalDetail $packageOperationalDetail)
    {
        $this->values['PackageOperationalDetail'] = $packageOperationalDetail;
        return $this;
    }

    /**
     * Set Label
     *
     * @param ShippingDocument $label
     * @return $this
     */
    public function setLabel(ShippingDocument $label)
    {
        $this->values['Label'] = $label;
        return $this;
    }
}
