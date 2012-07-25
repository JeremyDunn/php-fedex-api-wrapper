<?php
namespace FedEx\RateService\SimpleType;

/**
 * The point where the delay is occurring ( e.g. Origin, Destination, Broker location).
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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