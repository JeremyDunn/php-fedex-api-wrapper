<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TaxType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class TaxType extends AbstractSimpleType
{
    const _EXPORT = 'EXPORT';
    const _GST = 'GST';
    const _HST = 'HST';
    const _INTRACOUNTRY = 'INTRACOUNTRY';
    const _OTHER = 'OTHER';
    const _PST = 'PST';
    const _VAT = 'VAT';
}
