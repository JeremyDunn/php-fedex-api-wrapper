<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Documents the kind and quantity of an individual hazardous commodity in a package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property HazardousCommodityDescription $Description
 * @property HazardousCommodityQuantityDetail $Quantity
 * @property HazardousCommodityInnerReceptacleDetail[] $InnerReceptacles
 * @property HazardousCommodityOptionDetail $Options
 * @property RadionuclideDetail $RadionuclideDetail
 * @property NetExplosiveDetail $NetExplosiveDetail

 */
class HazardousCommodityContent extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'HazardousCommodityContent';

    /**
     * Identifies and describes an individual hazardous commodity.
     *
     * @param HazardousCommodityDescription $description
     * @return $this
     */
    public function setDescription(HazardousCommodityDescription $description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Specifies the amount of the commodity in alternate units.
     *
     * @param HazardousCommodityQuantityDetail $quantity
     * @return $this
     */
    public function setQuantity(HazardousCommodityQuantityDetail $quantity)
    {
        $this->values['Quantity'] = $quantity;
        return $this;
    }

    /**
     * This describes the inner receptacle details for a hazardous commodity within the dangerous goods container.
     *
     * @param HazardousCommodityInnerReceptacleDetail[] $innerReceptacles
     * @return $this
     */
    public function setInnerReceptacles(array $innerReceptacles)
    {
        $this->values['InnerReceptacles'] = $innerReceptacles;
        return $this;
    }

    /**
     * Customer-provided specifications for handling individual commodities.
     *
     * @param HazardousCommodityOptionDetail $options
     * @return $this
     */
    public function setOptions(HazardousCommodityOptionDetail $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }

    /**
     * Specifies the details of any radio active materials within the commodity.
     *
     * @param RadionuclideDetail $radionuclideDetail
     * @return $this
     */
    public function setRadionuclideDetail(RadionuclideDetail $radionuclideDetail)
    {
        $this->values['RadionuclideDetail'] = $radionuclideDetail;
        return $this;
    }

    /**
     * The total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     *
     * @param NetExplosiveDetail $netExplosiveDetail
     * @return $this
     */
    public function setNetExplosiveDetail(NetExplosiveDetail $netExplosiveDetail)
    {
        $this->values['NetExplosiveDetail'] = $netExplosiveDetail;
        return $this;
    }
}
