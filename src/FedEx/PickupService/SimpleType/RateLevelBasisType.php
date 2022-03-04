<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateLevelBasisType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class RateLevelBasisType extends AbstractSimpleType
{
    const _BUNDLED_RATE = 'BUNDLED_RATE';
    const _INDIVIDUAL_PACKAGE_RATE = 'INDIVIDUAL_PACKAGE_RATE';
}
