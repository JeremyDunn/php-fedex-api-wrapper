<?php
namespace FedEx\DGLDService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates a FedEx Express operating region.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  List Dangerous Goods Service
 */
class ExpressRegionCode extends AbstractSimpleType
{
    const _APAC = 'APAC';
    const _CA = 'CA';
    const _EMEA = 'EMEA';
    const _LAC = 'LAC';
    const _US = 'US';
}
