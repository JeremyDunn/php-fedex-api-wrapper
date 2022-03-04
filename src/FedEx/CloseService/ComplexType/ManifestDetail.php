<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ManifestDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property CloseDocumentFormat $Format

 */
class ManifestDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ManifestDetail';

    /**
     * Set Format
     *
     * @param CloseDocumentFormat $format
     * @return $this
     */
    public function setFormat(CloseDocumentFormat $format)
    {
        $this->values['Format'] = $format;
        return $this;
    }
}
