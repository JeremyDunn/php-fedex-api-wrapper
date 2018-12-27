<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AdditionalLabelsType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class AdditionalLabelsType extends AbstractSimpleType
{
    const _BROKER = 'BROKER';
    const _CONSIGNEE = 'CONSIGNEE';
    const _CUSTOMS = 'CUSTOMS';
    const _DESTINATION = 'DESTINATION';
    const _FREIGHT_REFERENCE = 'FREIGHT_REFERENCE';
    const _MANIFEST = 'MANIFEST';
    const _ORIGIN = 'ORIGIN';
    const _RECIPIENT = 'RECIPIENT';
    const _SHIPPER = 'SHIPPER';
}
