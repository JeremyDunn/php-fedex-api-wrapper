<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The "PAYOR..." rates are expressed in the currency identified in the payor's rate table(s). The "RATED..." rates are expressed in the currency of the origin country. Former "...COUNTER..." values have become "...RETAIL..." values, except for PAYOR_COUNTER and RATED_COUNTER, which have been removed.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ReturnedRateType extends AbstractSimpleType
{
    const _INCENTIVE = 'INCENTIVE';
    const _NEGOTIATED = 'NEGOTIATED';
    const _PAYOR_ACCOUNT_PACKAGE = 'PAYOR_ACCOUNT_PACKAGE';
    const _PAYOR_ACCOUNT_SHIPMENT = 'PAYOR_ACCOUNT_SHIPMENT';
    const _PAYOR_LIST_PACKAGE = 'PAYOR_LIST_PACKAGE';
    const _PAYOR_LIST_SHIPMENT = 'PAYOR_LIST_SHIPMENT';
    const _PREFERRED_ACCOUNT_PACKAGE = 'PREFERRED_ACCOUNT_PACKAGE';
    const _PREFERRED_ACCOUNT_SHIPMENT = 'PREFERRED_ACCOUNT_SHIPMENT';
    const _PREFERRED_LIST_PACKAGE = 'PREFERRED_LIST_PACKAGE';
    const _PREFERRED_LIST_SHIPMENT = 'PREFERRED_LIST_SHIPMENT';
    const _PREFERRED_NEGOTIATED = 'PREFERRED_NEGOTIATED';
}
