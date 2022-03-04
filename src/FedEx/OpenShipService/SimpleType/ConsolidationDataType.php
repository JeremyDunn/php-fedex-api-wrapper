<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ConsolidationDataType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class ConsolidationDataType extends AbstractSimpleType
{
    const _TOTAL_CUSTOMS_VALUE = 'TOTAL_CUSTOMS_VALUE';
    const _TOTAL_FREIGHT_CHARGES = 'TOTAL_FREIGHT_CHARGES';
    const _TOTAL_HANDLING_COSTS = 'TOTAL_HANDLING_COSTS';
    const _TOTAL_INSURANCE_CHARGES = 'TOTAL_INSURANCE_CHARGES';
    const _TOTAL_INSURED_VALUE = 'TOTAL_INSURED_VALUE';
    const _TOTAL_PACKING_COSTS = 'TOTAL_PACKING_COSTS';
    const _TOTAL_TAXES_OR_MISCELLANEOUS_CHARGES = 'TOTAL_TAXES_OR_MISCELLANEOUS_CHARGES';
}
