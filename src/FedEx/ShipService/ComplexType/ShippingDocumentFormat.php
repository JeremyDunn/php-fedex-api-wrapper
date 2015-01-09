<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies characteristics of a shipping document to be produced.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * @return ShippingDocumentFormat
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
     * @return ShippingDocumentFormat
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
     * Set ImageType
     *
     * @param \FedEx\ShipService\SimpleType\ShippingDocumentImageType|string $imageType
     * @return ShippingDocumentFormat
     */
    public function setImageType($imageType)
    {
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * Returns Set ImageType
     *
     * @return \FedEx\ShipService\SimpleType\ShippingDocumentImageType|string
     */
    public function getImageType()
    {
        return $this->ImageType;
    }
    
    /**
     * Set StockType
     *
     * @param \FedEx\ShipService\SimpleType\ShippingDocumentStockType|string $stockType
     * @return ShippingDocumentFormat
     */
    public function setStockType($stockType)
    {
        $this->StockType = $stockType;
        return $this;
    }
    
    /**
     * Returns Set StockType
     *
     * @return \FedEx\ShipService\SimpleType\ShippingDocumentStockType|string
     */
    public function getStockType()
    {
        return $this->StockType;
    }
    
    /**
     * For those shipping document types which have both a "form" and "instructions" component (e.g. NAFTA Certificate of Origin and General Agency Agreement), this field indicates whether to provide the instructions.
     *
     * @param boolean $provideInstructions
     * @return ShippingDocumentFormat
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
     * @return ShippingDocumentFormat
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
    
    /**
     * Identifies the individual document specified by the client.
     *
     * @param string $customDocumentIdentifier
     * @return ShippingDocumentFormat
     */
    public function setCustomDocumentIdentifier($customDocumentIdentifier)
    {
        $this->CustomDocumentIdentifier = $customDocumentIdentifier;
        return $this;
    }
    
    /**
     * Returns Identifies the individual document specified by the client.
     *
     * @return string
     */
    public function getCustomDocumentIdentifier()
    {
        return $this->CustomDocumentIdentifier;
    }
    

    
}