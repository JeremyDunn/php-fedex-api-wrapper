<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipmentRuleType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentRuleType extends AbstractSimpleType
{
    const _EXPORT = 'EXPORT';
    const _GENERAL = 'GENERAL';
    const _IMPORT = 'IMPORT';
}
