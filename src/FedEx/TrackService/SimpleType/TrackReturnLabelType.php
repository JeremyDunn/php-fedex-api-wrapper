<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackReturnLabelType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackReturnLabelType extends AbstractSimpleType
{
    const _EMAIL = 'EMAIL';
    const _PRINT = 'PRINT';
}
