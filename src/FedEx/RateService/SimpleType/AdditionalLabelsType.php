<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AdditionalLabelsType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class AdditionalLabelsType extends AbstractSimpleType
{
    const _BROKER = 'BROKER';
    const _CONSIGNEE = 'CONSIGNEE';
    const _CUSTOMS = 'CUSTOMS';
    const _DESTINATION = 'DESTINATION';
    const _MANIFEST = 'MANIFEST';
    const _ORIGIN = 'ORIGIN';
    const _RECIPIENT = 'RECIPIENT';
    const _SHIPPER = 'SHIPPER';
}
