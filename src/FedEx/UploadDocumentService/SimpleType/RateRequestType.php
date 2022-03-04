<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateRequestType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class RateRequestType extends AbstractSimpleType
{
    const _ACCOUNT = 'ACCOUNT';
    const _CUSTOM = 'CUSTOM';
    const _INCENTIVE = 'INCENTIVE';
    const _LIST = 'LIST';
    const _NONE = 'NONE';
    const _PREFERRED = 'PREFERRED';
    const _RATED = 'RATED';
    const _RETAIL = 'RETAIL';
}
