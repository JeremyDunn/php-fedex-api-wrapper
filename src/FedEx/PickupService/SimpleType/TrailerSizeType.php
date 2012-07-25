<?php
namespace FedEx\Pickup\SimpleType;

/**
 * Identifies the valid set of tractor tailer sizes supported by FedEx. This type is appropriate only for freight pickup requests.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class TrailerSizeType
    extends AbstractSimpleType
{
    const _TRAILER_28_FT = 'TRAILER_28_FT';
    const _TRAILER_48_FT = 'TRAILER_48_FT';
    const _TRAILER_53_FT = 'TRAILER_53_FT';
}