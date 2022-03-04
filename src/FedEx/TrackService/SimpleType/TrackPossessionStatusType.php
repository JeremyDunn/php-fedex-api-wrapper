<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackPossessionStatusType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackPossessionStatusType extends AbstractSimpleType
{
    const _BROKER = 'BROKER';
    const _CARRIER = 'CARRIER';
    const _CUSTOMS = 'CUSTOMS';
    const _RECIPIENT = 'RECIPIENT';
    const _SHIPPER = 'SHIPPER';
    const _SPLIT_STATUS = 'SPLIT_STATUS';
    const _TRANSFER_PARTNER = 'TRANSFER_PARTNER';
}
