<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Identifies a kind of FedEx facility.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FedExLocationType
    extends AbstractSimpleType
{
    const _FEDEX_EXPRESS_STATION = 'FEDEX_EXPRESS_STATION';
    const _FEDEX_GROUND_TERMINAL = 'FEDEX_GROUND_TERMINAL';
    const _FEDEX_OFFICE = 'FEDEX_OFFICE';
}