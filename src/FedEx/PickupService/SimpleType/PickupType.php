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
    const _PACKAGE_RETURN_PROGRAM = 'PACKAGE_RETURN_PROGRAM';
    const _REGULAR_STOP = 'REGULAR_STOP';
    const _REGULAR_STOP_WITH_AUTO_CANCEL = 'REGULAR_STOP_WITH_AUTO_CANCEL';
    const _TAG = 'TAG';
}
