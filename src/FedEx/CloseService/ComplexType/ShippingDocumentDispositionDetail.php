<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each occurrence of this class specifies a particular way in which a kind of shipping document is to be produced and provided.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
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
     * @param \FedEx\CloseService\SimpleType\ShippingDocumentDispositionType|string $dispositionType
     * @return ShippingDocumentDispositionDetail
     */
    public function setDispositionType($dispositionType)
    {
        $this->DispositionType = $dispositionType;
        return $this;
    }
    
    /**
     * Returns Values in this field specify how to create and return the document.
     *
     * @return \FedEx\CloseService\SimpleType\ShippingDocumentDispositionType|string
     */
    public function getDispositionType()
    {
        return $this->DispositionType;
    }
    
    /**
     * Specifies how to organize all documents of this type.
     *
     * @param \FedEx\CloseService\SimpleType\ShippingDocumentGroupingType|string $grouping
     * @return ShippingDocumentDispositionDetail
     */
    public function setGrouping($grouping)
    {
        $this->Grouping = $grouping;
        return $this;
    }
    
    /**
     * Returns Specifies how to organize all documents of this type.
     *
     * @return \FedEx\CloseService\SimpleType\ShippingDocumentGroupingType|string
     */
    public function getGrouping()
    {
        return $this->Grouping;
    }
    
    /**
     * Specifies how to store document images.
     *
     * @param ShippingDocumentStorageDetail $storageDetail
     * @return ShippingDocumentDispositionDetail
     */
    public function setStorageDetail(ShippingDocumentStorageDetail $storageDetail)
    {
        $this->StorageDetail = $storageDetail;
        return $this;
    }
    
    /**
     * Returns Specifies how to store document images.
     *
     * @return ShippingDocumentStorageDetail
     */
    public function getStorageDetail()
    {
        return $this->StorageDetail;
    }
    
    /**
     * Specifies how to e-mail document images.
     *
     * @param ShippingDocumentEMailDetail $eMailDetail
     * @return ShippingDocumentDispositionDetail
     */
    public function setEMailDetail(ShippingDocumentEMailDetail $eMailDetail)
    {
        $this->EMailDetail = $eMailDetail;
        return $this;
    }
    
    /**
     * Returns Specifies how to e-mail document images.
     *
     * @return ShippingDocumentEMailDetail
     */
    public function getEMailDetail()
    {
        return $this->EMailDetail;
    }
    
    /**
     * Specifies how a queued document is to be printed.
     *
     * @param ShippingDocumentPrintDetail $printDetail
     * @return ShippingDocumentDispositionDetail
     */
    public function setPrintDetail(ShippingDocumentPrintDetail $printDetail)
    {
        $this->PrintDetail = $printDetail;
        return $this;
    }
    
    /**
     * Returns Specifies how a queued document is to be printed.
     *
     * @return ShippingDocumentPrintDetail
     */
    public function getPrintDetail()
    {
        return $this->PrintDetail;
    }
    

    
}