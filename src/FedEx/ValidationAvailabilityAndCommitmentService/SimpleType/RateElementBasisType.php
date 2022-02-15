<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Selects the value from a set of rate data to which the percentage is applied.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class RateElementBasisType extends AbstractSimpleType
{
    const _BASE_CHARGE = 'BASE_CHARGE';
    const _NET_CHARGE = 'NET_CHARGE';
    const _NET_CHARGE_EXCLUDING_TAXES = 'NET_CHARGE_EXCLUDING_TAXES';
    const _NET_FREIGHT = 'NET_FREIGHT';
}
