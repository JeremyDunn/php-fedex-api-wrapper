<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomsOptionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomsOptionType extends AbstractSimpleType
{
    const _COURTESY_RETURN_LABEL = 'COURTESY_RETURN_LABEL';
    const _EXHIBITION_TRADE_SHOW = 'EXHIBITION_TRADE_SHOW';
    const _FAULTY_ITEM = 'FAULTY_ITEM';
    const _FOLLOWING_REPAIR = 'FOLLOWING_REPAIR';
    const _FOR_REPAIR = 'FOR_REPAIR';
    const _ITEM_FOR_LOAN = 'ITEM_FOR_LOAN';
    const _OTHER = 'OTHER';
    const _REJECTED = 'REJECTED';
    const _REPLACEMENT = 'REPLACEMENT';
    const _TRIAL = 'TRIAL';
}
