<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShippingDocumentStorageDetailType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class ShippingDocumentStorageDetailType extends AbstractSimpleType
{
    const _ASYNC_SERVICE = 'ASYNC_SERVICE';
    const _LOCAL_FILE_SYSTEM = 'LOCAL_FILE_SYSTEM';
}
