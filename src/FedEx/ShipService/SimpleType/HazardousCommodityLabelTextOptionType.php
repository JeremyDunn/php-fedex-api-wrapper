<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Specifies how the commodity is to be labeled.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HazardousCommodityLabelTextOptionType
    extends AbstractSimpleType
{
    const _APPEND = 'APPEND';
    const _OVERRIDE = 'OVERRIDE';
    const _STANDARD = 'STANDARD';
}