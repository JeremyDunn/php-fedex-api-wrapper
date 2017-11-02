<?php
namespace FedEx\DGLDService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the source of regulation for hazardous commodity data.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  List Dangerous Goods Service
 */
class HazardousCommodityRegulationType extends AbstractSimpleType
{
    const _ADR = 'ADR';
    const _DOT = 'DOT';
    const _IATA = 'IATA';
    const _ORMD = 'ORMD';
}
