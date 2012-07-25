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
class SmartPostCloseReply
    extends AbstractComplexType
{
    protected $_name = 'SmartPostCloseReply';

    /**
     * 
     *
     * @param NotificationSeverityType $HighestSeverity
     * return SmartPostCloseReply
     */
    public function setHighestSeverity(\FedEx\CloseService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[Notification] $Notifications
     * return SmartPostCloseReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * 
     *
     * @param TransactionDetail $TransactionDetail
     * return SmartPostCloseReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param VersionId $Version
     * return SmartPostCloseReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    

    
}