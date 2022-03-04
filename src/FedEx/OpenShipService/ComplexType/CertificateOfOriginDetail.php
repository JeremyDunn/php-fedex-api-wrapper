<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...)
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property ShippingDocumentFormat $DocumentFormat
 * @property CustomerImageUsage[] $CustomerImageUsages

 */
class CertificateOfOriginDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CertificateOfOriginDetail';

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
