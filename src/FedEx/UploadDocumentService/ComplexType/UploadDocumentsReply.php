<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadDocumentsReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadDocumentsReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'UploadDocumentsReply';

    /**
     * This indicates the highest level of severity of all the notifications returned in this reply
     *
     * @param \FedEx\UploadDocumentService\SimpleType\NotificationSeverityType|string $highestSeverity
     * return UploadDocumentsReply
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
     * return UploadDocumentsReply
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
     * return UploadDocumentsReply
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
     * return UploadDocumentsReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Set DocumentStatuses
     *
     * @param UploadDocumentStatusDetail[] $documentStatuses
     * return UploadDocumentsReply
     */
    public function setDocumentStatuses(array $documentStatuses)
    {
        $this->DocumentStatuses = $documentStatuses;
        return $this;
    }
    

    
}