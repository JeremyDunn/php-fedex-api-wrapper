<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackReturnLabelType
    extends AbstractSimpleType
{
    const _EMAIL = 'EMAIL';
    const _PRINT = 'PRINT';
}