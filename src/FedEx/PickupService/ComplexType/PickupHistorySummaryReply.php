<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupHistorySummaryReply
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string[] $InternalMessages
 * @property int $TotalResultAvailable
 * @property int $ResultsReturned
 * @property PagingResultsDetail $PagingDetail
 * @property PickupHistorySummary[] $PickupHistorySummaries

 */
class PickupHistorySummaryReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupHistorySummaryReply';

    /**
     * Set HighestSeverity
     *
     * @param \FedEx\PickupService\SimpleType\NotificationSeverityType|string $highestSeverity
     * @return $this
     */
    public function setHighestSeverity($highestSeverity)
    {
        $this->values['HighestSeverity'] = $highestSeverity;
        return $this;
    }

    /**
     * Set Notifications
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
     * Set TransactionDetail
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
     * Set Version
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
     * FOR FEDEX INTERNAL USE ONLY: Status messages from the back-end services supporting pickup functionality. These messages are directly passed-through, without modification, and the content is not examined or validated by this service. Programmatic use of these messages is highly discouraged as they are subject to change without notice.
     *
     * @param string $internalMessages
     * @return $this
     */
    public function setInternalMessages($internalMessages)
    {
        $this->values['InternalMessages'] = $internalMessages;
        return $this;
    }

    /**
     * Set TotalResultAvailable
     *
     * @param int $totalResultAvailable
     * @return $this
     */
    public function setTotalResultAvailable($totalResultAvailable)
    {
        $this->values['TotalResultAvailable'] = $totalResultAvailable;
        return $this;
    }

    /**
     * Set ResultsReturned
     *
     * @param int $resultsReturned
     * @return $this
     */
    public function setResultsReturned($resultsReturned)
    {
        $this->values['ResultsReturned'] = $resultsReturned;
        return $this;
    }

    /**
     * Set PagingDetail
     *
     * @param PagingResultsDetail $pagingDetail
     * @return $this
     */
    public function setPagingDetail(PagingResultsDetail $pagingDetail)
    {
        $this->values['PagingDetail'] = $pagingDetail;
        return $this;
    }

    /**
     * Set PickupHistorySummaries
     *
     * @param PickupHistorySummary[] $pickupHistorySummaries
     * @return $this
     */
    public function setPickupHistorySummaries(array $pickupHistorySummaries)
    {
        $this->values['PickupHistorySummaries'] = $pickupHistorySummaries;
        return $this;
    }
}
