<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedTrackDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\NotificationSeverityType|string $HighestSeverity
 * @property Notification[] $Notifications
 * @property boolean $DuplicateWaybill
 * @property boolean $MoreData
 * @property string $PagingToken
 * @property int $TrackDetailsCount
 * @property TrackDetail[] $TrackDetails

 */
class CompletedTrackDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CompletedTrackDetail';

    /**
     * Set HighestSeverity
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
     * True if duplicate packages (more than one package with the same tracking number) have been found, and only limited data will be provided for each one.
     *
     * @param boolean $duplicateWaybill
     * @return $this
     */
    public function setDuplicateWaybill($duplicateWaybill)
    {
        $this->values['DuplicateWaybill'] = $duplicateWaybill;
        return $this;
    }

    /**
     * True if additional packages remain to be retrieved.
     *
     * @param boolean $moreData
     * @return $this
     */
    public function setMoreData($moreData)
    {
        $this->values['MoreData'] = $moreData;
        return $this;
    }

    /**
     * Value that must be passed in a TrackNotification request to retrieve the next set of packages (when MoreDataAvailable = true).
     *
     * @param string $pagingToken
     * @return $this
     */
    public function setPagingToken($pagingToken)
    {
        $this->values['PagingToken'] = $pagingToken;
        return $this;
    }

    /**
     * Identifies the total number of available track details across all pages.
     *
     * @param int $trackDetailsCount
     * @return $this
     */
    public function setTrackDetailsCount($trackDetailsCount)
    {
        $this->values['TrackDetailsCount'] = $trackDetailsCount;
        return $this;
    }

    /**
     * Contains detailed tracking information for the requested packages(s).
     *
     * @param TrackDetail[] $trackDetails
     * @return $this
     */
    public function setTrackDetails(array $trackDetails)
    {
        $this->values['TrackDetails'] = $trackDetails;
        return $this;
    }
}
