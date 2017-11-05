<?php
namespace FedEx\LocationsService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates how this can be accessed.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class LocationAccessibilityType extends AbstractSimpleType
{
    const _INSIDE = 'INSIDE';
    const _OUTSIDE = 'OUTSIDE';
}
