<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Names for data elements / areas which may be suppressed from printing on labels.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class LabelMaskableDataType extends AbstractSimpleType
{
    const _CUSTOMS_VALUE = 'CUSTOMS_VALUE';
    const _DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER = 'DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER';
    const _SECONDARY_BARCODE = 'SECONDARY_BARCODE';
    const _SHIPPER_ACCOUNT_NUMBER = 'SHIPPER_ACCOUNT_NUMBER';
    const _TERMS_AND_CONDITIONS = 'TERMS_AND_CONDITIONS';
    const _TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER = 'TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER';
}
