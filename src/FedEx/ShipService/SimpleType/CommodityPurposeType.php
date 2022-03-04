<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CommodityPurposeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CommodityPurposeType extends AbstractSimpleType
{
    const _BUSINESS = 'BUSINESS';
    const _CONSUMER = 'CONSUMER';
}
