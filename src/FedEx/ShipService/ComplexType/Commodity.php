<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
            For international multiple piece shipments, commodity information must be passed in the Master and on each child transaction.
            If this shipment cotains more than four commodities line items, the four highest valued should be included in the first 4 occurances for this request.
          
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Commodity
    extends AbstractComplexType
{
    protected $_name = 'Commodity';

    /**
     * Name of this commodity.
     *
     * @param string $Name
     * return Commodity
     */
    public function setName($name)
    {
        $this->Name = $name;
        return $this;
    }
    
    /**
     * Total number of pieces of this commodity
     *
     * @param nonNegativeInteger $NumberOfPieces
     * return Commodity
     */
    public function setNumberOfPieces($numberOfPieces)
    {
        $this->NumberOfPieces = $numberOfPieces;
        return $this;
    }
    
    /**
     * Complete and accurate description of this commodity.
     *
     * @param string $Description
     * return Commodity
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Country code where commodity contents were produced or manufactured in their final form.
     *
     * @param string $CountryOfManufacture
     * return Commodity
     */
    public function setCountryOfManufacture($countryOfManufacture)
    {
        $this->CountryOfManufacture = $countryOfManufacture;
        return $this;
    }
    
    /**
     * 
                Unique alpha/numeric representing commodity item.
                At least one occurrence is required for US Export shipments if the Customs Value is greater than $2500 or if a valid US Export license is required.
              
     *
     * @param string $HarmonizedCode
     * return Commodity
     */
    public function setHarmonizedCode($harmonizedCode)
    {
        $this->HarmonizedCode = $harmonizedCode;
        return $this;
    }
    
    /**
     * Total weight of this commodity. 1 explicit decimal position. Max length 11 including decimal.
     *
     * @param Weight $Weight
     * return Commodity
     */
    public function setWeight(Weight $weight)
    {
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * Number of units of a commodity in total number of pieces for this line item. Max length is 9
     *
     * @param nonNegativeInteger $Quantity
     * return Commodity
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    
    /**
     * Unit of measure used to express the quantity of this commodity line item.
     *
     * @param string $QuantityUnits
     * return Commodity
     */
    public function setQuantityUnits($quantityUnits)
    {
        $this->QuantityUnits = $quantityUnits;
        return $this;
    }
    
    /**
     * Contains only additional quantitative information other than weight and quantity to calculate duties and taxes.
     *
     * @param array[Measure] $AdditionalMeasures
     * return Commodity
     */
    public function setAdditionalMeasures(array $additionalMeasures)
    {
        $this->AdditionalMeasures = $additionalMeasures;
        return $this;
    }
    
    /**
     * Value of each unit in Quantity. Six explicit decimal positions, Max length 18 including decimal.
     *
     * @param Money $UnitPrice
     * return Commodity
     */
    public function setUnitPrice(Money $unitPrice)
    {
        $this->UnitPrice = $unitPrice;
        return $this;
    }
    
    /**
     * 
                Total customs value for this line item.
                It should equal the commodity unit quantity times commodity unit value.
                Six explicit decimal positions, max length 18 including decimal.
              
     *
     * @param Money $CustomsValue
     * return Commodity
     */
    public function setCustomsValue(Money $customsValue)
    {
        $this->CustomsValue = $customsValue;
        return $this;
    }
    
    /**
     * Defines additional characteristic of commodity used to calculate duties and taxes
     *
     * @param array[EdtExciseCondition] $ExciseConditions
     * return Commodity
     */
    public function setExciseConditions(array $exciseConditions)
    {
        $this->ExciseConditions = $exciseConditions;
        return $this;
    }
    
    /**
     * Applicable to US export shipping only.
     *
     * @param string $ExportLicenseNumber
     * return Commodity
     */
    public function setExportLicenseNumber($exportLicenseNumber)
    {
        $this->ExportLicenseNumber = $exportLicenseNumber;
        return $this;
    }
    
    /**
     * 
                Date of expiration. Must be at least 1 day into future.
                The date that the Commerce Export License expires. Export License commodities may not be exported from the U.S. on an expired license.
                Applicable to US Export shipping only.
                Required only if commodity is shipped on commerce export license, and Export License Number is supplied.
              
     *
     * @param date $ExportLicenseExpirationDate
     * return Commodity
     */
    public function setExportLicenseExpirationDate($exportLicenseExpirationDate)
    {
        $this->ExportLicenseExpirationDate = $exportLicenseExpirationDate;
        return $this;
    }
    
    /**
     * 
                An identifying mark or number used on the packaging of a shipment to help customers identify a particular shipment.
              
     *
     * @param string $CIMarksAndNumbers
     * return Commodity
     */
    public function setCIMarksAndNumbers($cIMarksAndNumbers)
    {
        $this->CIMarksAndNumbers = $cIMarksAndNumbers;
        return $this;
    }
    
    /**
     * All data required for this commodity in NAFTA Certificate of Origin.
     *
     * @param NaftaCommodityDetail $NaftaDetail
     * return Commodity
     */
    public function setNaftaDetail(NaftaCommodityDetail $naftaDetail)
    {
        $this->NaftaDetail = $naftaDetail;
        return $this;
    }
    

    
}