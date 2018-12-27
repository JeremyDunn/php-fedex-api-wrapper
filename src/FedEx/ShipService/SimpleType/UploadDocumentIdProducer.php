<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the application that is responsible for managing the document id.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class UploadDocumentIdProducer extends AbstractSimpleType
{
    const _CUSTOMER = 'CUSTOMER';
}
