<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ConsolidationDocument
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\ReturnedConsolidationDocumentType|string $Type
 * @property \FedEx\OpenShipService\SimpleType\ShippingDocumentDispositionType|string $ShippingDocumentDisposition
 * @property string $AccessReference
 * @property \FedEx\OpenShipService\SimpleType\ShippingDocumentImageType|string $ImageType
 * @property int $Resolution
 * @property int $CopiesToPrint
 * @property ShippingDocumentPart[] $Parts

 */
class ConsolidationDocument extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ConsolidationDocument';

    /**
     * Identifies the type of business document in this instance.
     *
     * @param \FedEx\OpenShipService\SimpleType\ReturnedConsolidationDocumentType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set ShippingDocumentDisposition
     *
     * @param \FedEx\OpenShipService\SimpleType\ShippingDocumentDispositionType|string $shippingDocumentDisposition
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
     * Specifies the image type of the consoldiation document.
     *
     * @param \FedEx\OpenShipService\SimpleType\ShippingDocumentImageType|string $imageType
     * @return $this
     */
    public function setImageType($imageType)
    {
        $this->values['ImageType'] = $imageType;
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
