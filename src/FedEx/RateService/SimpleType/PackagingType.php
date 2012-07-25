<?php
namespace FedEx\RateService\SimpleType;

/**
 * Identifies the packaging used by the requestor for the package. See PackagingType for list of valid enumerated values.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class PackagingType
    extends AbstractSimpleType
{
    const _FEDEX_10KG_BOX = 'FEDEX_10KG_BOX';
    const _FEDEX_25KG_BOX = 'FEDEX_25KG_BOX';
    const _FEDEX_BOX = 'FEDEX_BOX';
    const _FEDEX_ENVELOPE = 'FEDEX_ENVELOPE';
    const _FEDEX_PAK = 'FEDEX_PAK';
    const _FEDEX_TUBE = 'FEDEX_TUBE';
    const _YOUR_PACKAGING = 'YOUR_PACKAGING';
}