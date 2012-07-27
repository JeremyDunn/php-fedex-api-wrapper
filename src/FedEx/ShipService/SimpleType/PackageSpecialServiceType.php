<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the collection of special service offered by FedEx. BROKER_SELECT_OPTION should be used for Ground shipments only.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PackageSpecialServiceType
    extends AbstractSimpleType
{
    const _ALCOHOL = 'ALCOHOL';
    const _APPOINTMENT_DELIVERY = 'APPOINTMENT_DELIVERY';
    const _COD = 'COD';
    const _DANGEROUS_GOODS = 'DANGEROUS_GOODS';
    const _DRY_ICE = 'DRY_ICE';
    const _NON_STANDARD_CONTAINER = 'NON_STANDARD_CONTAINER';
    const _PRIORITY_ALERT = 'PRIORITY_ALERT';
    const _SIGNATURE_OPTION = 'SIGNATURE_OPTION';
}