<?php
namespace FedEx\PackageMovementInformationService\SimpleType;

/**
 * Identification of a FedEx operating company (transportation).
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class CarrierCodeType
    extends AbstractSimpleType
{
    const _FDXE = 'FDXE';
    const _FDXG = 'FDXG';
}