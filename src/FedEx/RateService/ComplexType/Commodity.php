<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Commodity
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Commodity
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Commodity';

    /**
     * Set Name
     *
     * @param string $name
     * @return Commodity
     */
    public function setName($name)
    {
        $this->Name = $name;
        return $this;
    }
    
    /**
     * Returns Set Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    
    /**
     * Set NumberOfPieces
     *
     * @param nonNegativeInteger $numberOfPieces
     * @return Commodity
     */
    public function setNumberOfPieces($numberOfPieces)
    {
        $this->NumberOfPieces = $numberOfPieces;
        return $this;
    }
    
    /**
     * Returns Set NumberOfPieces
     *
     * @return nonNegativeInteger
     */
    public function getNumberOfPieces()
    {
        return $this->NumberOfPieces;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return Commodity
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Set Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Set CountryOfManufacture
     *
     * @param string $countryOfManufacture
     * @return Commodity
     */
    public function setCountryOfManufacture($countryOfManufacture)
    {
        $this->CountryOfManufacture = $countryOfManufacture;
        return $this;
    }
    
    /**
     * Returns Set CountryOfManufacture
     *
     * @return string
     */
    public function getCountryOfManufacture()
    {
        return $this->CountryOfManufacture;
    }
    
    /**
     * Set HarmonizedCode
     *
     * @param string $harmonizedCode
     * @return Commodity
     */
    public function setHarmonizedCode($harmonizedCode)
    {
        $this->HarmonizedCode = $harmonizedCode;
        return $this;
    }
    
    /**
     * Returns Set HarmonizedCode
     *
     * @return string
     */
    public function getHarmonizedCode()
    {
        return $this->HarmonizedCode;
    }
    
    /**
     * Set Weight
     *
     * @param Weight $weight
     * @return Commodity
     */
    public function setWeight(Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * Returns Set Weight
     *
     * @return Weight
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    
    /**
     * This field is used for enterprise transactions.
     *
     * @param decimal $quantity
     * @return Commodity
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    
    /**
     * Returns This field is used for enterprise transactions.
     *
     * @return decimal
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    
    /**
     * Set QuantityUnits
     *
     * @param string $quantityUnits
     * @return Commodity
     */
    public function setQuantityUnits($quantityUnits)
    {
        $this->QuantityUnits = $quantityUnits;
        return $this;
    }
    
    /**
     * Returns Set QuantityUnits
     *
     * @return string
     */
    public function getQuantityUnits()
    {
        return $this->QuantityUnits;
    }
    
    /**
     * Contains only additional quantitative information other than weight and quantity to calculate duties and taxes.
     *
     * @param Measure[] $additionalMeasures
     * @return Commodity
     */
    public function setAdditionalMeasures(array $additionalMeasures)
    {
        $this->AdditionalMeasures = $additionalMeasures;
        return $this;
    }
    
    /**
     * Returns Contains only additional quantitative information other than weight and quantity to calculate duties and taxes.
     *
     * @return Measure[]
     */
    public function getAdditionalMeasures()
    {
        return $this->AdditionalMeasures;
    }
    
    /**
     * Set UnitPrice
     *
     * @param Money $unitPrice
     * @return Commodity
     */
    public function setUnitPrice(Money $unitPrice)
    {
        $this->UnitPrice = $unitPrice;
        return $this;
    }
    
    /**
     * Returns Set UnitPrice
     *
     * @return Money
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }
    
    /**
     * Set CustomsValue
     *
     * @param Money $customsValue
     * @return Commodity
     */
    public function setCustomsValue(Money $customsValue)
    {
        $this->CustomsValue = $customsValue;
        return $this;
    }
    
    /**
     * Returns Set CustomsValue
     *
     * @return Money
     */
    public function getCustomsValue()
    {
        return $this->CustomsValue;
    }
    
    /**
     * Defines additional characteristic of commodity used to calculate duties and taxes
     *
     * @param EdtExciseCondition[] $exciseConditions
     * @return Commodity
     */
    public function setExciseConditions(array $exciseConditions)
    {
        $this->ExciseConditions = $exciseConditions;
        return $this;
    }
    
    /**
     * Returns Defines additional characteristic of commodity used to calculate duties and taxes
     *
     * @return EdtExciseCondition[]
     */
    public function getExciseConditions()
    {
        return $this->ExciseConditions;
    }
    
    /**
     * Set ExportLicenseNumber
     *
     * @param string $exportLicenseNumber
     * @return Commodity
     */
    public function setExportLicenseNumber($exportLicenseNumber)
    {
        $this->ExportLicenseNumber = $exportLicenseNumber;
        return $this;
    }
    
    /**
     * Returns Set ExportLicenseNumber
     *
     * @return string
     */
    public function getExportLicenseNumber()
    {
        return $this->ExportLicenseNumber;
    }
    
    /**
     * Set ExportLicenseExpirationDate
     *
     * @param date $exportLicenseExpirationDate
     * @return Commodity
     */
    public function setExportLicenseExpirationDate($exportLicenseExpirationDate)
    {
        $this->ExportLicenseExpirationDate = $exportLicenseExpirationDate;
        return $this;
    }
    
    /**
     * Returns Set ExportLicenseExpirationDate
     *
     * @return date
     */
    public function getExportLicenseExpirationDate()
    {
        return $this->ExportLicenseExpirationDate;
    }
    
    /**
     * Set CIMarksAndNumbers
     *
     * @param string $cIMarksAndNumbers
     * @return Commodity
     */
    public function setCIMarksAndNumbers($cIMarksAndNumbers)
    {
        $this->CIMarksAndNumbers = $cIMarksAndNumbers;
        return $this;
    }
    
    /**
     * Returns Set CIMarksAndNumbers
     *
     * @return string
     */
    public function getCIMarksAndNumbers()
    {
        return $this->CIMarksAndNumbers;
    }
    
    /**
     * Set PartNumber
     *
     * @param string $partNumber
     * @return Commodity
     */
    public function setPartNumber($partNumber)
    {
        $this->PartNumber = $partNumber;
        return $this;
    }
    
    /**
     * Returns Set PartNumber
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->PartNumber;
    }
    
    /**
     * All data required for this commodity in NAFTA Certificate of Origin.
     *
     * @param NaftaCommodityDetail $naftaDetail
     * @return Commodity
     */
    public function setNaftaDetail(NaftaCommodityDetail $naftaDetail)
    {
        $this->NaftaDetail = $naftaDetail;
        return $this;
    }
    
    /**
     * Returns All data required for this commodity in NAFTA Certificate of Origin.
     *
     * @return NaftaCommodityDetail
     */
    public function getNaftaDetail()
    {
        return $this->NaftaDetail;
    }
    

    
}