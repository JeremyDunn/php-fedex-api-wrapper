<?php
namespace FedEx\RateService\SimpleType;

/**
 * Identifies the type of funds FedEx should collect upon shipment delivery.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class CodCollectionType
    extends AbstractSimpleType
{
    const _ANY = 'ANY';
    const _CASH = 'CASH';
    const _GUARANTEED_FUNDS = 'GUARANTEED_FUNDS';
}