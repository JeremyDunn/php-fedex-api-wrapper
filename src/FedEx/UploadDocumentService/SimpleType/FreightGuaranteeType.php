<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * FreightGuaranteeType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class FreightGuaranteeType extends AbstractSimpleType
{
    const _GUARANTEED_DATE = 'GUARANTEED_DATE';
    const _GUARANTEED_MORNING = 'GUARANTEED_MORNING';
    const _GUARANTEED_TIME = 'GUARANTEED_TIME';
}
