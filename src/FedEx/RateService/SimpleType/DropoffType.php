<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the method by which the package is to be tendered to FedEx. This element does not dispatch a courier for package pickup.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DropoffType
    extends AbstractSimpleType
{
    const _BUSINESS_SERVICE_CENTER = 'BUSINESS_SERVICE_CENTER';
    const _DROP_BOX = 'DROP_BOX';
    const _REGULAR_PICKUP = 'REGULAR_PICKUP';
    const _REQUEST_COURIER = 'REQUEST_COURIER';
    const _STATION = 'STATION';
}