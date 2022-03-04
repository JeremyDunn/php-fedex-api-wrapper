<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print a custom consolidation document.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property ShippingDocumentFormat $Format
 * @property \FedEx\OpenShipService\SimpleType\LabelPrintingOrientationType|string $LabelPrintingOrientation
 * @property \FedEx\OpenShipService\SimpleType\LabelRotationType|string $LabelRotation
 * @property string $SpecificationId
 * @property string $CustomDocumentIdentifier
 * @property DocTabContent $DocTabContent
 * @property CustomerImageUsage[] $CustomerImageUsages
 * @property string $SignatureName

 */
class CustomConsolidationDocumentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomConsolidationDocumentDetail';

    /**
     * Set Format
     *
     * @param ShippingDocumentFormat $format
     * @return $this
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->values['Format'] = $format;
        return $this;
    }

    /**
     * Applicable only to documents produced on thermal printers with roll stock.
     *
     * @param \FedEx\OpenShipService\SimpleType\LabelPrintingOrientationType|string $labelPrintingOrientation
     * @return $this
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation)
    {
        $this->values['LabelPrintingOrientation'] = $labelPrintingOrientation;
        return $this;
    }

    /**
     * Applicable only to documents produced on thermal printers with roll stock.
     *
     * @param \FedEx\OpenShipService\SimpleType\LabelRotationType|string $labelRotation
     * @return $this
     */
    public function setLabelRotation($labelRotation)
    {
        $this->values['LabelRotation'] = $labelRotation;
        return $this;
    }

    /**
     * Identifies the formatting specification used to construct this custom document.
     *
     * @param string $specificationId
     * @return $this
     */
    public function setSpecificationId($specificationId)
    {
        $this->values['SpecificationId'] = $specificationId;
        return $this;
    }

    /**
     * Identifies the individual document specified by the client.
     *
     * @param string $customDocumentIdentifier
     * @return $this
     */
    public function setCustomDocumentIdentifier($customDocumentIdentifier)
    {
        $this->values['CustomDocumentIdentifier'] = $customDocumentIdentifier;
        return $this;
    }

    /**
     * If provided, thermal documents will include specified doc tab content. If omitted, document will be produced without doc tab content.
     *
     * @param DocTabContent $docTabContent
     * @return $this
     */
    public function setDocTabContent(DocTabContent $docTabContent)
    {
        $this->values['DocTabContent'] = $docTabContent;
        return $this;
    }

    /**
     * Specifies the usage and identification of a customer supplied image to be used on this document.
     *
     * @param CustomerImageUsage[] $customerImageUsages
     * @return $this
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->values['CustomerImageUsages'] = $customerImageUsages;
        return $this;
    }

    /**
     * Name of the person signing the document.
     *
     * @param string $signatureName
     * @return $this
     */
    public function setSignatureName($signatureName)
    {
        $this->values['SignatureName'] = $signatureName;
        return $this;
    }
}
