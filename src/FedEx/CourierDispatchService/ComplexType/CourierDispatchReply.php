<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data returned to a client in response to a courier dispatch (i.e. package pickup) request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 *
 * @property \FedEx\CourierDispatchService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $DispatchConfirmationNumber
 * @property string $Location
 * @property string $MessageCode
 * @property string $Message
 * @property string $PRPControlNumber

 */
class CourierDispatchReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CourierDispatchReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\NotificationSeverityType|string $highestSeverity
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
     * Identifies the confirmation number assigned by FedEx for the request.
     *
     * @param string $dispatchConfirmationNumber
     * @return $this
     */
    public function setDispatchConfirmationNumber($dispatchConfirmationNumber)
    {
        $this->values['DispatchConfirmationNumber'] = $dispatchConfirmationNumber;
        return $this;
    }

    /**
     * Identifies the FedEx Location identifier responsible for dispatching the courier to pickup the package.
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
     * Identifies the FedEx system code associated with the message text in the reply.
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
     * Identifies the message text from the FedEx system regarding whether or not the pickup request was successfully scheduled or not.
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
     * Identifies the Package Return Program control number.
     *
     * @param string $pRPControlNumber
     * @return $this
     */
    public function setPRPControlNumber($pRPControlNumber)
    {
        $this->values['PRPControlNumber'] = $pRPControlNumber;
        return $this;
    }
}
