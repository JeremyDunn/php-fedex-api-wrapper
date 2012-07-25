<?php
namespace FedEx\RateService\SimpleType;

/**
 * 
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class PickupRequestType
    extends AbstractSimpleType
{
    const _FUTURE_DAY = 'FUTURE_DAY';
    const _SAME_DAY = 'SAME_DAY';
}