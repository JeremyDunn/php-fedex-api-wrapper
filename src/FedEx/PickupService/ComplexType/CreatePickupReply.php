<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CreatePickupReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $PickupConfirmationNumber
 * @property string $Location
 * @property string $MessageCode
 * @property string $Message
 * @property string $PRPControlNumber
 * @property string $LastAccessTime
 * @property CompletedFreightPickupDetail $CompletedFreightPickupDetail

 */
class CreatePickupReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CreatePickupReply';

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
     * Set PickupConfirmationNumber
     *
     * @param string $pickupConfirmationNumber
     * @return $this
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber)
    {
        $this->values['PickupConfirmationNumber'] = $pickupConfirmationNumber;
        return $this;
    }

    /**
     * Set Location
     *
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->values['Location'] = $location;
        return $this;
    }

    /**
     * Coded value supplied by dispatch system.
     *
     * @param string $messageCode
     * @return $this
     */
    public function setMessageCode($messageCode)
    {
        $this->values['MessageCode'] = $messageCode;
        return $this;
    }

    /**
     * Message supplied by dispatch system.
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->values['Message'] = $message;
        return $this;
    }

    /**
     * Package Return Program control number
     *
     * @param string $pRPControlNumber
     * @return $this
     */
    public function setPRPControlNumber($pRPControlNumber)
    {
        $this->values['PRPControlNumber'] = $pRPControlNumber;
        return $this;
    }

    /**
     * Used with "stay late" requests; postal-code specific.
     *
     * @param string $lastAccessTime
     * @return $this
     */
    public function setLastAccessTime($lastAccessTime)
    {
        $this->values['LastAccessTime'] = $lastAccessTime;
        return $this;
    }

    /**
     * Set CompletedFreightPickupDetail
     *
     * @param CompletedFreightPickupDetail $completedFreightPickupDetail
     * @return $this
     */
    public function setCompletedFreightPickupDetail(CompletedFreightPickupDetail $completedFreightPickupDetail)
    {
        $this->values['CompletedFreightPickupDetail'] = $completedFreightPickupDetail;
        return $this;
    }
}
