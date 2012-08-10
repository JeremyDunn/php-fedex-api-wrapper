<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class QualifiedTrackingNumber
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'QualifiedTrackingNumber';

    /**
     * FedEx assigned identifier for a package/shipment.
     *
     * @param string $trackingNumber
     * return QualifiedTrackingNumber
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * The date the package was shipped.
     *
     * @param date $shipDate
     * return QualifiedTrackingNumber
     */
    public function setShipDate($shipDate)
    {
        $this->ShipDate = $shipDate;
        return $this;
    }
    
    /**
     * If the account number used to ship the package is provided in the request the shipper and recipient information is included on the letter or fax.
     *
     * @param string $accountNumber
     * return QualifiedTrackingNumber
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * FedEx operating company that delivered the package.
     *
     * @param \FedEx\TrackService\SimpleType\CarrierCodeType|string $carrier
     * return QualifiedTrackingNumber
     */
    public function setCarrier($carrier)
    {
        $this->Carrier = $carrier;
        return $this;
    }
    
    /**
     * Only country is used for elimination of duplicate tracking numbers.
     *
     * @param Address $destination
     * return QualifiedTrackingNumber
     */
    public function setDestination(Address $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    

    
}