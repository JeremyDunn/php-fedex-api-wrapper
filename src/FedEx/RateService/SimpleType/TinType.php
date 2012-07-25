<?php
namespace FedEx\RateService\SimpleType;

/**
 * Identifies the category of the taxpayer identification number.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class TinType
    extends AbstractSimpleType
{
    const _BUSINESS_NATIONAL = 'BUSINESS_NATIONAL';
    const _BUSINESS_STATE = 'BUSINESS_STATE';
    const _PERSONAL_NATIONAL = 'PERSONAL_NATIONAL';
    const _PERSONAL_STATE = 'PERSONAL_STATE';
}