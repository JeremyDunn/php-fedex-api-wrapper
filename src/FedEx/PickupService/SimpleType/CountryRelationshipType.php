<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Describes relationship between origin and destination countries.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CountryRelationshipType extends AbstractSimpleType
{
    const _DOMESTIC = 'DOMESTIC';
    const _INTERNATIONAL = 'INTERNATIONAL';
}
