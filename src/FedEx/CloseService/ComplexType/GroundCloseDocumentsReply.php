<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * GroundCloseDocumentsReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class GroundCloseDocumentsReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'GroundCloseDocumentsReply';

    /**
     * This indicates the highest level of severity of all the notifications returned in this reply.
     *
     * @param \FedEx\CloseService\SimpleType\NotificationSeverityType|string $highestSeverity
     * return GroundCloseDocumentsReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data regarding the results of the submitted transaction.
     *
     * @param Notification[] $notifications
     * return GroundCloseDocumentsReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * return GroundCloseDocumentsReply
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
     * return GroundCloseDocumentsReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * The actual document contents for all provided reports.
     *
     * @param CloseDocument[] $closeDocuments
     * return GroundCloseDocumentsReply
     */
    public function setCloseDocuments(array $closeDocuments)
    {
        $this->CloseDocuments = $closeDocuments;
        return $this;
    }
    

    
}