<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $TrackingNumber
 * @property string $ShipDate
 * @property string $AccountNumber
 * @property \FedEx\TrackService\SimpleType\CarrierCodeType|string $Carrier
 * @property Address $Destination

 */
class QualifiedTrackingNumber extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'QualifiedTrackingNumber';

    /**
     * FedEx assigned identifier for a package/shipment.
     *
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['TrackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * The date the package was shipped.
     *
     * @param string $shipDate
     * @return $this
     */
    public function setShipDate($shipDate)
    {
        $this->values['ShipDate'] = $shipDate;
        return $this;
    }

    /**
     * If the account number used to ship the package is provided in the request the shipper and recipient information is included on the letter or fax.
     *
     * @param string $accountNumber
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->values['AccountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * FedEx operating company that delivered the package.
     *
     * @param \FedEx\TrackService\SimpleType\CarrierCodeType|string $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->values['Carrier'] = $carrier;
        return $this;
    }

    /**
     * Only country is used for elimination of duplicate tracking numbers.
     *
     * @param Address $destination
     * @return $this
     */
    public function setDestination(Address $destination)
    {
        $this->values['Destination'] = $destination;
        return $this;
    }
}
