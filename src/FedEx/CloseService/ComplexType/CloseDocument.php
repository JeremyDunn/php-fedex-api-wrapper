<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CloseDocument
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property \FedEx\CloseService\SimpleType\CloseDocumentType|string $Type
 * @property string $ShippingCycle
 * @property \FedEx\CloseService\SimpleType\ShippingDocumentDispositionType|string $ShippingDocumentDisposition
 * @property string $AccessReference
 * @property int $Resolution
 * @property int $CopiesToPrint
 * @property ShippingDocumentPart[] $Parts

 */
class CloseDocument extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CloseDocument';

    /**
     * Set Type
     *
     * @param \FedEx\CloseService\SimpleType\CloseDocumentType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Identifies the shipping cycle covered by the content of this document.
     *
     * @param string $shippingCycle
     * @return $this
     */
    public function setShippingCycle($shippingCycle)
    {
        $this->values['ShippingCycle'] = $shippingCycle;
        return $this;
    }

    /**
     * Set ShippingDocumentDisposition
     *
     * @param \FedEx\CloseService\SimpleType\ShippingDocumentDispositionType|string $shippingDocumentDisposition
     * @return $this
     */
    public function setShippingDocumentDisposition($shippingDocumentDisposition)
    {
        $this->values['ShippingDocumentDisposition'] = $shippingDocumentDisposition;
        return $this;
    }

    /**
     * The name under which a STORED or DEFERRED document is written.
     *
     * @param string $accessReference
     * @return $this
     */
    public function setAccessReference($accessReference)
    {
        $this->values['AccessReference'] = $accessReference;
        return $this;
    }

    /**
     * Specifies the image resolution in DPI (dots per inch).
     *
     * @param int $resolution
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->values['Resolution'] = $resolution;
        return $this;
    }

    /**
     * Can be zero for documents whose disposition implies that no content is included.
     *
     * @param int $copiesToPrint
     * @return $this
     */
    public function setCopiesToPrint($copiesToPrint)
    {
        $this->values['CopiesToPrint'] = $copiesToPrint;
        return $this;
    }

    /**
     * One or more document parts which make up a single logical document, such as multiple pages of a single form.
     *
     * @param ShippingDocumentPart[] $parts
     * @return $this
     */
    public function setParts(array $parts)
    {
        $this->values['Parts'] = $parts;
        return $this;
    }
}
