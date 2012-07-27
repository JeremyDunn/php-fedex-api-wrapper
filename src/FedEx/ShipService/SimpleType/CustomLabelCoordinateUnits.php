<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Valid values for CustomLabelCoordinateUnits
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomLabelCoordinateUnits
    extends AbstractSimpleType
{
    const _MILS = 'MILS';
    const _PIXELS = 'PIXELS';
}