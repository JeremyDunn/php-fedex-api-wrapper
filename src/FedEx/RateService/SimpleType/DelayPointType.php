<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The point where the delay is occurring ( e.g. Origin, Destination, Broker location).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DelayPointType
    extends AbstractSimpleType
{
    const _BROKER = 'BROKER';
    const _DESTINATION = 'DESTINATION';
    const _ORIGIN = 'ORIGIN';
    const _ORIGIN_DESTINATION_PAIR = 'ORIGIN_DESTINATION_PAIR';
    const _PROOF_OF_DELIVERY_POINT = 'PROOF_OF_DELIVERY_POINT';
}