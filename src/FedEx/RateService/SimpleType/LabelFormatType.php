<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Specifies the type of label to be returned.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
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