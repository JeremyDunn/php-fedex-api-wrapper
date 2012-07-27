<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * These values are mutually exclusive; at most one of them can be attached to a SmartPost shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class SmartPostAncillaryEndorsementType
    extends AbstractSimpleType
{
    const _ADDRESS_CORRECTION = 'ADDRESS_CORRECTION';
    const _CARRIER_LEAVE_IF_NO_RESPONSE = 'CARRIER_LEAVE_IF_NO_RESPONSE';
    const _CHANGE_SERVICE = 'CHANGE_SERVICE';
    const _FORWARDING_SERVICE = 'FORWARDING_SERVICE';
    const _RETURN_SERVICE = 'RETURN_SERVICE';
}