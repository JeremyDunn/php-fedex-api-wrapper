<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackDeliveryOptionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackDeliveryOptionType extends AbstractSimpleType
{
    const _APPOINTMENT = 'APPOINTMENT';
    const _DATE_CERTAIN = 'DATE_CERTAIN';
    const _ELECTRONIC_SIGNATURE_RELEASE = 'ELECTRONIC_SIGNATURE_RELEASE';
    const _EVENING = 'EVENING';
    const _REDIRECT_TO_HOLD_AT_LOCATION = 'REDIRECT_TO_HOLD_AT_LOCATION';
    const _REROUTE = 'REROUTE';
}
