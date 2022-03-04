<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedHoldAtLocationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property ContactAndAddress $HoldingLocation
 * @property \FedEx\OpenShipService\SimpleType\FedExLocationType|string $HoldingLocationType
 * @property string $HoldingLocationTypeForDisplay

 */
class CompletedHoldAtLocationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CompletedHoldAtLocationDetail';

    /**
     * Identifies the branded location name, the hold at location phone number and the address of the location.
     *
     * @param ContactAndAddress $holdingLocation
     * @return $this
     */
    public function setHoldingLocation(ContactAndAddress $holdingLocation)
    {
        $this->values['HoldingLocation'] = $holdingLocation;
        return $this;
    }

    /**
     * Identifies the type of FedEx location.
     *
     * @param \FedEx\OpenShipService\SimpleType\FedExLocationType|string $holdingLocationType
     * @return $this
     */
    public function setHoldingLocationType($holdingLocationType)
    {
        $this->values['HoldingLocationType'] = $holdingLocationType;
        return $this;
    }

    /**
     * Set HoldingLocationTypeForDisplay
     *
     * @param string $holdingLocationTypeForDisplay
     * @return $this
     */
    public function setHoldingLocationTypeForDisplay($holdingLocationTypeForDisplay)
    {
        $this->values['HoldingLocationTypeForDisplay'] = $holdingLocationTypeForDisplay;
        return $this;
    }
}
