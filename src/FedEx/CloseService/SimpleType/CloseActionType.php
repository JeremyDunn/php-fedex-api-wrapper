<?php
namespace FedEx\CloseService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CloseActionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class CloseActionType extends AbstractSimpleType
{
    const _CLOSE = 'CLOSE';
    const _PREVIEW_CLOSE_DOCUMENTS = 'PREVIEW_CLOSE_DOCUMENTS';
    const _REPRINT_CLOSE_DOCUMENTS = 'REPRINT_CLOSE_DOCUMENTS';
}
