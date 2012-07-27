<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx scanning information about a package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackEvent
    extends AbstractComplexType
{
    protected $_name = 'TrackEvent';

    /**
     * The time this event occurred.
     *
     * @param dateTime $Timestamp
     * return TrackEvent
     */
    public function setTimestamp($timestamp)
    {
        $this->Timestamp = $timestamp;
        return $this;
    }
    
    /**
     * Carrier's scan code. Pairs with EventDescription.
     *
     * @param string $EventType
     * return TrackEvent
     */
    public function setEventType($eventType)
    {
        $this->EventType = $eventType;
        return $this;
    }
    
    /**
     * Literal description that pairs with the EventType.
     *
     * @param string $EventDescription
     * return TrackEvent
     */
    public function setEventDescription($eventDescription)
    {
        $this->EventDescription = $eventDescription;
        return $this;
    }
    
    /**
     * Further defines the Scan Type code's specific type (e.g., DEX08 business closed). Pairs with StatusExceptionDescription.
     *
     * @param string $StatusExceptionCode
     * return TrackEvent
     */
    public function setStatusExceptionCode($statusExceptionCode)
    {
        $this->StatusExceptionCode = $statusExceptionCode;
        return $this;
    }
    
    /**
     * Literal description that pairs with the StatusExceptionCode.
     *
     * @param string $StatusExceptionDescription
     * return TrackEvent
     */
    public function setStatusExceptionDescription($statusExceptionDescription)
    {
        $this->StatusExceptionDescription = $statusExceptionDescription;
        return $this;
    }
    
    /**
     * Address information of the station that is responsible for the scan.
     *
     * @param Address $Address
     * return TrackEvent
     */
    public function setAddress(Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    
    /**
     * Indicates where the arrival actually occurred.
     *
     * @param ArrivalLocationType $ArrivalLocation
     * return TrackEvent
     */
    public function setArrivalLocation(\FedEx\TrackService\SimpleType\ArrivalLocationType $arrivalLocation)
    {
        $this->ArrivalLocation = $arrivalLocation;
        return $this;
    }
    

    
}