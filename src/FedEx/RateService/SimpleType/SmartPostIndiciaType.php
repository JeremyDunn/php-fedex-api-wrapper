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
class SmartPostIndiciaType
    extends AbstractSimpleType
{
    const _MEDIA_MAIL = 'MEDIA_MAIL';
    const _PARCEL_RETURN = 'PARCEL_RETURN';
    const _PARCEL_SELECT = 'PARCEL_SELECT';
    const _PRESORTED_BOUND_PRINTED_MATTER = 'PRESORTED_BOUND_PRINTED_MATTER';
    const _PRESORTED_STANDARD = 'PRESORTED_STANDARD';
}