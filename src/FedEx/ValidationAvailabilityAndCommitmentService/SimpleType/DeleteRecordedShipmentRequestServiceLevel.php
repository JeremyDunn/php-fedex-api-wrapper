<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * DeleteRecordedShipmentRequestServiceLevel
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class DeleteRecordedShipmentRequestServiceLevel extends AbstractSimpleType
{
    const _DELETE_ALL_PACKAGES = 'DELETE_ALL_PACKAGES';
    const _DELETE_ENTIRE_CONSOLIDATION = 'DELETE_ENTIRE_CONSOLIDATION';
    const _DELETE_ONE_PACKAGE = 'DELETE_ONE_PACKAGE';
}
