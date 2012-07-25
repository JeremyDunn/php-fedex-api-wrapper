<?php
namespace FedEx\LocatorService\SimpleType;

/**
 * The type of Redirect to Hold FedEx location.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 */
class RedirectToHoldLocationType
    extends AbstractSimpleType
{
    const _EXPRESS = 'EXPRESS';
    const _GROUND = 'GROUND';
    const _HOMEDELIVERY = 'HOMEDELIVERY';
}