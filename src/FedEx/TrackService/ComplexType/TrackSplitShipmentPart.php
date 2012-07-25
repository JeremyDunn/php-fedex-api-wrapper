<?php
namespace FedEx\TrackService\ComplexType;

/**
 * Used when a cargo shipment is split across vehicles. This is used to give the status of each part of the shipment.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackSplitShipmentPart
    extends AbstractComplexType
{
    protected $_name = 'TrackSplitShipmentPart';

    /**
     * The number of pieces in this part.
     *
     * @param positiveInteger $PieceCount
     * return TrackSplitShipmentPart
     */
    public function setPieceCount($pieceCount)
    {
        $this->PieceCount = $pieceCount;
        return $this;
    }
    
    /**
     * The date and time this status began.
     *
     * @param dateTime $Timestamp
     * return TrackSplitShipmentPart
     */
    public function setTimestamp($timestamp)
    {
        $this->Timestamp = $timestamp;
        return $this;
    }
    
    /**
     * A code that identifies this type of status.
     *
     * @param string $StatusCode
     * return TrackSplitShipmentPart
     */
    public function setStatusCode($statusCode)
    {
        $this->StatusCode = $statusCode;
        return $this;
    }
    
    /**
     * A human-readable description of this status.
     *
     * @param string $StatusDescription
     * return TrackSplitShipmentPart
     */
    public function setStatusDescription($statusDescription)
    {
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    

    
}