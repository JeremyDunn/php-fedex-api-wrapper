<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentEventNotificationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\ShipmentNotificationAggregationType|string $AggregationType
 * @property string $PersonalMessage
 * @property ShipmentEventNotificationSpecification[] $EventNotifications

 */
class ShipmentEventNotificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentEventNotificationDetail';

    /**
     * Set AggregationType
     *
     * @param \FedEx\PickupService\SimpleType\ShipmentNotificationAggregationType|string $aggregationType
     * @return $this
     */
    public function setAggregationType($aggregationType)
    {
        $this->values['AggregationType'] = $aggregationType;
        return $this;
    }

    /**
     * Set PersonalMessage
     *
     * @param string $personalMessage
     * @return $this
     */
    public function setPersonalMessage($personalMessage)
    {
        $this->values['PersonalMessage'] = $personalMessage;
        return $this;
    }

    /**
     * Set EventNotifications
     *
     * @param ShipmentEventNotificationSpecification[] $eventNotifications
     * @return $this
     */
    public function setEventNotifications(array $eventNotifications)
    {
        $this->values['EventNotifications'] = $eventNotifications;
        return $this;
    }
}
