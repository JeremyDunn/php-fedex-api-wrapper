<?php
namespace FedEx\ReturnTagService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx Express Tag Availability reply.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Return Tag Service
 *
 * @property \FedEx\ReturnTagService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $AccessTime
 * @property string $ReadyTime
 * @property \FedEx\ReturnTagService\SimpleType\ExpressTagAvailabilityType|string $Availability

 */
class ExpressTagAvailabilityReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ExpressTagAvailabilityReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param \FedEx\ReturnTagService\SimpleType\NotificationSeverityType|string $highestSeverity
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
     * Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
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
     * This is the minimum time window that must be allocated for the FedEx courier to make the pickup. This is a length of time. The difference between the Business close time, (or the local Cutoff time if it is earlier than  the Business Close time), and the Ready Time must be equal to or exceed the access time.
     *
     * @param string $accessTime
     * @return $this
     */
    public function setAccessTime($accessTime)
    {
        $this->values['AccessTime'] = $accessTime;
        return $this;
    }

    /**
     * Latest time a FedEx courier will be available to pick up the package from the Sender.
     *
     * @param string $readyTime
     * @return $this
     */
    public function setReadyTime($readyTime)
    {
        $this->values['ReadyTime'] = $readyTime;
        return $this;
    }

    /**
     * Indicates the Express Tag Service availability at the sender postal code indicated in the request.
     *
     * @param \FedEx\ReturnTagService\SimpleType\ExpressTagAvailabilityType|string $availability
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->values['Availability'] = $availability;
        return $this;
    }
}
