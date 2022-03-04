<?php
namespace FedEx\DGDSService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * This attribute type identifies characteristics of a dangerous goods regulation that influence how FedEx systems process dangerous goods shipments.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 */
class DangerousGoodsRegulationAttributeType extends AbstractSimpleType
{
    const _DRY_ICE_DECLARATION_REQUIRED = 'DRY_ICE_DECLARATION_REQUIRED';
}
