<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * LabelSpecificationProcessingOptionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class LabelSpecificationProcessingOptionType extends AbstractSimpleType
{
    const _INCLUDE_DOC_TAB_ON_ALL_LABELS = 'INCLUDE_DOC_TAB_ON_ALL_LABELS';
    const _PRE_EACI_LABEL = 'PRE_EACI_LABEL';
}
