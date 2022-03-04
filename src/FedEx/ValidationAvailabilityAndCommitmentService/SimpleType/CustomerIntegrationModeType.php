<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The Customer Integration Mode Type is intended to provide clients the ability to know how new products like special services can be supported. Some special services are STANDARD and can be supported with just the special service type in the request. CUSTOM special services will require the client application to send more information. For example, HOLD_AT_LOCATION requires the holdAtLocationDetail to be populated.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class CustomerIntegrationModeType extends AbstractSimpleType
{
    const _CUSTOM = 'CUSTOM';
    const _STANDARD = 'STANDARD';
}
