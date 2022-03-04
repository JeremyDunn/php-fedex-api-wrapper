<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * InternationalDocumentContentType
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class InternationalDocumentContentType extends AbstractSimpleType
{
    const _DOCUMENTS_ONLY = 'DOCUMENTS_ONLY';
    const _NON_DOCUMENTS = 'NON_DOCUMENTS';
}
