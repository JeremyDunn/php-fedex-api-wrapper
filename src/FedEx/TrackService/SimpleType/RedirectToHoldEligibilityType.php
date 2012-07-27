<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class RedirectToHoldEligibilityType
    extends AbstractSimpleType
{
    const _ELIGIBLE = 'ELIGIBLE';
    const _INELIGIBLE = 'INELIGIBLE';
    const _POSSIBLY_ELIGIBLE = 'POSSIBLY_ELIGIBLE';
}