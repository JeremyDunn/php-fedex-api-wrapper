<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * BrokerType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class BrokerType extends AbstractSimpleType
{
    const _EXPORT = 'EXPORT';
    const _IMPORT = 'IMPORT';
}
