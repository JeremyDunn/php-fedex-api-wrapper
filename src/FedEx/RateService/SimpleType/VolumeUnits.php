<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Units of three-dimensional volume/cubic measure.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class VolumeUnits extends AbstractSimpleType
{
    const _CUBIC_FT = 'CUBIC_FT';
    const _CUBIC_M = 'CUBIC_M';
}
