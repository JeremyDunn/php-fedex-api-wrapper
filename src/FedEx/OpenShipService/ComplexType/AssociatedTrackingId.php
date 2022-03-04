<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies a relationship from one tracked entity to another.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\AssociatedTrackingIdType|string $Type
 * @property TrackingId $TrackingId

 */
class AssociatedTrackingId extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AssociatedTrackingId';

    /**
     * Specifies the relationship/reason for the other tracking ID.
     *
     * @param \FedEx\OpenShipService\SimpleType\AssociatedTrackingIdType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Identifies the other entity.
     *
     * @param TrackingId $trackingId
     * @return $this
     */
    public function setTrackingId(TrackingId $trackingId)
    {
        $this->values['TrackingId'] = $trackingId;
        return $this;
    }
}
