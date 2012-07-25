<?php
namespace FedEx\TrackService\SimpleType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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