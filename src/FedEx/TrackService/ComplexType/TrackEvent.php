<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx scanning information about a package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackEvent
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackEvent';

    /**
     * The time this event occurred.
     *
     * @param dateTime $timestamp
     * @return TrackEvent
     */
    public function setTimestamp($timestamp)
    {
        $this->Timestamp = $timestamp;
        return $this;
    }
    
    /**
     * Returns The time this event occurred.
     *
     * @return dateTime
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }
    
    /**
     * Carrier's scan code. Pairs with EventDescription.
     *
     * @param string $eventType
     * @return TrackEvent
     */
    public function setEventType($eventType)
    {
        $this->EventType = $eventType;
        return $this;
    }
    
    /**
     * Returns Carrier's scan code. Pairs with EventDescription.
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->EventType;
    }
    
    /**
     * Literal description that pairs with the EventType.
     *
     * @param string $eventDescription
     * @return TrackEvent
     */
    public function setEventDescription($eventDescription)
    {
        $this->EventDescription = $eventDescription;
        return $this;
    }
    
    /**
     * Returns Literal description that pairs with the EventType.
     *
     * @return string
     */
    public function getEventDescription()
    {
        return $this->EventDescription;
    }
    
    /**
     * Further defines the Scan Type code's specific type (e.g., DEX08 business closed). Pairs with StatusExceptionDescription.
     *
     * @param string $statusExceptionCode
     * @return TrackEvent
     */
    public function setStatusExceptionCode($statusExceptionCode)
    {
        $this->StatusExceptionCode = $statusExceptionCode;
        return $this;
    }
    
    /**
     * Returns Further defines the Scan Type code's specific type (e.g., DEX08 business closed). Pairs with StatusExceptionDescription.
     *
     * @return string
     */
    public function getStatusExceptionCode()
    {
        return $this->StatusExceptionCode;
    }
    
    /**
     * Literal description that pairs with the StatusExceptionCode.
     *
     * @param string $statusExceptionDescription
     * @return TrackEvent
     */
    public function setStatusExceptionDescription($statusExceptionDescription)
    {
        $this->StatusExceptionDescription = $statusExceptionDescription;
        return $this;
    }
    
    /**
     * Returns Literal description that pairs with the StatusExceptionCode.
     *
     * @return string
     */
    public function getStatusExceptionDescription()
    {
        return $this->StatusExceptionDescription;
    }
    
    /**
     * Address information of the station that is responsible for the scan.
     *
     * @param Address $address
     * @return TrackEvent
     */
    public function setAddress(Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    
    /**
     * Returns Address information of the station that is responsible for the scan.
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }
    
    /**
     * Indicates where the arrival actually occurred.
     *
     * @param \FedEx\TrackService\SimpleType\ArrivalLocationType|string $arrivalLocation
     * @return TrackEvent
     */
    public function setArrivalLocation($arrivalLocation)
    {
        $this->ArrivalLocation = $arrivalLocation;
        return $this;
    }
    
    /**
     * Returns Indicates where the arrival actually occurred.
     *
     * @return \FedEx\TrackService\SimpleType\ArrivalLocationType|string
     */
    public function getArrivalLocation()
    {
        return $this->ArrivalLocation;
    }
    

    
}