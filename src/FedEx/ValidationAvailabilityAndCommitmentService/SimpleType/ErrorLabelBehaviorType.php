<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ErrorLabelBehaviorType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class ErrorLabelBehaviorType extends AbstractSimpleType
{
    const _PACKAGE_ERROR_LABELS = 'PACKAGE_ERROR_LABELS';
    const _STANDARD = 'STANDARD';
}
