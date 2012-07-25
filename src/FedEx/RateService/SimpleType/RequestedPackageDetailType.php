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
class RequestedPackageDetailType
    extends AbstractSimpleType
{
    const _INDIVIDUAL_PACKAGES = 'INDIVIDUAL_PACKAGES';
    const _PACKAGE_SUMMARY = 'PACKAGE_SUMMARY';
    const _PACKAGE_GROUPS = 'PACKAGE_GROUPS';
}