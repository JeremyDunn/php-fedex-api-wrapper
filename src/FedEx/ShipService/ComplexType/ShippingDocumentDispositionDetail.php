<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each occurrence of this class specifies a particular way in which a kind of shipping document is to be produced and provided.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentDispositionDetail
    extends AbstractComplexType
{
    protected $_name = 'ShippingDocumentDispositionDetail';

    /**
     * Values in this field specify how to create and return the document.
     *
     * @param ShippingDocumentDispositionType $DispositionType
     * return ShippingDocumentDispositionDetail
     */
    public function setDispositionType(\FedEx\ShipService\SimpleType\ShippingDocumentDispositionType $dispositionType)
    {
        $this->DispositionType = $dispositionType;
        return $this;
    }
    
    /**
     * Specifies how to organize all documents of this type.
     *
     * @param ShippingDocumentGroupingType $Grouping
     * return ShippingDocumentDispositionDetail
     */
    public function setGrouping(\FedEx\ShipService\SimpleType\ShippingDocumentGroupingType $grouping)
    {
        $this->Grouping = $grouping;
        return $this;
    }
    
    /**
     * Specifies how to e-mail document images.
     *
     * @param ShippingDocumentEMailDetail $EMailDetail
     * return ShippingDocumentDispositionDetail
     */
    public function setEMailDetail(ShippingDocumentEMailDetail $eMailDetail)
    {
        $this->EMailDetail = $eMailDetail;
        return $this;
    }
    
    /**
     * Specifies how a queued document is to be printed.
     *
     * @param ShippingDocumentPrintDetail $PrintDetail
     * return ShippingDocumentDispositionDetail
     */
    public function setPrintDetail(ShippingDocumentPrintDetail $printDetail)
    {
        $this->PrintDetail = $printDetail;
        return $this;
    }
    

    
}