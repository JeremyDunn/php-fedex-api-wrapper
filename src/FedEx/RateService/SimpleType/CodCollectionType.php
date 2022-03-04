<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the type of funds FedEx should collect upon shipment delivery.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CodCollectionType extends AbstractSimpleType
{
    const _ANY = 'ANY';
    const _CASH = 'CASH';
    const _GUARANTEED_FUNDS = 'GUARANTEED_FUNDS';
}
