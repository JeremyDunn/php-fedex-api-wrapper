<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property CompletedTrackDetail[] $CompletedTrackDetails

 */
class TrackReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackReply';

    /**
     * This contains the severity type of the most severe Notification in the Notifications array.
     *
     * @param \FedEx\TrackService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return $this
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->values['HighestSeverity'] = $highestSeverity;
        return $this;
    }

    /**
     * Information about the request/reply such was the transaction successful or not, and any additional information relevant to the request and/or reply. There may be multiple Notifications in a reply.
     *
     * @param Notification[] $notifications
     * @return $this
     */
    public function setNotifications(array $notifications)
    {
        $this->values['Notifications'] = $notifications;
        return $this;
    }

    /**
     * Contains the CustomerTransactionDetail that is echoed back to the caller for matching requests and replies and a Localization element for defining the language/translation used in the reply data.
     *
     * @param TransactionDetail $transactionDetail
     * @return $this
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->values['TransactionDetail'] = $transactionDetail;
        return $this;
    }

    /**
     * Contains the version of the reply being used.
     *
     * @param VersionId $version
     * @return $this
     */
    public function setVersion(VersionId $version)
    {
        $this->values['Version'] = $version;
        return $this;
    }

    /**
     * Contains detailed tracking entity information.
     *
     * @param CompletedTrackDetail[] $completedTrackDetails
     * @return $this
     */
    public function setCompletedTrackDetails(array $completedTrackDetails)
    {
        $this->values['CompletedTrackDetails'] = $completedTrackDetails;
        return $this;
    }
}
