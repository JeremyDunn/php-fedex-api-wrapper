<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PickupRequestSourceType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PickupRequestSourceType extends AbstractSimpleType
{
    const _AUTOMATION = 'AUTOMATION';
    const _CUSTOMER_SERVICE = 'CUSTOMER_SERVICE';
}
