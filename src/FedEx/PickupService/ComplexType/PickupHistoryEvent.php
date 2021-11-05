<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupHistoryEvent
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\PickupEventType|string $Event
 * @property \FedEx\PickupService\SimpleType\PickupExceptionType|string $Exception
 * @property string $EventTimestamp
 * @property string $DriverEmployeeId

 */
class PickupHistoryEvent extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupHistoryEvent';

    /**
     * Set Event
     *
     * @param \FedEx\PickupService\SimpleType\PickupEventType|string $event
     * @return $this
     */
    public function setEvent($event)
    {
        $this->values['Event'] = $event;
        return $this;
    }

    /**
     * Only populated if event was EXCEPTION.
     *
     * @param \FedEx\PickupService\SimpleType\PickupExceptionType|string $exception
     * @return $this
     */
    public function setException($exception)
    {
        $this->values['Exception'] = $exception;
        return $this;
    }

    /**
     * Date and time on when event occurred.
     *
     * @param string $eventTimestamp
     * @return $this
     */
    public function setEventTimestamp($eventTimestamp)
    {
        $this->values['EventTimestamp'] = $eventTimestamp;
        return $this;
    }

    /**
     * Employee Id of driver who picked up shipment
     *
     * @param string $driverEmployeeId
     * @return $this
     */
    public function setDriverEmployeeId($driverEmployeeId)
    {
        $this->values['DriverEmployeeId'] = $driverEmployeeId;
        return $this;
    }
}
