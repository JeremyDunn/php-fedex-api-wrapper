<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies characteristics of a shipping document to be produced.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class CloseDocumentFormat
    extends AbstractComplexType
{
    protected $_name = 'CloseDocumentFormat';

    /**
     * Specifies how to create, organize, and return the document.
     *
     * @param array[ShippingDocumentDispositionDetail] $Dispositions
     * return CloseDocumentFormat
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
     * return CloseDocumentFormat
     */
    public function setTopOfPageOffset(LinearMeasure $topOfPageOffset)
    {
        $this->TopOfPageOffset = $topOfPageOffset;
        return $this;
    }
    
    /**
     * The type of image or printer commands the image is to be formatted in.
     *
     * @param ShippingDocumentImageType $ImageType
     * return CloseDocumentFormat
     */
    public function setImageType(\FedEx\CloseService\SimpleType\ShippingDocumentImageType $imageType)
    {
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * 
     *
     * @param ShippingDocumentStockType $StockType
     * return CloseDocumentFormat
     */
    public function setStockType(\FedEx\CloseService\SimpleType\ShippingDocumentStockType $stockType)
    {
        $this->StockType = $stockType;
        return $this;
    }
    
    /**
     * For those shipping document types which have both a "form" and "instructions" component (e.g. NAFTA Certificate of Origin and General Agency Agreement), this field indicates whether to provide the instructions.
     *
     * @param boolean $ProvideInstructions
     * return CloseDocumentFormat
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
     * return CloseDocumentFormat
     */
    public function setLocalization(Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}