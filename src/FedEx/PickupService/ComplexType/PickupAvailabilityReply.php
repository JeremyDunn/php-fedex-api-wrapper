<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupAvailabilityReply
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
 * @property string $OpenTime
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
     * Set HighestSeverity
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
     * Set Notifications
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
     * Set TransactionDetail
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
     * Set Version
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
     * Set RequestTimestamp
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
     * Set Options
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
     * Set OpenTime
     *
     * @param string $openTime
     * @return $this
     */
    public function setOpenTime($openTime)
    {
        $this->values['OpenTime'] = $openTime;
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
