<?php
namespace FedEx\LocatorService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The type of Redirect to Hold FedEx location.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
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