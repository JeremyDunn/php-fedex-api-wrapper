<?php
namespace FedEx\AsyncService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Indicates a FedEx Express operating region.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  ASync Service
 */
class ExpressRegionCode extends AbstractSimpleType
{
    const _APAC = 'APAC';
    const _CA = 'CA';
    const _EMEA = 'EMEA';
    const _LAC = 'LAC';
    const _US = 'US';
}
