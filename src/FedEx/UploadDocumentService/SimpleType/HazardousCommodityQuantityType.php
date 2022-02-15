<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the measure of quantity to be validated against a prescribed limit.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class HazardousCommodityQuantityType extends AbstractSimpleType
{
    const _GROSS = 'GROSS';
    const _NET = 'NET';
}
