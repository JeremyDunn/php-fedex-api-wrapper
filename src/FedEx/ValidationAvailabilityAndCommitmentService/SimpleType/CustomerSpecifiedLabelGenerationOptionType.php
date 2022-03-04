<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomerSpecifiedLabelGenerationOptionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class CustomerSpecifiedLabelGenerationOptionType extends AbstractSimpleType
{
    const _CONTENT_ON_SHIPPING_LABEL_ONLY = 'CONTENT_ON_SHIPPING_LABEL_ONLY';
    const _CONTENT_ON_SHIPPING_LABEL_PREFERRED = 'CONTENT_ON_SHIPPING_LABEL_PREFERRED';
    const _CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY = 'CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY';
}
