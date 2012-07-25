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
class FreightGuaranteeType
    extends AbstractSimpleType
{
    const _GUARANTEED_DATE = 'GUARANTEED_DATE';
    const _GUARANTEED_MORNING = 'GUARANTEED_MORNING';
}