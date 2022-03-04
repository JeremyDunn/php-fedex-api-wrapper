<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * EmailOptionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class EmailOptionType extends AbstractSimpleType
{
    const _PRODUCE_PAPERLESS_SHIPPING_FORMAT = 'PRODUCE_PAPERLESS_SHIPPING_FORMAT';
    const _SUPPRESS_ACCESS_EMAILS = 'SUPPRESS_ACCESS_EMAILS';
    const _SUPPRESS_ADDITIONAL_LANGUAGES = 'SUPPRESS_ADDITIONAL_LANGUAGES';
}
