<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UniqueTrackingNumber
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property string $TrackingNumber
 * @property string $TrackingNumberUniqueIdentifier
 * @property string $ShipDate

 */
class UniqueTrackingNumber extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UniqueTrackingNumber';

    /**
     * Set TrackingNumber
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
     * Set TrackingNumberUniqueIdentifier
     *
     * @param string $trackingNumberUniqueIdentifier
     * @return $this
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
    {
        $this->values['TrackingNumberUniqueIdentifier'] = $trackingNumberUniqueIdentifier;
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
