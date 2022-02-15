<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies features of service requested for a Transborder Distribution shipment.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class TransborderDistributionSpecialServiceType extends AbstractSimpleType
{
    const _FEDEX_LTL = 'FEDEX_LTL';
}
