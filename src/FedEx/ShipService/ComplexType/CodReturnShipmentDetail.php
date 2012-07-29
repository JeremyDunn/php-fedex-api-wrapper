<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CodReturnShipmentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CodReturnShipmentDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CodReturnShipmentDetail';

    /**
     * The COD amount (after any accumulations) that must be collected upon delivery of a package shipped using the COD special service.
     *
     * @param Money $collectionAmount
     * return CodReturnShipmentDetail
     */
    public function setCollectionAmount(Money $collectionAmount)
    {
        $this->CollectionAmount = $collectionAmount;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param Party $remitter
     * return CodReturnShipmentDetail
     */
    public function setRemitter(Party $remitter)
    {
        $this->Remitter = $remitter;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param Party $codRecipient
     * return CodReturnShipmentDetail
     */
    public function setCodRecipient(Party $codRecipient)
    {
        $this->CodRecipient = $codRecipient;
        return $this;
    }
    
    /**
     * Set ShipmentOperationalDetail
     *
     * @param ShipmentOperationalDetail $shipmentOperationalDetail
     * return CodReturnShipmentDetail
     */
    public function setShipmentOperationalDetail(ShipmentOperationalDetail $shipmentOperationalDetail)
    {
        $this->ShipmentOperationalDetail = $shipmentOperationalDetail;
        return $this;
    }
    
    /**
     * Specifies the tracking id for the payment on the COD return.
     *
     * @param TrackingId $trackingId
     * return CodReturnShipmentDetail
     */
    public function setTrackingId(TrackingId $trackingId)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    
    /**
     * Specifies the information for COD payment on an Express COD shipment. This information is not tied to any outbound package.
     *
     * @param PackageOperationalDetail $packageOperationalDetail
     * return CodReturnShipmentDetail
     */
    public function setPackageOperationalDetail(PackageOperationalDetail $packageOperationalDetail)
    {
        $this->PackageOperationalDetail = $packageOperationalDetail;
        return $this;
    }
    
    /**
     * The label image or printer commands to print the label.
     *
     * @param ShippingDocument $label
     * return CodReturnShipmentDetail
     */
    public function setLabel(ShippingDocument $label)
    {
        $this->Label = $label;
        return $this;
    }
    

    
}