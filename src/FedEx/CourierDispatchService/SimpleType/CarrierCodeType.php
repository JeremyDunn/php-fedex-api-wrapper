<?php
namespace FedEx\CourierDispatchService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identification of a FedEx operating company (transportation).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 */
class CarrierCodeType
    extends AbstractSimpleType
{
    const _FDXE = 'FDXE';
    const _FDXG = 'FDXG';
    const _FDXC = 'FDXC';
    const _FXCC = 'FXCC';
    const _FXFR = 'FXFR';
}