<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the type of FedEx distribution location.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class FedExDistributionLocationType extends AbstractSimpleType
{
    const _CUSTOMER_SPECIFIED = 'CUSTOMER_SPECIFIED';
    const _FEDEX_EXPRESS_FREIGHT_RAMP = 'FEDEX_EXPRESS_FREIGHT_RAMP';
    const _FEDEX_EXPRESS_STATION = 'FEDEX_EXPRESS_STATION';
    const _FEDEX_GROUND_TERMINAL = 'FEDEX_GROUND_TERMINAL';
}
