<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UploadedDangerousGoodsCommodityDescription
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property string $IdType
 * @property string $Id
 * @property int $SequenceNumber
 * @property \FedEx\DGDSService\SimpleType\DangerousGoodsPackingGroupType|string $PackingGroup
 * @property string $PackingInstructions
 * @property \FedEx\DGDSService\SimpleType\DangerousGoodsAircraftCategoryType|string $AircraftCategoryType
 * @property string $ProperShippingName
 * @property string $TechnicalName
 * @property string $PrimaryClass
 * @property string[] $SubsidiaryClasses
 * @property boolean $ReportableQuantity
 * @property float $Percentage
 * @property string $AuthorizationInformation

 */
class UploadedDangerousGoodsCommodityDescription extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'UploadedDangerousGoodsCommodityDescription';

    /**
     * This identifies the commodity ID type (e.g. - UN, ID, or NA)
     *
     * @param string $idType
     * @return $this
     */
    public function setIdType($idType)
    {
        $this->values['IdType'] = $idType;
        return $this;
    }

    /**
     * Regulatory identifier for a commodity (e.g. - 1845)
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
     * In conjunction with the regulatory identifier, this field uniquely identifies a specific record in the commodity regulation table.
     *
     * @param int $sequenceNumber
     * @return $this
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->values['SequenceNumber'] = $sequenceNumber;
        return $this;
    }

    /**
     * Set PackingGroup
     *
     * @param \FedEx\DGDSService\SimpleType\DangerousGoodsPackingGroupType|string $packingGroup
     * @return $this
     */
    public function setPackingGroup($packingGroup)
    {
        $this->values['PackingGroup'] = $packingGroup;
        return $this;
    }

    /**
     * Set PackingInstructions
     *
     * @param string $packingInstructions
     * @return $this
     */
    public function setPackingInstructions($packingInstructions)
    {
        $this->values['PackingInstructions'] = $packingInstructions;
        return $this;
    }

    /**
     * Identifies the type of aircraft available for this commodity
     *
     * @param \FedEx\DGDSService\SimpleType\DangerousGoodsAircraftCategoryType|string $aircraftCategoryType
     * @return $this
     */
    public function setAircraftCategoryType($aircraftCategoryType)
    {
        $this->values['AircraftCategoryType'] = $aircraftCategoryType;
        return $this;
    }

    /**
     * This identifies the proper shipping name as defined by the regulation. This could also include qualifying words.
     *
     * @param string $properShippingName
     * @return $this
     */
    public function setProperShippingName($properShippingName)
    {
        $this->values['ProperShippingName'] = $properShippingName;
        return $this;
    }

    /**
     * Set TechnicalName
     *
     * @param string $technicalName
     * @return $this
     */
    public function setTechnicalName($technicalName)
    {
        $this->values['TechnicalName'] = $technicalName;
        return $this;
    }

    /**
     * Set PrimaryClass
     *
     * @param string $primaryClass
     * @return $this
     */
    public function setPrimaryClass($primaryClass)
    {
        $this->values['PrimaryClass'] = $primaryClass;
        return $this;
    }

    /**
     * Set SubsidiaryClasses
     *
     * @param string $subsidiaryClasses
     * @return $this
     */
    public function setSubsidiaryClasses($subsidiaryClasses)
    {
        $this->values['SubsidiaryClasses'] = $subsidiaryClasses;
        return $this;
    }

    /**
     * Set ReportableQuantity
     *
     * @param boolean $reportableQuantity
     * @return $this
     */
    public function setReportableQuantity($reportableQuantity)
    {
        $this->values['ReportableQuantity'] = $reportableQuantity;
        return $this;
    }

    /**
     * Set Percentage
     *
     * @param float $percentage
     * @return $this
     */
    public function setPercentage($percentage)
    {
        $this->values['Percentage'] = $percentage;
        return $this;
    }

    /**
     * This field should be populated with any authorization and other required information. Depending on the regulation, this could include the Type DOT Label(s), special permit numbers, or other information as needed. For ground shipments, this is equivalent to the labelText field.
     *
     * @param string $authorizationInformation
     * @return $this
     */
    public function setAuthorizationInformation($authorizationInformation)
    {
        $this->values['AuthorizationInformation'] = $authorizationInformation;
        return $this;
    }
}
