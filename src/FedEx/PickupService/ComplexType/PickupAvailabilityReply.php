<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data returned to a client in response to a cancel dispatch request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $RequestTimestamp
 * @property PickupScheduleOption[] $Options
 * @property \FedEx\PickupService\SimpleType\CloseTimeType|string $CloseTimeType
 * @property string $CloseTime
 * @property string $LocalTime

 */
class PickupAvailabilityReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupAvailabilityReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param \FedEx\PickupService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return $this
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->values['HighestSeverity'] = $highestSeverity;
        return $this;
    }

    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param Notification[] $notifications
     * @return $this
     */
    public function setNotifications(array $notifications)
    {
        $this->values['Notifications'] = $notifications;
        return $this;
    }

    /**
     * Descriptive data that governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * @return $this
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->values['TransactionDetail'] = $transactionDetail;
        return $this;
    }

    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * @return $this
     */
    public function setVersion(VersionId $version)
    {
        $this->values['Version'] = $version;
        return $this;
    }

    /**
     * the point in time when the request was processed
     *
     * @param string $requestTimestamp
     * @return $this
     */
    public function setRequestTimestamp($requestTimestamp)
    {
        $this->values['RequestTimestamp'] = $requestTimestamp;
        return $this;
    }

    /**
     * Identifies the options for picking up the shipment.
     *
     * @param PickupScheduleOption[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }

    /**
     * Identifies whether the close time is specified by the customer or is the default time.
     *
     * @param \FedEx\PickupService\SimpleType\CloseTimeType|string $closeTimeType
     * @return $this
     */
    public function setCloseTimeType($closeTimeType)
    {
        $this->values['CloseTimeType'] = $closeTimeType;
        return $this;
    }

    /**
     * Close time corresponding to the above specified type
     *
     * @param string $closeTime
     * @return $this
     */
    public function setCloseTime($closeTime)
    {
        $this->values['CloseTime'] = $closeTime;
        return $this;
    }

    /**
     * Local time of the service center that will service the pickup
     *
     * @param string $localTime
     * @return $this
     */
    public function setLocalTime($localTime)
    {
        $this->values['LocalTime'] = $localTime;
        return $this;
    }
}
