<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * BarcodeEntryType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class BarcodeEntryType extends AbstractSimpleType
{
    const _MANUAL_ENTRY = 'MANUAL_ENTRY';
    const _SCAN = 'SCAN';
}
