<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackChargesPaymentClassificationType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackChargesPaymentClassificationType extends AbstractSimpleType
{
    const _DUTIES_AND_TAXES = 'DUTIES_AND_TAXES';
    const _TRANSPORTATION = 'TRANSPORTATION';
}
