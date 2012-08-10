<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each occurrence of this class specifies a particular way in which a kind of shipping document is to be produced and provided.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShippingDocumentDispositionDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShippingDocumentDispositionDetail';

    /**
     * Values in this field specify how to create and return the document.
     *
     * @param \FedEx\RateService\SimpleType\ShippingDocumentDispositionType|string $dispositionType
     * return ShippingDocumentDispositionDetail
     */
    public function setDispositionType($dispositionType)
    {
        $this->DispositionType = $dispositionType;
        return $this;
    }
    
    /**
     * Specifies how to organize all documents of this type.
     *
     * @param \FedEx\RateService\SimpleType\ShippingDocumentGroupingType|string $grouping
     * return ShippingDocumentDispositionDetail
     */
    public function setGrouping($grouping)
    {
        $this->Grouping = $grouping;
        return $this;
    }
    
    /**
     * Specifies how to e-mail document images.
     *
     * @param ShippingDocumentEMailDetail $eMailDetail
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
     * @param ShippingDocumentPrintDetail $printDetail
     * return ShippingDocumentDispositionDetail
     */
    public function setPrintDetail(ShippingDocumentPrintDetail $printDetail)
    {
        $this->PrintDetail = $printDetail;
        return $this;
    }
    

    
}