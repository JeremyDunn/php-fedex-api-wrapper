<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Relative to normal orientation for the printer.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class LabelRotationType
    extends AbstractSimpleType
{
    const _LEFT = 'LEFT';
    const _NONE = 'NONE';
    const _RIGHT = 'RIGHT';
    const _UPSIDE_DOWN = 'UPSIDE_DOWN';
}