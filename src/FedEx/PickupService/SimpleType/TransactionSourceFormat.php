<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TransactionSourceFormat
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class TransactionSourceFormat extends AbstractSimpleType
{
    const _API_CTS = 'API_CTS';
    const _API_XML = 'API_XML';
    const _DIRECT = 'DIRECT';
    const _DIRECT_XML = 'DIRECT_XML';
    const _FXRS_CTS = 'FXRS_CTS';
    const _UNKNOWN = 'UNKNOWN';
    const _WSI_XML = 'WSI_XML';
}
