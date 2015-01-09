<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the Export Declaration.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ExportDeclarationDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ExportDeclarationDetail';

    /**
     * Specifies characteristics of a shipping document to be produced.
     *
     * @param ShippingDocumentFormat $documentFormat
     * @return ExportDeclarationDetail
     */
    public function setDocumentFormat(ShippingDocumentFormat $documentFormat)
    {
        $this->DocumentFormat = $documentFormat;
        return $this;
    }
    
    /**
     * Returns Specifies characteristics of a shipping document to be produced.
     *
     * @return ShippingDocumentFormat
     */
    public function getDocumentFormat()
    {
        return $this->DocumentFormat;
    }
    
    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @param CustomerImageUsage[] $customerImageUsages
     * @return ExportDeclarationDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    
    /**
     * Returns Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * @return CustomerImageUsage[]
     */
    public function getCustomerImageUsages()
    {
        return $this->CustomerImageUsages;
    }
    

    
}