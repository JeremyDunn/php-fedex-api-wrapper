<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadedDangerousGoodsHandlingUnitGroup
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property string $Id
 * @property string $Description
 * @property int $NumberOfHandlingUnits
 * @property TrackingNumberUnit[] $TrackingNumberUnits
 * @property UploadedDangerousGoodsHandlingUnit $HandlingUnit

 */
class UploadedDangerousGoodsHandlingUnitGroup extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadedDangerousGoodsHandlingUnitGroup';

    /**
     * Set Id
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
     * Specifies detailed commodity information related to the regulations.
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
     * This specifies the number of identical handling units in the shipment for this group.
     *
     * @param int $numberOfHandlingUnits
     * @return $this
     */
    public function setNumberOfHandlingUnits($numberOfHandlingUnits)
    {
        $this->values['NumberOfHandlingUnits'] = $numberOfHandlingUnits;
        return $this;
    }

    /**
     * Set TrackingNumberUnits
     *
     * @param TrackingNumberUnit[] $trackingNumberUnits
     * @return $this
     */
    public function setTrackingNumberUnits(array $trackingNumberUnits)
    {
        $this->values['TrackingNumberUnits'] = $trackingNumberUnits;
        return $this;
    }

    /**
     * Set HandlingUnit
     *
     * @param UploadedDangerousGoodsHandlingUnit $handlingUnit
     * @return $this
     */
    public function setHandlingUnit(UploadedDangerousGoodsHandlingUnit $handlingUnit)
    {
        $this->values['HandlingUnit'] = $handlingUnit;
        return $this;
    }
}
