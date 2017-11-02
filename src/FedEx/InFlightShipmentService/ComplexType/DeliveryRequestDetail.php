<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DeliveryRequestDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property \FedEx\InFlightShipmentService\SimpleType\DeliveryOptionType|string $Type
 * @property RedirectToHoldAtLocationRequestDetail $RedirectToHoldAtLocationDetail

 */
class DeliveryRequestDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DeliveryRequestDetail';

    /**
     * Specifies the delivery type of delivery option.
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\DeliveryOptionType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set RedirectToHoldAtLocationDetail
     *
     * @param RedirectToHoldAtLocationRequestDetail $redirectToHoldAtLocationDetail
     * @return $this
     */
    public function setRedirectToHoldAtLocationDetail(RedirectToHoldAtLocationRequestDetail $redirectToHoldAtLocationDetail)
    {
        $this->values['RedirectToHoldAtLocationDetail'] = $redirectToHoldAtLocationDetail;
        return $this;
    }
}
