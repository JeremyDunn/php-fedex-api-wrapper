<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * UsmcaProducerSpecificationType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class UsmcaProducerSpecificationType extends AbstractSimpleType
{
    const _AVAILABLE_UPON_REQUEST = 'AVAILABLE_UPON_REQUEST';
    const _SAME_AS_EXPORTER = 'SAME_AS_EXPORTER';
    const _VARIOUS = 'VARIOUS';
}
