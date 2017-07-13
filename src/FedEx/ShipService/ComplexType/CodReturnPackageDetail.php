<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the information associated with a package that has COD special service in a ground shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property Money $CollectionAmount
 * @property \FedEx\ShipService\SimpleType\CodAdjustmentType|string $AdjustmentType
 * @property boolean $Electronic
 * @property PackageBarcodes $Barcodes
 * @property ShippingDocument $Label

 */
class CodReturnPackageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CodReturnPackageDetail';

    /**
     * The COD amount (after any accumulations) that must be collected upon delivery of a package shipped using the COD special service.
     *
     * @param Money $collectionAmount
     * @return $this
     */
    public function setCollectionAmount(Money $collectionAmount)
    {
        $this->values['CollectionAmount'] = $collectionAmount;
        return $this;
    }

    /**
     * Set AdjustmentType
     *
     * @param \FedEx\ShipService\SimpleType\CodAdjustmentType|string $adjustmentType
     * @return $this
     */
    public function setAdjustmentType($adjustmentType)
    {
        $this->values['AdjustmentType'] = $adjustmentType;
        return $this;
    }

    /**
     * Set Electronic
     *
     * @param boolean $electronic
     * @return $this
     */
    public function setElectronic($electronic)
    {
        $this->values['Electronic'] = $electronic;
        return $this;
    }

    /**
     * Contains the data which form the Astra and 2DCommon barcodes that print on the COD return label.
     *
     * @param PackageBarcodes $barcodes
     * @return $this
     */
    public function setBarcodes(PackageBarcodes $barcodes)
    {
        $this->values['Barcodes'] = $barcodes;
        return $this;
    }

    /**
     * The label image or printer commands to print the label.
     *
     * @param ShippingDocument $label
     * @return $this
     */
    public function setLabel(ShippingDocument $label)
    {
        $this->values['Label'] = $label;
        return $this;
    }
}
