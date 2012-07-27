<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ProcessShipmentReply
    extends AbstractComplexType
{
    protected $_name = 'ProcessShipmentReply';

    /**
     * This indicates the highest level of severity of all the notifications returned in this reply
     *
     * @param NotificationSeverityType $HighestSeverity
     * return ProcessShipmentReply
     */
    public function setHighestSeverity(\FedEx\ShipService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data regarding the results of the submitted transaction.
     *
     * @param array[Notification] $Notifications
     * return ProcessShipmentReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return ProcessShipmentReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return ProcessShipmentReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * The reply payload. All of the returned information about this shipment/package.
     *
     * @param CompletedShipmentDetail $CompletedShipmentDetail
     * return ProcessShipmentReply
     */
    public function setCompletedShipmentDetail(CompletedShipmentDetail $completedShipmentDetail)
    {
        $this->CompletedShipmentDetail = $completedShipmentDetail;
        return $this;
    }
    
    /**
     * Empty unless error label behavior is PACKAGE_ERROR_LABELS and one or more errors occured during transaction processing.
     *
     * @param array[ShippingDocument] $ErrorLabels
     * return ProcessShipmentReply
     */
    public function setErrorLabels(array $errorLabels)
    {
        $this->ErrorLabels = $errorLabels;
        return $this;
    }
    

    
}