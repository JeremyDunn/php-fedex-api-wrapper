<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This describes information about the inner receptacles for the hazardous commodity in a particular dangerous goods container.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property HazardousCommodityQuantityDetail $Quantity

 */
class HazardousCommodityInnerReceptacleDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'HazardousCommodityInnerReceptacleDetail';

    /**
     * This specifies the quantity contained in the inner receptacle.
     *
     * @param HazardousCommodityQuantityDetail $quantity
     * @return $this
     */
    public function setQuantity(HazardousCommodityQuantityDetail $quantity)
    {
        $this->values['Quantity'] = $quantity;
        return $this;
    }
}
