<?php
namespace FedEx\Pickup\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Select the type of rate from which the element is to be selected.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class RateTypeBasisType
    extends AbstractSimpleType
{
    const _ACCOUNT = 'ACCOUNT';
    const _ACTUAL = 'ACTUAL';
    const _CURRENT = 'CURRENT';
    const _CUSTOM = 'CUSTOM';
    const _LIST = 'LIST';
}