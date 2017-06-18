<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CloseTimeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CloseTimeType extends AbstractSimpleType
{
    const _CUSTOMER_SPECIFIED = 'CUSTOMER_SPECIFIED';
    const _DEFAULT = 'DEFAULT';
}
