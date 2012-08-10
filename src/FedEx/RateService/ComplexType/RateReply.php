<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The response to a RateRequest. The Notifications indicate whether the request was successful or not.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RateReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RateReply';

    /**
     * This indicates the highest level of severity of all the notifications returned in this reply.
     *
     * @param \FedEx\RateService\SimpleType\NotificationSeverityType|string $highestSeverity
     * return RateReply
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
     * @param TransactionDetail $transactionDetail
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
     * @param VersionId $version
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
     * @param RateReplyDetail[] $rateReplyDetails
     * return RateReply
     */
    public function setRateReplyDetails(array $rateReplyDetails)
    {
        $this->RateReplyDetails = $rateReplyDetails;
        return $this;
    }
    

    
}