<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CreditCardAuthorizationType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class CreditCardAuthorizationType extends AbstractSimpleType
{
    const _AUTHORIZE_NON_ACCOUNT = 'AUTHORIZE_NON_ACCOUNT';
    const _AUTHORIZE_WITH_ACCOUNT = 'AUTHORIZE_WITH_ACCOUNT';
    const _VERIFY_WITH_ACCOUNT = 'VERIFY_WITH_ACCOUNT';
}
