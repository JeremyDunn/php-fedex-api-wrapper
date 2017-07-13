<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Used when a cargo shipment is split across vehicles. This is used to give the status of each part of the shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property int $PieceCount
 * @property string $Timestamp
 * @property string $StatusCode
 * @property string $StatusDescription

 */
class TrackSplitShipmentPart extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackSplitShipmentPart';

    /**
     * The number of pieces in this part.
     *
     * @param int $pieceCount
     * @return $this
     */
    public function setPieceCount($pieceCount)
    {
        $this->values['PieceCount'] = $pieceCount;
        return $this;
    }

    /**
     * The date and time this status began.
     *
     * @param string $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->values['Timestamp'] = $timestamp;
        return $this;
    }

    /**
     * A code that identifies this type of status.
     *
     * @param string $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->values['StatusCode'] = $statusCode;
        return $this;
    }

    /**
     * A human-readable description of this status.
     *
     * @param string $statusDescription
     * @return $this
     */
    public function setStatusDescription($statusDescription)
    {
        $this->values['StatusDescription'] = $statusDescription;
        return $this;
    }
}
