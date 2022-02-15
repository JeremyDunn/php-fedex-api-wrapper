<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * These values identify which package-level data values will be provided at the shipment-level.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class ShipmentOnlyFieldsType extends AbstractSimpleType
{
    const _DIMENSIONS = 'DIMENSIONS';
    const _INSURED_VALUE = 'INSURED_VALUE';
    const _WEIGHT = 'WEIGHT';
}
