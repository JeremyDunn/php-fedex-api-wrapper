<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Describes relationship between origin and destination countries.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CountryRelationshipType
    extends AbstractSimpleType
{
    const _DOMESTIC = 'DOMESTIC';
    const _INTERNATIONAL = 'INTERNATIONAL';
}