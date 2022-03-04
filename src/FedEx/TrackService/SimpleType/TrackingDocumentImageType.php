<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackingDocumentImageType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackingDocumentImageType extends AbstractSimpleType
{
    const _PDF = 'PDF';
    const _PNG = 'PNG';
}
