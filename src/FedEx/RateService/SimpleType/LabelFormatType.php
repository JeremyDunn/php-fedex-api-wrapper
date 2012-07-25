<?php
namespace FedEx\RateService\SimpleType;

/**
 * Specifies the type of label to be returned.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class LabelFormatType
    extends AbstractSimpleType
{
    const _COMMON2D = 'COMMON2D';
    const _LABEL_DATA_ONLY = 'LABEL_DATA_ONLY';
    const _MAILROOM = 'MAILROOM';
    const _NO_LABEL = 'NO_LABEL';
    const _OPERATIONAL_LABEL = 'OPERATIONAL_LABEL';
    const _PRE_COMMON2D = 'PRE_COMMON2D';
}