<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Identifies responsibilities with respect to loss, damage, etc.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class FreightOnValueType
    extends AbstractSimpleType
{
    const _CARRIER_RISK = 'CARRIER_RISK';
    const _OWN_RISK = 'OWN_RISK';
}