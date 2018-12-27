<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Commodity
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property string $Name
 * @property int $NumberOfPieces
 * @property string $Description
 * @property \FedEx\RateService\SimpleType\CommodityPurposeType|string $Purpose
 * @property string $CountryOfManufacture
 * @property string $HarmonizedCode
 * @property Weight $Weight
 * @property float $Quantity
 * @property string $QuantityUnits
 * @property Measure[] $AdditionalMeasures
 * @property Money $UnitPrice
 * @property Money $CustomsValue
 * @property EdtExciseCondition[] $ExciseConditions
 * @property string $ExportLicenseNumber
 * @property string $ExportLicenseExpirationDate
 * @property string $CIMarksAndNumbers
 * @property string $PartNumber
 * @property NaftaCommodityDetail $NaftaDetail

 */
class Commodity extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Commodity';

    /**
     * FedEx internal commodity identifier
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->values['Name'] = $name;
        return $this;
    }

    /**
     * Set NumberOfPieces
     *
     * @param int $numberOfPieces
     * @return $this
     */
    public function setNumberOfPieces($numberOfPieces)
    {
        $this->values['NumberOfPieces'] = $numberOfPieces;
        return $this;
    }

    /**
     * A free-form description of the commodity, which could be used for customs clearance documentation.
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
     * Set Purpose
     *
     * @param \FedEx\RateService\SimpleType\CommodityPurposeType|string $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->values['Purpose'] = $purpose;
        return $this;
    }

    /**
     * Set CountryOfManufacture
     *
     * @param string $countryOfManufacture
     * @return $this
     */
    public function setCountryOfManufacture($countryOfManufacture)
    {
        $this->values['CountryOfManufacture'] = $countryOfManufacture;
        return $this;
    }

    /**
     * Set HarmonizedCode
     *
     * @param string $harmonizedCode
     * @return $this
     */
    public function setHarmonizedCode($harmonizedCode)
    {
        $this->values['HarmonizedCode'] = $harmonizedCode;
        return $this;
    }

    /**
     * Set Weight
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
     * Set Quantity
     *
     * @param float $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->values['Quantity'] = $quantity;
        return $this;
    }

    /**
     * Set QuantityUnits
     *
     * @param string $quantityUnits
     * @return $this
     */
    public function setQuantityUnits($quantityUnits)
    {
        $this->values['QuantityUnits'] = $quantityUnits;
        return $this;
    }

    /**
     * Contains only additional quantitative information other than weight and quantity to calculate duties and taxes.
     *
     * @param Measure[] $additionalMeasures
     * @return $this
     */
    public function setAdditionalMeasures(array $additionalMeasures)
    {
        $this->values['AdditionalMeasures'] = $additionalMeasures;
        return $this;
    }

    /**
     * Set UnitPrice
     *
     * @param Money $unitPrice
     * @return $this
     */
    public function setUnitPrice(Money $unitPrice)
    {
        $this->values['UnitPrice'] = $unitPrice;
        return $this;
    }

    /**
     * Set CustomsValue
     *
     * @param Money $customsValue
     * @return $this
     */
    public function setCustomsValue(Money $customsValue)
    {
        $this->values['CustomsValue'] = $customsValue;
        return $this;
    }

    /**
     * Defines additional characteristic of commodity used to calculate duties and taxes
     *
     * @param EdtExciseCondition[] $exciseConditions
     * @return $this
     */
    public function setExciseConditions(array $exciseConditions)
    {
        $this->values['ExciseConditions'] = $exciseConditions;
        return $this;
    }

    /**
     * Set ExportLicenseNumber
     *
     * @param string $exportLicenseNumber
     * @return $this
     */
    public function setExportLicenseNumber($exportLicenseNumber)
    {
        $this->values['ExportLicenseNumber'] = $exportLicenseNumber;
        return $this;
    }

    /**
     * Set ExportLicenseExpirationDate
     *
     * @param string $exportLicenseExpirationDate
     * @return $this
     */
    public function setExportLicenseExpirationDate($exportLicenseExpirationDate)
    {
        $this->values['ExportLicenseExpirationDate'] = $exportLicenseExpirationDate;
        return $this;
    }

    /**
     * Set CIMarksAndNumbers
     *
     * @param string $cIMarksAndNumbers
     * @return $this
     */
    public function setCIMarksAndNumbers($cIMarksAndNumbers)
    {
        $this->values['CIMarksAndNumbers'] = $cIMarksAndNumbers;
        return $this;
    }

    /**
     * Set PartNumber
     *
     * @param string $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->values['PartNumber'] = $partNumber;
        return $this;
    }

    /**
     * All data required for this commodity in NAFTA Certificate of Origin.
     *
     * @param NaftaCommodityDetail $naftaDetail
     * @return $this
     */
    public function setNaftaDetail(NaftaCommodityDetail $naftaDetail)
    {
        $this->values['NaftaDetail'] = $naftaDetail;
        return $this;
    }
}
