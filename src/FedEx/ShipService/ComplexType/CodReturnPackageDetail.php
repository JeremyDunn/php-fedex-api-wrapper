<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the information associated with a package that has COD special service in a ground shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CodReturnPackageDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CodReturnPackageDetail';

    /**
     * The COD amount (after any accumulations) that must be collected upon delivery of a package shipped using the COD special service.
     *
     * @param Money $collectionAmount
     * @return CodReturnPackageDetail
     */
    public function setCollectionAmount(Money $collectionAmount)
    {
        $this->CollectionAmount = $collectionAmount;
        return $this;
    }
    
    /**
     * Returns The COD amount (after any accumulations) that must be collected upon delivery of a package shipped using the COD special service.
     *
     * @return Money
     */
    public function getCollectionAmount()
    {
        return $this->CollectionAmount;
    }
    
    /**
     * Set AdjustmentType
     *
     * @param \FedEx\ShipService\SimpleType\CodAdjustmentType|string $adjustmentType
     * @return CodReturnPackageDetail
     */
    public function setAdjustmentType($adjustmentType)
    {
        $this->AdjustmentType = $adjustmentType;
        return $this;
    }
    
    /**
     * Returns Set AdjustmentType
     *
     * @return \FedEx\ShipService\SimpleType\CodAdjustmentType|string
     */
    public function getAdjustmentType()
    {
        return $this->AdjustmentType;
    }
    
    /**
     * Set Electronic
     *
     * @param boolean $electronic
     * @return CodReturnPackageDetail
     */
    public function setElectronic($electronic)
    {
        $this->Electronic = $electronic;
        return $this;
    }
    
    /**
     * Returns Set Electronic
     *
     * @return boolean
     */
    public function getElectronic()
    {
        return $this->Electronic;
    }
    
    /**
     * Contains the data which form the Astra and 2DCommon barcodes that print on the COD return label.
     *
     * @param PackageBarcodes $barcodes
     * @return CodReturnPackageDetail
     */
    public function setBarcodes(PackageBarcodes $barcodes)
    {
        $this->Barcodes = $barcodes;
        return $this;
    }
    
    /**
     * Returns Contains the data which form the Astra and 2DCommon barcodes that print on the COD return label.
     *
     * @return PackageBarcodes
     */
    public function getBarcodes()
    {
        return $this->Barcodes;
    }
    
    /**
     * The label image or printer commands to print the label.
     *
     * @param ShippingDocument $label
     * @return CodReturnPackageDetail
     */
    public function setLabel(ShippingDocument $label)
    {
        $this->Label = $label;
        return $this;
    }
    
    /**
     * Returns The label image or printer commands to print the label.
     *
     * @return ShippingDocument
     */
    public function getLabel()
    {
        return $this->Label;
    }
    

    
}