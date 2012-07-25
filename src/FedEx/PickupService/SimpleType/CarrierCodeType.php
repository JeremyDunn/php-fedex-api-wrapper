<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Identification of a FedEx operating company (transportation).
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CarrierCodeType
    extends AbstractSimpleType
{
    const _FDXC = 'FDXC';
    const _FDXE = 'FDXE';
    const _FDXG = 'FDXG';
    const _FXCC = 'FXCC';
    const _FXFR = 'FXFR';
    const _FXSP = 'FXSP';
}