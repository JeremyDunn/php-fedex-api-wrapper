<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of an individual commodity or class of content in a shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $Id
 * @property \FedEx\ShipService\SimpleType\FreightClassType|string $FreightClass
 * @property boolean $ClassProvidedByCustomer
 * @property int $HandlingUnits
 * @property \FedEx\ShipService\SimpleType\PhysicalPackagingType|string $Packaging
 * @property int $Pieces
 * @property string $NmfcCode
 * @property \FedEx\ShipService\SimpleType\HazardousCommodityOptionType|string $HazardousMaterials
 * @property string $PurchaseOrderNumber
 * @property string $Description
 * @property Weight $Weight
 * @property Dimensions $Dimensions
 * @property Volume $Volume

 */
class FreightShipmentLineItem extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FreightShipmentLineItem';

    /**
     * A unique identifier assigned to this line item.
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * Freight class for this line item.
     *
     * @param \FedEx\ShipService\SimpleType\FreightClassType|string $freightClass
     * @return $this
     */
    public function setFreightClass($freightClass)
    {
        $this->values['FreightClass'] = $freightClass;
        return $this;
    }

    /**
     * FEDEX INTERNAL USE ONLY: for FedEx system that estimate freight class from customer-provided dimensions and weight.
     *
     * @param boolean $classProvidedByCustomer
     * @return $this
     */
    public function setClassProvidedByCustomer($classProvidedByCustomer)
    {
        $this->values['ClassProvidedByCustomer'] = $classProvidedByCustomer;
        return $this;
    }

    /**
     * Number of individual handling units to which this line applies. (NOTE: Total of line-item-level handling units may not balance to shipment-level total handling units.)
     *
     * @param int $handlingUnits
     * @return $this
     */
    public function setHandlingUnits($handlingUnits)
    {
        $this->values['HandlingUnits'] = $handlingUnits;
        return $this;
    }

    /**
     * Specification of handling-unit packaging for this commodity or class line.
     *
     * @param \FedEx\ShipService\SimpleType\PhysicalPackagingType|string $packaging
     * @return $this
     */
    public function setPackaging($packaging)
    {
        $this->values['Packaging'] = $packaging;
        return $this;
    }

    /**
     * Number of pieces for this commodity or class line.
     *
     * @param int $pieces
     * @return $this
     */
    public function setPieces($pieces)
    {
        $this->values['Pieces'] = $pieces;
        return $this;
    }

    /**
     * NMFC Code for commodity.
     *
     * @param string $nmfcCode
     * @return $this
     */
    public function setNmfcCode($nmfcCode)
    {
        $this->values['NmfcCode'] = $nmfcCode;
        return $this;
    }

    /**
     * Indicates the kind of hazardous material content in this line item.
     *
     * @param \FedEx\ShipService\SimpleType\HazardousCommodityOptionType|string $hazardousMaterials
     * @return $this
     */
    public function setHazardousMaterials($hazardousMaterials)
    {
        $this->values['HazardousMaterials'] = $hazardousMaterials;
        return $this;
    }

    /**
     * For printed reference per line item.
     *
     * @param string $purchaseOrderNumber
     * @return $this
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->values['PurchaseOrderNumber'] = $purchaseOrderNumber;
        return $this;
    }

    /**
     * Customer-provided description for this commodity or class line.
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Weight for this commodity or class line.
     *
     * @param Weight $weight
     * @return $this
     */
    public function setWeight(Weight $weight)
    {
        $this->values['Weight'] = $weight;
        return $this;
    }

    /**
     * Set Dimensions
     *
     * @param Dimensions $dimensions
     * @return $this
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->values['Dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Volume (cubic measure) for this commodity or class line.
     *
     * @param Volume $volume
     * @return $this
     */
    public function setVolume(Volume $volume)
    {
        $this->values['Volume'] = $volume;
        return $this;
    }
}
