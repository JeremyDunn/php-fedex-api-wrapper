<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Additional information about a physical location, such as suite number, cross street, floor number in a building. These details are not typically a part of a standard address definition; however, these details might help locate the address.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property string $LocationInCity
 * @property string $LocationInProperty
 * @property \FedEx\LocationsService\SimpleType\LocationAccessibilityType|string $Accessibility
 * @property string $Building
 * @property string $Department
 * @property string $RoomFloor
 * @property string $Suite
 * @property string $Apartment
 * @property string $Room
 * @property string $CrossStreet
 * @property string[] $AdditionalDescriptions

 */
class AddressAncillaryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressAncillaryDetail';

    /**
     * Set LocationInCity
     *
     * @param string $locationInCity
     * @return $this
     */
    public function setLocationInCity($locationInCity)
    {
        $this->values['LocationInCity'] = $locationInCity;
        return $this;
    }

    /**
     * Set LocationInProperty
     *
     * @param string $locationInProperty
     * @return $this
     */
    public function setLocationInProperty($locationInProperty)
    {
        $this->values['LocationInProperty'] = $locationInProperty;
        return $this;
    }

    /**
     * Indicates whether how this location can be accessed.
     *
     * @param \FedEx\LocationsService\SimpleType\LocationAccessibilityType|string $accessibility
     * @return $this
     */
    public function setAccessibility($accessibility)
    {
        $this->values['Accessibility'] = $accessibility;
        return $this;
    }

    /**
     * Specifies building number or name.
     *
     * @param string $building
     * @return $this
     */
    public function setBuilding($building)
    {
        $this->values['Building'] = $building;
        return $this;
    }

    /**
     * Specifies a department in the company or retail store.
     *
     * @param string $department
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->values['Department'] = $department;
        return $this;
    }

    /**
     * Specifies the floor number.
     *
     * @param string $roomFloor
     * @return $this
     */
    public function setRoomFloor($roomFloor)
    {
        $this->values['RoomFloor'] = $roomFloor;
        return $this;
    }

    /**
     * Set Suite
     *
     * @param string $suite
     * @return $this
     */
    public function setSuite($suite)
    {
        $this->values['Suite'] = $suite;
        return $this;
    }

    /**
     * Specifies apartment number.
     *
     * @param string $apartment
     * @return $this
     */
    public function setApartment($apartment)
    {
        $this->values['Apartment'] = $apartment;
        return $this;
    }

    /**
     * Specifies the room number, if one is specified.
     *
     * @param string $room
     * @return $this
     */
    public function setRoom($room)
    {
        $this->values['Room'] = $room;
        return $this;
    }

    /**
     * Set CrossStreet
     *
     * @param string $crossStreet
     * @return $this
     */
    public function setCrossStreet($crossStreet)
    {
        $this->values['CrossStreet'] = $crossStreet;
        return $this;
    }

    /**
     * This is used to specify additional details about the address such as landmark. For e.g. This field is used to capture details such as an address being inside a facility such as, Chilli's Care Center, St. Jude - Inside.
     *
     * @param string $additionalDescriptions
     * @return $this
     */
    public function setAdditionalDescriptions($additionalDescriptions)
    {
        $this->values['AdditionalDescriptions'] = $additionalDescriptions;
        return $this;
    }
}
