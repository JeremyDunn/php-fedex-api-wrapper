<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * SignatureProofOfDeliveryImageType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class SignatureProofOfDeliveryImageType extends AbstractSimpleType
{
    const _PDF = 'PDF';
    const _PNG = 'PNG';
}
