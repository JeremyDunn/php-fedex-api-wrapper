<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CodReturnShipmentDetail
    extends AbstractComplexType
{
    protected $_name = 'CodReturnShipmentDetail';

    /**
     * The COD amount (after any accumulations) that must be collected upon delivery of a package shipped using the COD special service.
     *
     * @param Money $CollectionAmount
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
     * @param Party $Remitter
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
     * @param Party $CodRecipient
     * return CodReturnShipmentDetail
     */
    public function setCodRecipient(Party $codRecipient)
    {
        $this->CodRecipient = $codRecipient;
        return $this;
    }
    
    /**
     * 
     *
     * @param ShipmentOperationalDetail $ShipmentOperationalDetail
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
     * @param TrackingId $TrackingId
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
     * @param PackageOperationalDetail $PackageOperationalDetail
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
     * @param ShippingDocument $Label
     * return CodReturnShipmentDetail
     */
    public function setLabel(ShippingDocument $label)
    {
        $this->Label = $label;
        return $this;
    }
    

    
}