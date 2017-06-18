<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * For international multiple piece shipments, commodity information must be passed in the Master and on each child transaction.
            If this shipment cotains more than four commodities line items, the four highest valued should be included in the first 4 occurances for this request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $Name
 * @property int $NumberOfPieces
 * @property string $Description
 * @property string $CountryOfManufacture
 * @property string $HarmonizedCode
 * @property Weight $Weight
 * @property int $Quantity
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
     * Name of this commodity.
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
     * Total number of pieces of this commodity
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
     * Complete and accurate description of this commodity.
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
     * Country code where commodity contents were produced or manufactured in their final form.
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
     * Unique alpha/numeric representing commodity item.
                At least one occurrence is required for US Export shipments if the Customs Value is greater than $2500 or if a valid US Export license is required.
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
     * Total weight of this commodity. 1 explicit decimal position. Max length 11 including decimal.
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
     * This field is used for enterprise transactions.
     *
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->values['Quantity'] = $quantity;
        return $this;
    }

    /**
     * Unit of measure used to express the quantity of this commodity line item.
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
     * Value of each unit in Quantity. Six explicit decimal positions, Max length 18 including decimal.
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
     * Total customs value for this line item.
                It should equal the commodity unit quantity times commodity unit value.
                Six explicit decimal positions, max length 18 including decimal.
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
     * Applicable to US export shipping only.
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
     * Date of expiration. Must be at least 1 day into future.
                The date that the Commerce Export License expires. Export License commodities may not be exported from the U.S. on an expired license.
                Applicable to US Export shipping only.
                Required only if commodity is shipped on commerce export license, and Export License Number is supplied.
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
     * An identifying mark or number used on the packaging of a shipment to help customers identify a particular shipment.
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
