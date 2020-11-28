<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * LabelSpecificationProcessingOptionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class LabelSpecificationProcessingOptionType extends AbstractSimpleType
{
    const _INCLUDE_DOC_TAB_ON_ALL_LABELS = 'INCLUDE_DOC_TAB_ON_ALL_LABELS';
    const _PRE_EACI_LABEL = 'PRE_EACI_LABEL';
}
