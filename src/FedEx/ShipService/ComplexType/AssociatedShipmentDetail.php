<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AssociatedShipmentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class AssociatedShipmentDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AssociatedShipmentDetail';

    /**
     * Set Type
     *
     * @param \FedEx\ShipService\SimpleType\AssociatedShipmentType|string $type
     * @return AssociatedShipmentDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\ShipService\SimpleType\AssociatedShipmentType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Set Sender
     *
     * @param Party $sender
     * @return AssociatedShipmentDetail
     */
    public function setSender(Party $sender)
    {
        $this->Sender = $sender;
        return $this;
    }
    
    /**
     * Returns Set Sender
     *
     * @return Party
     */
    public function getSender()
    {
        return $this->Sender;
    }
    
    /**
     * Set Recipient
     *
     * @param Party $recipient
     * @return AssociatedShipmentDetail
     */
    public function setRecipient(Party $recipient)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    
    /**
     * Returns Set Recipient
     *
     * @return Party
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    
    /**
     * Set ServiceType
     *
     * @param \FedEx\ShipService\SimpleType\ServiceType|string $serviceType
     * @return AssociatedShipmentDetail
     */
    public function setServiceType($serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Returns Set ServiceType
     *
     * @return \FedEx\ShipService\SimpleType\ServiceType|string
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    
    /**
     * Set PackagingType
     *
     * @param \FedEx\ShipService\SimpleType\PackagingType|string $packagingType
     * @return AssociatedShipmentDetail
     */
    public function setPackagingType($packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * Returns Set PackagingType
     *
     * @return \FedEx\ShipService\SimpleType\PackagingType|string
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }
    
    /**
     * Specifies the tracking id for the payment on the return.
     *
     * @param TrackingId $trackingId
     * @return AssociatedShipmentDetail
     */
    public function setTrackingId(TrackingId $trackingId)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    
    /**
     * Returns Specifies the tracking id for the payment on the return.
     *
     * @return TrackingId
     */
    public function getTrackingId()
    {
        return $this->TrackingId;
    }
    
    /**
     * Specifies additional customer reference data about the associated shipment.
     *
     * @param CustomerReference[] $customerReferences
     * @return AssociatedShipmentDetail
     */
    public function setCustomerReferences(array $customerReferences)
    {
        $this->CustomerReferences = $customerReferences;
        return $this;
    }
    
    /**
     * Returns Specifies additional customer reference data about the associated shipment.
     *
     * @return CustomerReference[]
     */
    public function getCustomerReferences()
    {
        return $this->CustomerReferences;
    }
    
    /**
     * Specifies shipment level operational information.
     *
     * @param ShipmentOperationalDetail $shipmentOperationalDetail
     * @return AssociatedShipmentDetail
     */
    public function setShipmentOperationalDetail(ShipmentOperationalDetail $shipmentOperationalDetail)
    {
        $this->ShipmentOperationalDetail = $shipmentOperationalDetail;
        return $this;
    }
    
    /**
     * Returns Specifies shipment level operational information.
     *
     * @return ShipmentOperationalDetail
     */
    public function getShipmentOperationalDetail()
    {
        return $this->ShipmentOperationalDetail;
    }
    
    /**
     * Specifies package level operational information on the associated shipment. This information is not tied to an individual outbound package.
     *
     * @param PackageOperationalDetail $packageOperationalDetail
     * @return AssociatedShipmentDetail
     */
    public function setPackageOperationalDetail(PackageOperationalDetail $packageOperationalDetail)
    {
        $this->PackageOperationalDetail = $packageOperationalDetail;
        return $this;
    }
    
    /**
     * Returns Specifies package level operational information on the associated shipment. This information is not tied to an individual outbound package.
     *
     * @return PackageOperationalDetail
     */
    public function getPackageOperationalDetail()
    {
        return $this->PackageOperationalDetail;
    }
    
    /**
     * Set Label
     *
     * @param ShippingDocument $label
     * @return AssociatedShipmentDetail
     */
    public function setLabel(ShippingDocument $label)
    {
        $this->Label = $label;
        return $this;
    }
    
    /**
     * Returns Set Label
     *
     * @return ShippingDocument
     */
    public function getLabel()
    {
        return $this->Label;
    }
    

    
}