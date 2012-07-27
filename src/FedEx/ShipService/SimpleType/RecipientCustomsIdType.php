<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Type of Brazilian taxpayer identifier provided in Recipient/TaxPayerIdentification/Number. For shipments bound for Brazil this overrides the value in Recipient/TaxPayerIdentification/TinType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
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