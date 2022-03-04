<?php
namespace FedEx\UploadDocumentService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * CustomLabelCoordinateUnits
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class CustomLabelCoordinateUnits extends AbstractSimpleType
{
    const _MILS = 'MILS';
    const _PIXELS = 'PIXELS';
}
