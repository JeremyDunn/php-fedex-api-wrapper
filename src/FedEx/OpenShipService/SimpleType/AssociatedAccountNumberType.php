<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * This enumeration represents a kind of "legacy" account number from a FedEx operating entity.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class AssociatedAccountNumberType extends AbstractSimpleType
{
    const _FEDEX_EXPRESS = 'FEDEX_EXPRESS';
    const _FEDEX_FREIGHT = 'FEDEX_FREIGHT';
    const _FEDEX_GROUND = 'FEDEX_GROUND';
    const _FEDEX_OFFICE = 'FEDEX_OFFICE';
}
