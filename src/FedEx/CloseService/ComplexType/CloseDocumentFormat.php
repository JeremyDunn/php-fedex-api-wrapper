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
     * @return CloseDocumentFormat
     */
    public function setDispositions(array $dispositions)
    {
        $this->Dispositions = $dispositions;
        return $this;
    }
    
    /**
     * Returns Specifies how to create, organize, and return the document.
     *
     * @return ShippingDocumentDispositionDetail[]
     */
    public function getDispositions()
    {
        return $this->Dispositions;
    }
    
    /**
     * Specifies how far down the page to move the beginning of the image; allows for printing on letterhead and other pre-printed stock.
     *
     * @param LinearMeasure $topOfPageOffset
     * @return CloseDocumentFormat
     */
    public function setTopOfPageOffset(LinearMeasure $topOfPageOffset)
    {
        $this->TopOfPageOffset = $topOfPageOffset;
        return $this;
    }
    
    /**
     * Returns Specifies how far down the page to move the beginning of the image; allows for printing on letterhead and other pre-printed stock.
     *
     * @return LinearMeasure
     */
    public function getTopOfPageOffset()
    {
        return $this->TopOfPageOffset;
    }
    
    /**
     * The type of image or printer commands the image is to be formatted in.
     *
     * @param \FedEx\CloseService\SimpleType\ShippingDocumentImageType|string $imageType
     * @return CloseDocumentFormat
     */
    public function setImageType($imageType)
    {
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * Returns The type of image or printer commands the image is to be formatted in.
     *
     * @return \FedEx\CloseService\SimpleType\ShippingDocumentImageType|string
     */
    public function getImageType()
    {
        return $this->ImageType;
    }
    
    /**
     * Set StockType
     *
     * @param \FedEx\CloseService\SimpleType\ShippingDocumentStockType|string $stockType
     * @return CloseDocumentFormat
     */
    public function setStockType($stockType)
    {
        $this->StockType = $stockType;
        return $this;
    }
    
    /**
     * Returns Set StockType
     *
     * @return \FedEx\CloseService\SimpleType\ShippingDocumentStockType|string
     */
    public function getStockType()
    {
        return $this->StockType;
    }
    
    /**
     * For those shipping document types which have both a "form" and "instructions" component (e.g. NAFTA Certificate of Origin and General Agency Agreement), this field indicates whether to provide the instructions.
     *
     * @param boolean $provideInstructions
     * @return CloseDocumentFormat
     */
    public function setProvideInstructions($provideInstructions)
    {
        $this->ProvideInstructions = $provideInstructions;
        return $this;
    }
    
    /**
     * Returns For those shipping document types which have both a "form" and "instructions" component (e.g. NAFTA Certificate of Origin and General Agency Agreement), this field indicates whether to provide the instructions.
     *
     * @return boolean
     */
    public function getProvideInstructions()
    {
        return $this->ProvideInstructions;
    }
    
    /**
     * Governs the language to be used for this individual document, independently from other content returned for the same shipment.
     *
     * @param Localization $localization
     * @return CloseDocumentFormat
     */
    public function setLocalization(Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    
    /**
     * Returns Governs the language to be used for this individual document, independently from other content returned for the same shipment.
     *
     * @return Localization
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    

    
}