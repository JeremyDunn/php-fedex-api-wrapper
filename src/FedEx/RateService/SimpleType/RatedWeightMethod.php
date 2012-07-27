<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * The method used to calculate the weight to be used in rating the package..
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class RatedWeightMethod
    extends AbstractSimpleType
{
    const _ACTUAL = 'ACTUAL';
    const _AVERAGE_PACKAGE_WEIGHT_MINIMUM = 'AVERAGE_PACKAGE_WEIGHT_MINIMUM';
    const _BALLOON = 'BALLOON';
    const _DIM = 'DIM';
    const _FREIGHT_MINIMUM = 'FREIGHT_MINIMUM';
    const _MIXED = 'MIXED';
    const _OVERSIZE = 'OVERSIZE';
    const _OVERSIZE_1 = 'OVERSIZE_1';
    const _OVERSIZE_2 = 'OVERSIZE_2';
    const _OVERSIZE_3 = 'OVERSIZE_3';
    const _PACKAGING_MINIMUM = 'PACKAGING_MINIMUM';
    const _WEIGHT_BREAK = 'WEIGHT_BREAK';
}