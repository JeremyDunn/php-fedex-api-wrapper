<?php
namespace FedEx\RateService\SimpleType;

/**
 * Specifies the type of service scheduling offered from a Freight or National Freight Service Center to a customer-supplied address.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class FreightServiceSchedulingType
    extends AbstractSimpleType
{
    const _LIMITED = 'LIMITED';
    const _STANDARD = 'STANDARD';
    const _WILL_CALL = 'WILL_CALL';
}