<?php
namespace FedEx\DGDSService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identification of a FedEx operating company (transportation).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 */
class CarrierCodeType extends AbstractSimpleType
{
    const _FDXC = 'FDXC';
    const _FDXE = 'FDXE';
    const _FDXG = 'FDXG';
    const _FXCC = 'FXCC';
    const _FXFR = 'FXFR';
    const _FXSP = 'FXSP';
}
