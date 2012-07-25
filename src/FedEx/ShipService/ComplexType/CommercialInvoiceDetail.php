<?php
namespace FedEx\ShipService\ComplexType;

/**
 * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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