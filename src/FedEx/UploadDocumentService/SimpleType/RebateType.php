<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RebateType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class RebateType extends AbstractSimpleType
{
    const _BONUS = 'BONUS';
    const _EARNED = 'EARNED';
    const _OTHER = 'OTHER';
}
