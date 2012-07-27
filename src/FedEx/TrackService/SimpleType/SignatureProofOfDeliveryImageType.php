<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the set of SPOD image types.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class SignatureProofOfDeliveryImageType
    extends AbstractSimpleType
{
    const _PDF = 'PDF';
}