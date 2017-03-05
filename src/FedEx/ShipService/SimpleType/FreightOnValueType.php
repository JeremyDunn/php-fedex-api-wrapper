<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies responsibilities with respect to loss, damage, etc.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightOnValueType extends AbstractSimpleType
{
    const _CARRIER_RISK = 'CARRIER_RISK';
    const _OWN_RISK = 'OWN_RISK';
}
