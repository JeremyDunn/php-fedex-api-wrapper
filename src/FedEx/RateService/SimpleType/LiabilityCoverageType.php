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
class LiabilityCoverageType
    extends AbstractSimpleType
{
    const _NEW = 'NEW';
    const _USED_OR_RECONDITIONED = 'USED_OR_RECONDITIONED';
}