<?php
namespace FedEx\Pickup\SimpleType;

/**
 * This enumeration represents a kind of "legacy" account number from a FedEx operating entity.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class AssociatedAccountNumberType
    extends AbstractSimpleType
{
    const _FEDEX_EXPRESS = 'FEDEX_EXPRESS';
    const _FEDEX_FREIGHT = 'FEDEX_FREIGHT';
    const _FEDEX_GROUND = 'FEDEX_GROUND';
    const _FEDEX_NATIONAL_FREIGHT = 'FEDEX_NATIONAL_FREIGHT';
    const _FEDEX_OFFICE = 'FEDEX_OFFICE';
}