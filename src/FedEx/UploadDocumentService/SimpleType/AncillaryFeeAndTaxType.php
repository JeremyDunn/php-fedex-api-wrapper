<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AncillaryFeeAndTaxType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class AncillaryFeeAndTaxType extends AbstractSimpleType
{
    const _CLEARANCE_ENTRY_FEE = 'CLEARANCE_ENTRY_FEE';
    const _GOODS_AND_SERVICES_TAX = 'GOODS_AND_SERVICES_TAX';
    const _HARMONIZED_SALES_TAX = 'HARMONIZED_SALES_TAX';
    const _OTHER = 'OTHER';
}
