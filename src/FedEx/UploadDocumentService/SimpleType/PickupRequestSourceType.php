<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PickupRequestSourceType
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class PickupRequestSourceType extends AbstractSimpleType
{
    const _AUTOMATION = 'AUTOMATION';
    const _CUSTOMER_SERVICE = 'CUSTOMER_SERVICE';
}
