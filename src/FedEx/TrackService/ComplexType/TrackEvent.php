<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx scanning information about a package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property string $Timestamp
 * @property string $EventType
 * @property string $EventDescription
 * @property string $StatusExceptionCode
 * @property string $StatusExceptionDescription
 * @property Address $Address
 * @property string $StationId
 * @property \FedEx\TrackService\SimpleType\ArrivalLocationType|string $ArrivalLocation

 */
class TrackEvent extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackEvent';

    /**
     * The time this event occurred.
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
     * Carrier's scan code. Pairs with EventDescription.
     *
     * @param string $eventType
     * @return $this
     */
    public function setEventType($eventType)
    {
        $this->values['EventType'] = $eventType;
        return $this;
    }

    /**
     * Literal description that pairs with the EventType.
     *
     * @param string $eventDescription
     * @return $this
     */
    public function setEventDescription($eventDescription)
    {
        $this->values['EventDescription'] = $eventDescription;
        return $this;
    }

    /**
     * Further defines the Scan Type code's specific type (e.g., DEX08 business closed). Pairs with StatusExceptionDescription.
     *
     * @param string $statusExceptionCode
     * @return $this
     */
    public function setStatusExceptionCode($statusExceptionCode)
    {
        $this->values['StatusExceptionCode'] = $statusExceptionCode;
        return $this;
    }

    /**
     * Literal description that pairs with the StatusExceptionCode.
     *
     * @param string $statusExceptionDescription
     * @return $this
     */
    public function setStatusExceptionDescription($statusExceptionDescription)
    {
        $this->values['StatusExceptionDescription'] = $statusExceptionDescription;
        return $this;
    }

    /**
     * Address information of the station that is responsible for the scan.
     *
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->values['Address'] = $address;
        return $this;
    }

    /**
     * FedEx location ID where the scan took place. (Returned for CSR SL only.)
     *
     * @param string $stationId
     * @return $this
     */
    public function setStationId($stationId)
    {
        $this->values['StationId'] = $stationId;
        return $this;
    }

    /**
     * Indicates where the arrival actually occurred.
     *
     * @param \FedEx\TrackService\SimpleType\ArrivalLocationType|string $arrivalLocation
     * @return $this
     */
    public function setArrivalLocation($arrivalLocation)
    {
        $this->values['ArrivalLocation'] = $arrivalLocation;
        return $this;
    }
}
