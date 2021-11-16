<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomerShippingVolumeDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $FirstShipDate
 * @property string $LastShipDate
 * @property int $TotalPackageCount
 * @property int $DomesticPackageCount
 * @property int $InternationalPackageCount
 * @property Money $TotalRevenue
 * @property Money $DomesticRevenue
 * @property Money $InternationalRevenue
 * @property string $SalesTerritory
 * @property string $GlobalSalesTerritory
 * @property Money $AverageDomesticRevenue
 * @property Money $AverageRevenue
 * @property Money $DomesticAverageRevenue
 * @property Money $InternationalAverageRevenue
 * @property Money $NationalDomesticRevenue
 * @property string $NationalDiscountAccount
 * @property string $DebutCompanyId

 */
class CustomerShippingVolumeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomerShippingVolumeDetail';

    /**
     * Set FirstShipDate
     *
     * @param string $firstShipDate
     * @return $this
     */
    public function setFirstShipDate($firstShipDate)
    {
        $this->values['FirstShipDate'] = $firstShipDate;
        return $this;
    }

    /**
     * Set LastShipDate
     *
     * @param string $lastShipDate
     * @return $this
     */
    public function setLastShipDate($lastShipDate)
    {
        $this->values['LastShipDate'] = $lastShipDate;
        return $this;
    }

    /**
     * Set TotalPackageCount
     *
     * @param int $totalPackageCount
     * @return $this
     */
    public function setTotalPackageCount($totalPackageCount)
    {
        $this->values['TotalPackageCount'] = $totalPackageCount;
        return $this;
    }

    /**
     * Set DomesticPackageCount
     *
     * @param int $domesticPackageCount
     * @return $this
     */
    public function setDomesticPackageCount($domesticPackageCount)
    {
        $this->values['DomesticPackageCount'] = $domesticPackageCount;
        return $this;
    }

    /**
     * Set InternationalPackageCount
     *
     * @param int $internationalPackageCount
     * @return $this
     */
    public function setInternationalPackageCount($internationalPackageCount)
    {
        $this->values['InternationalPackageCount'] = $internationalPackageCount;
        return $this;
    }

    /**
     * Set TotalRevenue
     *
     * @param Money $totalRevenue
     * @return $this
     */
    public function setTotalRevenue(Money $totalRevenue)
    {
        $this->values['TotalRevenue'] = $totalRevenue;
        return $this;
    }

    /**
     * Set DomesticRevenue
     *
     * @param Money $domesticRevenue
     * @return $this
     */
    public function setDomesticRevenue(Money $domesticRevenue)
    {
        $this->values['DomesticRevenue'] = $domesticRevenue;
        return $this;
    }

    /**
     * Set InternationalRevenue
     *
     * @param Money $internationalRevenue
     * @return $this
     */
    public function setInternationalRevenue(Money $internationalRevenue)
    {
        $this->values['InternationalRevenue'] = $internationalRevenue;
        return $this;
    }

    /**
     * Set SalesTerritory
     *
     * @param string $salesTerritory
     * @return $this
     */
    public function setSalesTerritory($salesTerritory)
    {
        $this->values['SalesTerritory'] = $salesTerritory;
        return $this;
    }

    /**
     * Specifies the global territory for sales that is assigned to the customer's account, which is different from the sales territory which represents the local domestic US sales territory.
     *
     * @param string $globalSalesTerritory
     * @return $this
     */
    public function setGlobalSalesTerritory($globalSalesTerritory)
    {
        $this->values['GlobalSalesTerritory'] = $globalSalesTerritory;
        return $this;
    }

    /**
     * This field is deprecated and will be removed in a future release.
     *
     * @param Money $averageDomesticRevenue
     * @return $this
     */
    public function setAverageDomesticRevenue(Money $averageDomesticRevenue)
    {
        $this->values['AverageDomesticRevenue'] = $averageDomesticRevenue;
        return $this;
    }

    /**
     * Set AverageRevenue
     *
     * @param Money $averageRevenue
     * @return $this
     */
    public function setAverageRevenue(Money $averageRevenue)
    {
        $this->values['AverageRevenue'] = $averageRevenue;
        return $this;
    }

    /**
     * Set DomesticAverageRevenue
     *
     * @param Money $domesticAverageRevenue
     * @return $this
     */
    public function setDomesticAverageRevenue(Money $domesticAverageRevenue)
    {
        $this->values['DomesticAverageRevenue'] = $domesticAverageRevenue;
        return $this;
    }

    /**
     * Set InternationalAverageRevenue
     *
     * @param Money $internationalAverageRevenue
     * @return $this
     */
    public function setInternationalAverageRevenue(Money $internationalAverageRevenue)
    {
        $this->values['InternationalAverageRevenue'] = $internationalAverageRevenue;
        return $this;
    }

    /**
     * Set NationalDomesticRevenue
     *
     * @param Money $nationalDomesticRevenue
     * @return $this
     */
    public function setNationalDomesticRevenue(Money $nationalDomesticRevenue)
    {
        $this->values['NationalDomesticRevenue'] = $nationalDomesticRevenue;
        return $this;
    }

    /**
     * Set NationalDiscountAccount
     *
     * @param string $nationalDiscountAccount
     * @return $this
     */
    public function setNationalDiscountAccount($nationalDiscountAccount)
    {
        $this->values['NationalDiscountAccount'] = $nationalDiscountAccount;
        return $this;
    }

    /**
     * Set DebutCompanyId
     *
     * @param string $debutCompanyId
     * @return $this
     */
    public function setDebutCompanyId($debutCompanyId)
    {
        $this->values['DebutCompanyId'] = $debutCompanyId;
        return $this;
    }
}
