<?php
namespace FedEx\RateService\SimpleType;

/**
 * Identifies whether or not the products being shipped are required to be accessible during delivery.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class DangerousGoodsAccessibilityType
    extends AbstractSimpleType
{
    const _ACCESSIBLE = 'ACCESSIBLE';
    const _INACCESSIBLE = 'INACCESSIBLE';
}