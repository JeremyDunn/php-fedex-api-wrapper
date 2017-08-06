<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Totals accumulated during the processing of CRNs into the consolidation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property Weight $TotalWeight
 * @property int $TotalPackageCount
 * @property int $TotalUniqueAddressCount
 * @property Money $TotalCustomsValue
 * @property Money $TotalInsuredValue
 * @property Money $TotalFreightCharges
 * @property Money $TotalInsuranceCharges
 * @property Money $TotalTaxesOrMiscellaneousCharges
 * @property Money $TotalHandlingCosts
 * @property Money $TotalPackingCosts
 * @property ShipmentDryIceDetail $DryIceDetail
 * @property \FedEx\OpenShipService\SimpleType\DangerousGoodsAccessibilityType|string $DangerousGoodsAccessibility

 */
class InternationalDistributionSummaryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'InternationalDistributionSummaryDetail';

    /**
     * Set TotalWeight
     *
     * @param Weight $totalWeight
     * @return $this
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->values['TotalWeight'] = $totalWeight;
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
     * Set TotalUniqueAddressCount
     *
     * @param int $totalUniqueAddressCount
     * @return $this
     */
    public function setTotalUniqueAddressCount($totalUniqueAddressCount)
    {
        $this->values['TotalUniqueAddressCount'] = $totalUniqueAddressCount;
        return $this;
    }

    /**
     * Set TotalCustomsValue
     *
     * @param Money $totalCustomsValue
     * @return $this
     */
    public function setTotalCustomsValue(Money $totalCustomsValue)
    {
        $this->values['TotalCustomsValue'] = $totalCustomsValue;
        return $this;
    }

    /**
     * Set TotalInsuredValue
     *
     * @param Money $totalInsuredValue
     * @return $this
     */
    public function setTotalInsuredValue(Money $totalInsuredValue)
    {
        $this->values['TotalInsuredValue'] = $totalInsuredValue;
        return $this;
    }

    /**
     * Set TotalFreightCharges
     *
     * @param Money $totalFreightCharges
     * @return $this
     */
    public function setTotalFreightCharges(Money $totalFreightCharges)
    {
        $this->values['TotalFreightCharges'] = $totalFreightCharges;
        return $this;
    }

    /**
     * Set TotalInsuranceCharges
     *
     * @param Money $totalInsuranceCharges
     * @return $this
     */
    public function setTotalInsuranceCharges(Money $totalInsuranceCharges)
    {
        $this->values['TotalInsuranceCharges'] = $totalInsuranceCharges;
        return $this;
    }

    /**
     * Set TotalTaxesOrMiscellaneousCharges
     *
     * @param Money $totalTaxesOrMiscellaneousCharges
     * @return $this
     */
    public function setTotalTaxesOrMiscellaneousCharges(Money $totalTaxesOrMiscellaneousCharges)
    {
        $this->values['TotalTaxesOrMiscellaneousCharges'] = $totalTaxesOrMiscellaneousCharges;
        return $this;
    }

    /**
     * Set TotalHandlingCosts
     *
     * @param Money $totalHandlingCosts
     * @return $this
     */
    public function setTotalHandlingCosts(Money $totalHandlingCosts)
    {
        $this->values['TotalHandlingCosts'] = $totalHandlingCosts;
        return $this;
    }

    /**
     * Set TotalPackingCosts
     *
     * @param Money $totalPackingCosts
     * @return $this
     */
    public function setTotalPackingCosts(Money $totalPackingCosts)
    {
        $this->values['TotalPackingCosts'] = $totalPackingCosts;
        return $this;
    }

    /**
     * Set DryIceDetail
     *
     * @param ShipmentDryIceDetail $dryIceDetail
     * @return $this
     */
    public function setDryIceDetail(ShipmentDryIceDetail $dryIceDetail)
    {
        $this->values['DryIceDetail'] = $dryIceDetail;
        return $this;
    }

    /**
     * Set DangerousGoodsAccessibility
     *
     * @param \FedEx\OpenShipService\SimpleType\DangerousGoodsAccessibilityType|string $dangerousGoodsAccessibility
     * @return $this
     */
    public function setDangerousGoodsAccessibility($dangerousGoodsAccessibility)
    {
        $this->values['DangerousGoodsAccessibility'] = $dangerousGoodsAccessibility;
        return $this;
    }
}
