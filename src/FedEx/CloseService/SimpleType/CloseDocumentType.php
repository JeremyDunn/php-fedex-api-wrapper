<?php
namespace FedEx\CloseService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CloseDocumentType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class CloseDocumentType extends AbstractSimpleType
{
    const _COD_REPORT = 'COD_REPORT';
    const _DETAILED_DELIVERY_MANIFEST = 'DETAILED_DELIVERY_MANIFEST';
    const _HAZARDOUS_MATERIALS_CERTIFICATION = 'HAZARDOUS_MATERIALS_CERTIFICATION';
    const _MANIFEST = 'MANIFEST';
    const _MULTIWEIGHT_REPORT = 'MULTIWEIGHT_REPORT';
    const _OP_950 = 'OP_950';
}
