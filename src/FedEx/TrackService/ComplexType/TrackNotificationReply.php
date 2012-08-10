<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx Track Notification reply.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackNotificationReply
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackNotificationReply';

    /**
     * This contains the severity type of the most severe Notification in the Notifications array.
     *
     * @param \FedEx\TrackService\SimpleType\NotificationSeverityType|string $highestSeverity
     * return TrackNotificationReply
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * Information about the request/reply such was the transaction successful or not, and any additional information relevant to the request and/or reply. There may be multiple Notifications in a reply.
     *
     * @param Notification[] $notifications
     * return TrackNotificationReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Contains the CustomerTransactionDetail that is echoed back to the caller for matching requests and replies and a Localization element for defining the language/translation used in the reply data.
     *
     * @param TransactionDetail $transactionDetail
     * return TrackNotificationReply
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Contains the version of the reply being used.
     *
     * @param VersionId $version
     * return TrackNotificationReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * True if duplicate packages (more than one package with the same tracking number) have been found, the packages array contains information about each duplicate. Use this information to determine which of the tracking numbers is the one you need and resend your request using the tracking number and TrackingNumberUniqueIdentifier for that package.
     *
     * @param boolean $duplicateWaybill
     * return TrackNotificationReply
     */
    public function setDuplicateWaybill($duplicateWaybill)
    {
        $this->DuplicateWaybill = $duplicateWaybill;
        return $this;
    }
    
    /**
     * True if additional packages remain to be retrieved.
     *
     * @param boolean $moreDataAvailable
     * return TrackNotificationReply
     */
    public function setMoreDataAvailable($moreDataAvailable)
    {
        $this->MoreDataAvailable = $moreDataAvailable;
        return $this;
    }
    
    /**
     * Value that must be passed in a TrackNotification request to retrieve the next set of packages (when MoreDataAvailable = true).
     *
     * @param string $pagingToken
     * return TrackNotificationReply
     */
    public function setPagingToken($pagingToken)
    {
        $this->PagingToken = $pagingToken;
        return $this;
    }
    
    /**
     * Information about the notifications that are available for this tracking number. If there are duplicates the ship date and destination address information is returned for determining which TrackingNumberUniqueIdentifier to use on a subsequent request.
     *
     * @param TrackNotificationPackage[] $packages
     * return TrackNotificationReply
     */
    public function setPackages(array $packages)
    {
        $this->Packages = $packages;
        return $this;
    }
    

    
}