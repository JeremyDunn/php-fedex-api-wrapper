<?php
namespace FedEx\CloseService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class GroundCloseDocumentsReply
    extends AbstractComplexType
{
    protected $_name = 'GroundCloseDocumentsReply';

    /**
     * This indicates the highest level of severity of all the notifications returned in this reply.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return GroundCloseDocumentsReply
     */
    public function setHighestSeverity(\FedEx\CloseService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data regarding the results of the submitted transaction.
     *
     * @param array[Notification] $Notifications
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
     * @param TransactionDetail $TransactionDetail
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
     * @param VersionId $Version
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
     * @param array[CloseDocument] $CloseDocuments
     * return GroundCloseDocumentsReply
     */
    public function setCloseDocuments(array $closeDocuments)
    {
        $this->CloseDocuments = $closeDocuments;
        return $this;
    }
    

    
}