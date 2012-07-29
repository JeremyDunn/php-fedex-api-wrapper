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
class CloseDocumentType
    extends AbstractSimpleType
{
    const _COD_REPORT = 'COD_REPORT';
    const _MANIFEST = 'MANIFEST';
    const _MULTIWEIGHT_REPORT = 'MULTIWEIGHT_REPORT';
    const _OP_950 = 'OP_950';
}