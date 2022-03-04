<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackAdvanceNotificationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $EstimatedTimeOfArrival
 * @property string $Reason
 * @property \FedEx\TrackService\SimpleType\TrackAdvanceNotificationStatusType|string $Status
 * @property string $StatusDescription
 * @property string $StatusTime

 */
class TrackAdvanceNotificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackAdvanceNotificationDetail';

    /**
     * Set EstimatedTimeOfArrival
     *
     * @param string $estimatedTimeOfArrival
     * @return $this
     */
    public function setEstimatedTimeOfArrival($estimatedTimeOfArrival)
    {
        $this->values['EstimatedTimeOfArrival'] = $estimatedTimeOfArrival;
        return $this;
    }

    /**
     * Set Reason
     *
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->values['Reason'] = $reason;
        return $this;
    }

    /**
     * Set Status
     *
     * @param \FedEx\TrackService\SimpleType\TrackAdvanceNotificationStatusType|string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->values['Status'] = $status;
        return $this;
    }

    /**
     * Set StatusDescription
     *
     * @param string $statusDescription
     * @return $this
     */
    public function setStatusDescription($statusDescription)
    {
        $this->values['StatusDescription'] = $statusDescription;
        return $this;
    }

    /**
     * Set StatusTime
     *
     * @param string $statusTime
     * @return $this
     */
    public function setStatusTime($statusTime)
    {
        $this->values['StatusTime'] = $statusTime;
        return $this;
    }
}
