<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackingIdType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class TrackingIdType extends AbstractSimpleType
{
    const _EXPRESS = 'EXPRESS';
    const _FEDEX = 'FEDEX';
    const _FREIGHT = 'FREIGHT';
    const _GROUND = 'GROUND';
    const _INTERNAL = 'INTERNAL';
    const _UNKNOWN = 'UNKNOWN';
    const _USPS = 'USPS';
}
