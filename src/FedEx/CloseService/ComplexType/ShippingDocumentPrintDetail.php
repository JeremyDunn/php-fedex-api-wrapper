<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies printing options for a shipping document.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ShippingDocumentPrintDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShippingDocumentPrintDetail';

    /**
     * Provides environment-specific printer identification.
     *
     * @param string $printerId
     * @return ShippingDocumentPrintDetail
     */
    public function setPrinterId($printerId)
    {
        $this->PrinterId = $printerId;
        return $this;
    }
    
    /**
     * Returns Provides environment-specific printer identification.
     *
     * @return string
     */
    public function getPrinterId()
    {
        return $this->PrinterId;
    }
    

    
}