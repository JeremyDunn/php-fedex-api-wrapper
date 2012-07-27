<?php
namespace FedEx\LocatorService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the set of distance units for a Distance.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 */
class DistanceUnits
    extends AbstractSimpleType
{
    const _KM = 'KM';
    const _MI = 'MI';
}