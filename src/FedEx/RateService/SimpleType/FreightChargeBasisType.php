<?php
namespace FedEx\RateService\SimpleType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class FreightChargeBasisType
    extends AbstractSimpleType
{
    const _CWT = 'CWT';
    const _FLAT = 'FLAT';
    const _MINIMUM = 'MINIMUM';
}