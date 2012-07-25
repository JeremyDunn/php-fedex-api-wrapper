<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Valid values for CustomLabelCoordinateUnits
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomLabelCoordinateUnits
    extends AbstractSimpleType
{
    const _MILS = 'MILS';
    const _PIXELS = 'PIXELS';
}