<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ReturnAssociationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $TrackingNumber
 * @property string $ShipDate

 */
class ReturnAssociationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ReturnAssociationDetail';

    /**
     * Specifies the tracking number of the master associated with the return shipment.
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
     * Set ShipDate
     *
     * @param string $shipDate
     * @return $this
     */
    public function setShipDate($shipDate)
    {
        $this->values['ShipDate'] = $shipDate;
        return $this;
    }
}
