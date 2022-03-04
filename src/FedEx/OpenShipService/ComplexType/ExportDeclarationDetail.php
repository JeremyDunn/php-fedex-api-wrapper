<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the Export Declaration.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property ShippingDocumentFormat $DocumentFormat
 * @property CustomerImageUsage[] $CustomerImageUsages

 */
class ExportDeclarationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ExportDeclarationDetail';

    /**
     * Specifies characteristics of a shipping document to be produced.
     *
     * @param ShippingDocumentFormat $documentFormat
     * @return $this
     */
    public function setDocumentFormat(ShippingDocumentFormat $documentFormat)
    {
        $this->values['DocumentFormat'] = $documentFormat;
        return $this;
    }

    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param CustomerImageUsage[] $customerImageUsages
     * @return $this
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->values['CustomerImageUsages'] = $customerImageUsages;
        return $this;
    }
}
