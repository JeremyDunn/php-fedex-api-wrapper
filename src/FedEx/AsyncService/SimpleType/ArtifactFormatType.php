<?php
namespace FedEx\AsyncService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * Identifies the format of the artifact.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  ASync Service
 */
class ArtifactFormatType extends AbstractSimpleType
{
    const _BINARY = 'BINARY';
    const _DOC = 'DOC';
    const _EPL2 = 'EPL2';
    const _PDF = 'PDF';
    const _PNG = 'PNG';
    const _RTF = 'RTF';
    const _TEXT = 'TEXT';
    const _XML = 'XML';
    const _ZPLII = 'ZPLII';
}
