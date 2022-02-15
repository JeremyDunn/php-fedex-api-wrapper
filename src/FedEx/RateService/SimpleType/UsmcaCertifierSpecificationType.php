<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * UsmcaCertifierSpecificationType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class UsmcaCertifierSpecificationType extends AbstractSimpleType
{
    const _EXPORTER = 'EXPORTER';
    const _IMPORTER = 'IMPORTER';
    const _PRODUCER = 'PRODUCER';
}
