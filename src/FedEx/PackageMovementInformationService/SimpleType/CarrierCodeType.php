<?php
namespace FedEx\PackageMovementInformationService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identification of a FedEx operating company (transportation).
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class CarrierCodeType extends AbstractSimpleType
{
    const _FDXE = 'FDXE';
    const _FDXG = 'FDXG';
}
