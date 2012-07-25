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
class CloseReportType
    extends AbstractSimpleType
{
    const _ALL = 'ALL';
    const _COD = 'COD';
    const _HAZMAT = 'HAZMAT';
    const _MANIFEST = 'MANIFEST';
    const _MULTIWEIGHT = 'MULTIWEIGHT';
}