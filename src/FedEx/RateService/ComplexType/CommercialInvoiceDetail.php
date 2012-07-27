<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class CommercialInvoiceDetail
    extends AbstractComplexType
{
    protected $_name = 'CommercialInvoiceDetail';

    /**
     * 
     *
     * @param ShippingDocumentFormat $Format
     * return CommercialInvoiceDetail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Specifies the usage and identification of a customer supplied image to be used on this document.
     *
     * @param array[CustomerImageUsage] $CustomerImageUsages
     * return CommercialInvoiceDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    

    
}