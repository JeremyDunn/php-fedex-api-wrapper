<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class QualifiedTrackingNumber
    extends AbstractComplexType
{
    protected $_name = 'QualifiedTrackingNumber';

    /**
     * FedEx assigned identifier for a package/shipment.
     *
     * @param string $TrackingNumber
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
     * @param date $ShipDate
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
     * @param string $AccountNumber
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
     * @param CarrierCodeType $Carrier
     * return QualifiedTrackingNumber
     */
    public function setCarrier(\FedEx\TrackService\SimpleType\CarrierCodeType $carrier)
    {
        $this->Carrier = $carrier;
        return $this;
    }
    
    /**
     * Only country is used for elimination of duplicate tracking numbers.
     *
     * @param Address $Destination
     * return QualifiedTrackingNumber
     */
    public function setDestination(Address $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    

    
}