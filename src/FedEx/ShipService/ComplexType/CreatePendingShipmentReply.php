<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Reply to the Close Request transaction. The Close Reply bring back the ASCII data buffer which will be used to print the Close Manifest. The Manifest is essential at the time of pickup.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CreatePendingShipmentReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CreatePendingShipmentReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param \FedEx\ShipService\SimpleType\NotificationSeverityType|string $highestSeverity
     * return CreatePendingShipmentReply
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
     * return CreatePendingShipmentReply
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
     * return CreatePendingShipmentReply
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
     * return CreatePendingShipmentReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * The reply payload. All of the returned information about this shipment/package.
     *
     * @param CompletedShipmentDetail $completedShipmentDetail
     * return CreatePendingShipmentReply
     */
    public function setCompletedShipmentDetail(CompletedShipmentDetail $completedShipmentDetail)
    {
        $this->CompletedShipmentDetail = $completedShipmentDetail;
        return $this;
    }
    

    
}