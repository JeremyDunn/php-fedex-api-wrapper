<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies characteristics of a shipping document to be produced.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShippingDocumentFormat
    extends AbstractComplexType
{
    protected $_name = 'ShippingDocumentFormat';

    /**
     * Specifies how to create, organize, and return the document.
     *
     * @param array[ShippingDocumentDispositionDetail] $Dispositions
     * return ShippingDocumentFormat
     */
    public function setDispositions(array $dispositions)
    {
        $this->Dispositions = $dispositions;
        return $this;
    }
    
    /**
     * Specifies how far down the page to move the beginning of the image; allows for printing on letterhead and other pre-printed stock.
     *
     * @param LinearMeasure $TopOfPageOffset
     * return ShippingDocumentFormat
     */
    public function setTopOfPageOffset(LinearMeasure $topOfPageOffset)
    {
        $this->TopOfPageOffset = $topOfPageOffset;
        return $this;
    }
    
    /**
     * 
     *
     * @param ShippingDocumentImageType $ImageType
     * return ShippingDocumentFormat
     */
    public function setImageType(\FedEx\RateService\SimpleType\ShippingDocumentImageType $imageType)
    {
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * 
     *
     * @param ShippingDocumentStockType $StockType
     * return ShippingDocumentFormat
     */
    public function setStockType(\FedEx\RateService\SimpleType\ShippingDocumentStockType $stockType)
    {
        $this->StockType = $stockType;
        return $this;
    }
    
    /**
     * For those shipping document types which have both a "form" and "instructions" component (e.g. NAFTA Certificate of Origin and General Agency Agreement), this field indicates whether to provide the instructions.
     *
     * @param boolean $ProvideInstructions
     * return ShippingDocumentFormat
     */
    public function setProvideInstructions($provideInstructions)
    {
        $this->ProvideInstructions = $provideInstructions;
        return $this;
    }
    
    /**
     * Governs the language to be used for this individual document, independently from other content returned for the same shipment.
     *
     * @param Localization $Localization
     * return ShippingDocumentFormat
     */
    public function setLocalization(Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}