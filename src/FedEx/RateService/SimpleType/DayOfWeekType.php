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
class DayOfWeekType
    extends AbstractSimpleType
{
    const _FRI = 'FRI';
    const _MON = 'MON';
    const _SAT = 'SAT';
    const _SUN = 'SUN';
    const _THU = 'THU';
    const _TUE = 'TUE';
    const _WED = 'WED';
}