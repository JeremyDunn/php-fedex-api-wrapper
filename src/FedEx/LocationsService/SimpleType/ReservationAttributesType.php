<?php
namespace FedEx\LocationsService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Attributes about a reservation at a FedEx location.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class ReservationAttributesType extends AbstractSimpleType
{
    const _RESERVATION_AVAILABLE = 'RESERVATION_AVAILABLE';
}
