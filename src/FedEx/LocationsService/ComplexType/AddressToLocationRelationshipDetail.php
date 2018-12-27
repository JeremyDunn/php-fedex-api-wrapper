<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the relationship between the address specificed and the address of the FedEx Location in terms of distance.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property Address $MatchedAddress
 * @property string $MatchedAddressGeographicCoordinates
 * @property DistanceAndLocationDetail[] $DistanceAndLocationDetails

 */
class AddressToLocationRelationshipDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressToLocationRelationshipDetail';

    /**
     * Address as provided in the request.
     *
     * @param Address $matchedAddress
     * @return $this
     */
    public function setMatchedAddress(Address $matchedAddress)
    {
        $this->values['MatchedAddress'] = $matchedAddress;
        return $this;
    }

    /**
     * Specify the geographic co-ordinates for the matched address.
     *
     * @param string $matchedAddressGeographicCoordinates
     * @return $this
     */
    public function setMatchedAddressGeographicCoordinates($matchedAddressGeographicCoordinates)
    {
        $this->values['MatchedAddressGeographicCoordinates'] = $matchedAddressGeographicCoordinates;
        return $this;
    }

    /**
     * Specifies the distance between the matched address and the addresses of matched FedEx locations. Also specifies the details of the FedEx locations.
     *
     * @param DistanceAndLocationDetail[] $distanceAndLocationDetails
     * @return $this
     */
    public function setDistanceAndLocationDetails(array $distanceAndLocationDetails)
    {
        $this->values['DistanceAndLocationDetails'] = $distanceAndLocationDetails;
        return $this;
    }
}
