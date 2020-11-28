<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * SecondaryBarcodeType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 */
class SecondaryBarcodeType extends AbstractSimpleType
{
    const _COMMON_2D = 'COMMON_2D';
    const _NONE = 'NONE';
    const _SSCC_18 = 'SSCC_18';
    const _USPS = 'USPS';
}
