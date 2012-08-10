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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShippingDocumentFormat';

    /**
     * Specifies how to create, organize, and return the document.
     *
     * @param ShippingDocumentDispositionDetail[] $dispositions
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
     * @param LinearMeasure $topOfPageOffset
     * return ShippingDocumentFormat
     */
    public function setTopOfPageOffset(LinearMeasure $topOfPageOffset)
    {
        $this->TopOfPageOffset = $topOfPageOffset;
        return $this;
    }
    
    /**
     * Set ImageType
     *
     * @param \FedEx\RateService\SimpleType\ShippingDocumentImageType|string $imageType
     * return ShippingDocumentFormat
     */
    public function setImageType($imageType)
    {
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * Set StockType
     *
     * @param \FedEx\RateService\SimpleType\ShippingDocumentStockType|string $stockType
     * return ShippingDocumentFormat
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
     * @param Localization $localization
     * return ShippingDocumentFormat
     */
    public function setLocalization(Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}