<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * See instructions for NAFTA Certificate of Origin for code definitions.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class NaftaPreferenceCriterionCode extends AbstractSimpleType
{
    const _A = 'A';
    const _B = 'B';
    const _C = 'C';
    const _D = 'D';
    const _E = 'E';
    const _F = 'F';
}
