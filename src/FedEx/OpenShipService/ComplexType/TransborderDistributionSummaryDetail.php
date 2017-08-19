<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the summary of aggregates that are maintianed for a transborder consolidation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property int $ExpressPackageCount
 * @property Weight $ExpressTotalPackageWeight
 * @property Weight $ExpressTotalPackageAdjustedWeight
 * @property int $ExpressFreightPackageCount
 * @property Weight $ExpressTotalFreightWeight
 * @property Weight $ExpressTotalFreightAdjustedWeight
 * @property int $GroundPackageCount
 * @property Weight $GroundTotalPackageWeight
 * @property Weight $GroundTotalPackageAdjustedWeight
 * @property int $NumberOfUnconsolidatedCommodities

 */
class TransborderDistributionSummaryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TransborderDistributionSummaryDetail';

    /**
     * Set ExpressPackageCount
     *
     * @param int $expressPackageCount
     * @return $this
     */
    public function setExpressPackageCount($expressPackageCount)
    {
        $this->values['ExpressPackageCount'] = $expressPackageCount;
        return $this;
    }

    /**
     * Set ExpressTotalPackageWeight
     *
     * @param Weight $expressTotalPackageWeight
     * @return $this
     */
    public function setExpressTotalPackageWeight(Weight $expressTotalPackageWeight)
    {
        $this->values['ExpressTotalPackageWeight'] = $expressTotalPackageWeight;
        return $this;
    }

    /**
     * Set ExpressTotalPackageAdjustedWeight
     *
     * @param Weight $expressTotalPackageAdjustedWeight
     * @return $this
     */
    public function setExpressTotalPackageAdjustedWeight(Weight $expressTotalPackageAdjustedWeight)
    {
        $this->values['ExpressTotalPackageAdjustedWeight'] = $expressTotalPackageAdjustedWeight;
        return $this;
    }

    /**
     * Set ExpressFreightPackageCount
     *
     * @param int $expressFreightPackageCount
     * @return $this
     */
    public function setExpressFreightPackageCount($expressFreightPackageCount)
    {
        $this->values['ExpressFreightPackageCount'] = $expressFreightPackageCount;
        return $this;
    }

    /**
     * Set ExpressTotalFreightWeight
     *
     * @param Weight $expressTotalFreightWeight
     * @return $this
     */
    public function setExpressTotalFreightWeight(Weight $expressTotalFreightWeight)
    {
        $this->values['ExpressTotalFreightWeight'] = $expressTotalFreightWeight;
        return $this;
    }

    /**
     * Set ExpressTotalFreightAdjustedWeight
     *
     * @param Weight $expressTotalFreightAdjustedWeight
     * @return $this
     */
    public function setExpressTotalFreightAdjustedWeight(Weight $expressTotalFreightAdjustedWeight)
    {
        $this->values['ExpressTotalFreightAdjustedWeight'] = $expressTotalFreightAdjustedWeight;
        return $this;
    }

    /**
     * Set GroundPackageCount
     *
     * @param int $groundPackageCount
     * @return $this
     */
    public function setGroundPackageCount($groundPackageCount)
    {
        $this->values['GroundPackageCount'] = $groundPackageCount;
        return $this;
    }

    /**
     * Set GroundTotalPackageWeight
     *
     * @param Weight $groundTotalPackageWeight
     * @return $this
     */
    public function setGroundTotalPackageWeight(Weight $groundTotalPackageWeight)
    {
        $this->values['GroundTotalPackageWeight'] = $groundTotalPackageWeight;
        return $this;
    }

    /**
     * Set GroundTotalPackageAdjustedWeight
     *
     * @param Weight $groundTotalPackageAdjustedWeight
     * @return $this
     */
    public function setGroundTotalPackageAdjustedWeight(Weight $groundTotalPackageAdjustedWeight)
    {
        $this->values['GroundTotalPackageAdjustedWeight'] = $groundTotalPackageAdjustedWeight;
        return $this;
    }

    /**
     * The number of commodities that are unique commodities in the consolidation. These commodities are mentioned as separate items on the consolidated commercial invoice.
     *
     * @param int $numberOfUnconsolidatedCommodities
     * @return $this
     */
    public function setNumberOfUnconsolidatedCommodities($numberOfUnconsolidatedCommodities)
    {
        $this->values['NumberOfUnconsolidatedCommodities'] = $numberOfUnconsolidatedCommodities;
        return $this;
    }
}
