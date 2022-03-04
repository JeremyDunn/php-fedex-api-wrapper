<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * BrokerType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class BrokerType extends AbstractSimpleType
{
    const _EXPORT = 'EXPORT';
    const _IMPORT = 'IMPORT';
}
