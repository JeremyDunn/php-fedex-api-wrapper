<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Identifies the valid set of truck types supported by FedEx. This type is appropriate only for freight pickup requests.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class TruckType
    extends AbstractSimpleType
{
    const _DROP_TRAILER_AGREEMENT = 'DROP_TRAILER_AGREEMENT';
    const _LIFTGATE = 'LIFTGATE';
    const _TRACTOR_TRAILER_ACCESS = 'TRACTOR_TRAILER_ACCESS';
}