<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * These values control the level of validation performed on certain pickup requests.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupServiceLevelType extends AbstractSimpleType
{
    const _EXTERNAL_EDITS = 'EXTERNAL_EDITS';
    const _INTERNAL_EDITS = 'INTERNAL_EDITS';
    const _IVRS_EDITS = 'IVRS_EDITS';
    const _IVR_WITH_BIOMETRIC_AUTHENTICATION = 'IVR_WITH_BIOMETRIC_AUTHENTICATION';
    const _TAG_EDITS = 'TAG_EDITS';
    const _TRUSTED_PROXY = 'TRUSTED_PROXY';
}
