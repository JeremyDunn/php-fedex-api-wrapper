<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackingDocumentDispositionType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackingDocumentDispositionType extends AbstractSimpleType
{
    const _EMAIL = 'EMAIL';
    const _FAX = 'FAX';
    const _RETURN = 'RETURN';
}
