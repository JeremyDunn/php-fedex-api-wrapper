<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Selects the value from a set of rate data to which the percentage is applied.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RateElementBasisType extends AbstractSimpleType
{
    const _BASE_CHARGE = 'BASE_CHARGE';
    const _NET_CHARGE = 'NET_CHARGE';
    const _NET_CHARGE_EXCLUDING_TAXES = 'NET_CHARGE_EXCLUDING_TAXES';
    const _NET_FREIGHT = 'NET_FREIGHT';
}
