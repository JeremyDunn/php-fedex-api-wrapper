<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RedirectToHoldAtLocationRequestDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property string $HoldingLocationId
 * @property int $HoldingLocationNumber
 * @property ContactAndAddress $HoldingLocationContactAndAddress
 * @property string $Comments

 */
class RedirectToHoldAtLocationRequestDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RedirectToHoldAtLocationRequestDetail';

    /**
     * Set HoldingLocationId
     *
     * @param string $holdingLocationId
     * @return $this
     */
    public function setHoldingLocationId($holdingLocationId)
    {
        $this->values['HoldingLocationId'] = $holdingLocationId;
        return $this;
    }

    /**
     * Set HoldingLocationNumber
     *
     * @param int $holdingLocationNumber
     * @return $this
     */
    public function setHoldingLocationNumber($holdingLocationNumber)
    {
        $this->values['HoldingLocationNumber'] = $holdingLocationNumber;
        return $this;
    }

    /**
     * Set HoldingLocationContactAndAddress
     *
     * @param ContactAndAddress $holdingLocationContactAndAddress
     * @return $this
     */
    public function setHoldingLocationContactAndAddress(ContactAndAddress $holdingLocationContactAndAddress)
    {
        $this->values['HoldingLocationContactAndAddress'] = $holdingLocationContactAndAddress;
        return $this;
    }

    /**
     * Set Comments
     *
     * @param string $comments
     * @return $this
     */
    public function setComments($comments)
    {
        $this->values['Comments'] = $comments;
        return $this;
    }
}
