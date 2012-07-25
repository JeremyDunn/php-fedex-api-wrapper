<?php
namespace FedEx\CloseService\SimpleType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
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