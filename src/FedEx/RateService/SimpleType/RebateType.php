<?php
namespace FedEx\RateService\SimpleType;

/**
 * Identifies the type of discount applied to the shipment.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RebateType
    extends AbstractSimpleType
{
    const _BONUS = 'BONUS';
    const _EARNED = 'EARNED';
    const _OTHER = 'OTHER';
}