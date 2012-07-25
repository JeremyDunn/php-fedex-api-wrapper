<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Type of Brazilian taxpayer identifier provided in Recipient/TaxPayerIdentification/Number. For shipments bound for Brazil this overrides the value in Recipient/TaxPayerIdentification/TinType
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RecipientCustomsIdType
    extends AbstractSimpleType
{
    const _COMPANY = 'COMPANY';
    const _INDIVIDUAL = 'INDIVIDUAL';
    const _PASSPORT = 'PASSPORT';
}