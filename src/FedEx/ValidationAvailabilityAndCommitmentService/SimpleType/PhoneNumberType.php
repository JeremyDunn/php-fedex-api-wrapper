<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PhoneNumberType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class PhoneNumberType extends AbstractSimpleType
{
    const _FAX = 'FAX';
    const _HOME = 'HOME';
    const _MOBILE = 'MOBILE';
    const _PAGER = 'PAGER';
    const _TOLL_FREE = 'TOLL_FREE';
    const _WORK = 'WORK';
}
