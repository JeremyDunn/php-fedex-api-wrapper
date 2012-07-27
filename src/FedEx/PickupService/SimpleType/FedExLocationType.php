<?php
namespace FedEx\Pickup\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies a kind of FedEx facility.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FedExLocationType
    extends AbstractSimpleType
{
    const _FEDEX_EXPRESS_STATION = 'FEDEX_EXPRESS_STATION';
    const _FEDEX_GROUND_TERMINAL = 'FEDEX_GROUND_TERMINAL';
    const _FEDEX_OFFICE = 'FEDEX_OFFICE';
}