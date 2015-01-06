<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
            For international multiple piece shipments, commodity information must be passed in the Master and on each child transaction.
            If this shipment cotains more than four commodities line items, the four highest valued should be included in the first 4 occurances for this request.
          
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
     * total number of pieces of this commodity
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
     * Returns total number of pieces of this commodity
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    
    /**
     * total number of pieces of this commodity
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
     * Returns total number of pieces of this commodity
     *
     * @return nonNegativeInteger
     */
    public function getNumberOfPieces()
    {
        return $this->NumberOfPieces;
    }
    
    /**
     * Complete and accurate description of this commodity.
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
     * Returns Complete and accurate description of this commodity.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    
    /**
     * Country code where commodity contents were produced or manufactured in their final form.
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
     * Returns Country code where commodity contents were produced or manufactured in their final form.
     *
     * @return string
     */
    public function getCountryOfManufacture()
    {
        return $this->CountryOfManufacture;
    }
    
    /**
     * 
                Unique alpha/numeric representing commodity item.
                At least one occurrence is required for US Export shipments if the Customs Value is greater than $2500 or if a valid US Export license is required.
              
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
     * Returns 
                Unique alpha/numeric representing commodity item.
                At least one occurrence is required for US Export shipments if the Customs Value is greater than $2500 or if a valid US Export license is required.
              
     *
     * @return string
     */
    public function getHarmonizedCode()
    {
        return $this->HarmonizedCode;
    }
    
    /**
     * Total weight of this commodity. 1 explicit decimal position. Max length 11 including decimal.
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
     * Returns Total weight of this commodity. 1 explicit decimal position. Max length 11 including decimal.
     *
     * @return Weight
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    
    /**
     * Number of units of a commodity in total number of pieces for this line item. Max length is 9
     *
     * @param nonNegativeInteger $quantity
     * @return Commodity
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    
    /**
     * Returns Number of units of a commodity in total number of pieces for this line item. Max length is 9
     *
     * @return nonNegativeInteger
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    
    /**
     * Unit of measure used to express the quantity of this commodity line item.
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
     * Returns Unit of measure used to express the quantity of this commodity line item.
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
     * Value of each unit in Quantity. Six explicit decimal positions, Max length 18 including decimal.
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
     * Returns Value of each unit in Quantity. Six explicit decimal positions, Max length 18 including decimal.
     *
     * @return Money
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }
    
    /**
     * 
                Total customs value for this line item.
                It should equal the commodity unit quantity times commodity unit value.
                Six explicit decimal positions, max length 18 including decimal.
              
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
     * Returns 
                Total customs value for this line item.
                It should equal the commodity unit quantity times commodity unit value.
                Six explicit decimal positions, max length 18 including decimal.
              
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
     * Applicable to US export shipping only.
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
     * Returns Applicable to US export shipping only.
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
     * 
                An identifying mark or number used on the packaging of a shipment to help customers identify a particular shipment.
              
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
     * Returns 
                An identifying mark or number used on the packaging of a shipment to help customers identify a particular shipment.
              
     *
     * @return string
     */
    public function getCIMarksAndNumbers()
    {
        return $this->CIMarksAndNumbers;
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