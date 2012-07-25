<?php
namespace FedEx\CloseService\ComplexType;

/**
 * Specifies printing options for a shipping document.
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ShippingDocumentPrintDetail
    extends AbstractComplexType
{
    protected $_name = 'ShippingDocumentPrintDetail';

    /**
     * Provides environment-specific printer identification.
     *
     * @param string $PrinterId
     * return ShippingDocumentPrintDetail
     */
    public function setPrinterId($printerId)
    {
        $this->PrinterId = $printerId;
        return $this;
    }
    

    
}