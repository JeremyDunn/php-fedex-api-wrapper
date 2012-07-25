<?php
namespace FedEx\RateService\SimpleType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class ChargeBasisLevelType
    extends AbstractSimpleType
{
    const _CURRENT_PACKAGE = 'CURRENT_PACKAGE';
    const _SUM_OF_PACKAGES = 'SUM_OF_PACKAGES';
}