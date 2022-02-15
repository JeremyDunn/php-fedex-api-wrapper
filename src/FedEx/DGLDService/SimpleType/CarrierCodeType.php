<?php
namespace FedEx\DGLDService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identification of a FedEx operating company (transportation).
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  List Dangerous Goods Service
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
