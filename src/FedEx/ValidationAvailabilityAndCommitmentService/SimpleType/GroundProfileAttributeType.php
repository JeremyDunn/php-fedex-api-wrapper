<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * GroundProfileAttributeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class GroundProfileAttributeType extends AbstractSimpleType
{
    const _AGENT_AUTHORITY_ON_FILE = 'AGENT_AUTHORITY_ON_FILE';
    const _AUTHORIZED_COLLECT_RECIPIENT = 'AUTHORIZED_COLLECT_RECIPIENT';
    const _AUTOMATIC_PROOF_OF_DELIVERY = 'AUTOMATIC_PROOF_OF_DELIVERY';
    const _BROKER_INCLUSIVE_ALLOWED = 'BROKER_INCLUSIVE_ALLOWED';
    const _COD = 'COD';
    const _ELECTRONIC_COD = 'ELECTRONIC_COD';
    const _NON_RESIDENT_IMPORTER = 'NON_RESIDENT_IMPORTER';
}
