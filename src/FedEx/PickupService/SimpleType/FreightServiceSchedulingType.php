<?php
namespace FedEx\Pickup\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the type of service scheduling offered from a Freight or National Freight Service Center to a customer-supplied address.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FreightServiceSchedulingType
    extends AbstractSimpleType
{
    const _LIMITED = 'LIMITED';
    const _STANDARD = 'STANDARD';
    const _WILL_CALL = 'WILL_CALL';
}