<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * These values indicate the type of pickup being requested.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupType extends AbstractSimpleType
{
    const _ON_CALL = 'ON_CALL';
    const _TAG = 'TAG';
}
