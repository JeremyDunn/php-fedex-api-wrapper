<?php
namespace FedEx\RateService\ComplexType;

/**
 * The response to a RateRequest. The Notifications indicate whether the request was successful or not.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RateReply
    extends AbstractComplexType
{
    protected $_name = 'RateReply';

    /**
     * This indicates the highest level of severity of all the notifications returned in this reply.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return RateReply
     */
    public function setHighestSeverity(\FedEx\RateService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data regarding the results of the submitted transaction.
     *
     * @param array[Notification] $Notifications
     * return RateReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Contains the CustomerTransactionId that was sent in the request.
     *
     * @param TransactionDetail $TransactionDetail
     * return RateReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * The version of this reply.
     *
     * @param VersionId $Version
     * return RateReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Each element contains all rate data for a single service. If service was specified in the request, there will be a single entry in this array; if service was omitted in the request, there will be a separate entry in this array for each service being compared.
     *
     * @param array[RateReplyDetail] $RateReplyDetails
     * return RateReply
     */
    public function setRateReplyDetails(array $rateReplyDetails)
    {
        $this->RateReplyDetails = $rateReplyDetails;
        return $this;
    }
    

    
}