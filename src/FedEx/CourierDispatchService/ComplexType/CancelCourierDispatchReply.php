<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data returned to a client in response to a cancel dispatch request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class CancelCourierDispatchReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CancelCourierDispatchReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param \FedEx\CourierDispatchService\SimpleType\NotificationSeverityType|string $highestSeverity
     * return CancelCourierDispatchReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param Notification[] $notifications
     * return CancelCourierDispatchReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data that governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * return CancelCourierDispatchReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * return CancelCourierDispatchReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Identifies a text message indicating the outcome of the cancel dispatch request.
     *
     * @param string $message
     * return CancelCourierDispatchReply
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    

    
}