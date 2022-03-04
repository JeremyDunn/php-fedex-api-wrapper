<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TransactionSourceFormat
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
