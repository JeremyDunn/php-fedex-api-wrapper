<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * SurchargeLevelType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class SurchargeLevelType extends AbstractSimpleType
{
    const _PACKAGE = 'PACKAGE';
    const _SHIPMENT = 'SHIPMENT';
}
