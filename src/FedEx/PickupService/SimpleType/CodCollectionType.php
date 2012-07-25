<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Identifies the type of funds FedEx should collect upon shipment delivery.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CodCollectionType
    extends AbstractSimpleType
{
    const _ANY = 'ANY';
    const _CASH = 'CASH';
    const _COMPANY_CHECK = 'COMPANY_CHECK';
    const _GUARANTEED_FUNDS = 'GUARANTEED_FUNDS';
    const _PERSONAL_CHECK = 'PERSONAL_CHECK';
}