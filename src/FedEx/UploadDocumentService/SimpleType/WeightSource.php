<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * WeightSource
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class WeightSource extends AbstractSimpleType
{
    const _MANUAL = 'MANUAL';
    const _SCALE = 'SCALE';
}
