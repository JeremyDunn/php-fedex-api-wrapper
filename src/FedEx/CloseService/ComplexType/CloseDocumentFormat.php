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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CloseDocumentFormat';

    /**
     * Specifies how to create, organize, and return the document.
     *
     * @param ShippingDocumentDispositionDetail[] $dispositions
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
     * @param LinearMeasure $topOfPageOffset
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
     * @param \FedEx\CloseService\SimpleType\ShippingDocumentImageType|string $imageType
     * return CloseDocumentFormat
     */
    public function setImageType($imageType)
    {
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * Set StockType
     *
     * @param \FedEx\CloseService\SimpleType\ShippingDocumentStockType|string $stockType
     * return CloseDocumentFormat
     */
    public function setStockType($stockType)
    {
        $this->StockType = $stockType;
        return $this;
    }
    
    /**
     * For those shipping document types which have both a "form" and "instructions" component (e.g. NAFTA Certificate of Origin and General Agency Agreement), this field indicates whether to provide the instructions.
     *
     * @param boolean $provideInstructions
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
     * @param Localization $localization
     * return CloseDocumentFormat
     */
    public function setLocalization(Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}