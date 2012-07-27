<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The Oversize classification for a package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class OversizeClassType
    extends AbstractSimpleType
{
    const _OVERSIZE_1 = 'OVERSIZE_1';
    const _OVERSIZE_2 = 'OVERSIZE_2';
    const _OVERSIZE_3 = 'OVERSIZE_3';
}