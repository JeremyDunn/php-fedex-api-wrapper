<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PackagingType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PackagingType extends AbstractSimpleType
{
    const _FEDEX_10KG_BOX = 'FEDEX_10KG_BOX';
    const _FEDEX_25KG_BOX = 'FEDEX_25KG_BOX';
    const _FEDEX_BOX = 'FEDEX_BOX';
    const _FEDEX_ENVELOPE = 'FEDEX_ENVELOPE';
    const _FEDEX_EXTRA_LARGE_BOX = 'FEDEX_EXTRA_LARGE_BOX';
    const _FEDEX_LARGE_BOX = 'FEDEX_LARGE_BOX';
    const _FEDEX_MEDIUM_BOX = 'FEDEX_MEDIUM_BOX';
    const _FEDEX_PAK = 'FEDEX_PAK';
    const _FEDEX_SMALL_BOX = 'FEDEX_SMALL_BOX';
    const _FEDEX_TUBE = 'FEDEX_TUBE';
    const _YOUR_PACKAGING = 'YOUR_PACKAGING';
}
