<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Represents all commodity data (summary and line items) within a consolidation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $GroupDescription
 * @property float $SubtotalQuantity
 * @property Money $SubtotalCustomsValue
 * @property ConsolidatedCommodity[] $Commodities

 */
class ConsolidatedCommodityDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ConsolidatedCommodityDetail';

    /**
     * Description of the commodity group which is summarised in the following subtotals.
     *
     * @param string $groupDescription
     * @return $this
     */
    public function setGroupDescription($groupDescription)
    {
        $this->values['GroupDescription'] = $groupDescription;
        return $this;
    }

    /**
     * Set SubtotalQuantity
     *
     * @param float $subtotalQuantity
     * @return $this
     */
    public function setSubtotalQuantity($subtotalQuantity)
    {
        $this->values['SubtotalQuantity'] = $subtotalQuantity;
        return $this;
    }

    /**
     * Set SubtotalCustomsValue
     *
     * @param Money $subtotalCustomsValue
     * @return $this
     */
    public function setSubtotalCustomsValue(Money $subtotalCustomsValue)
    {
        $this->values['SubtotalCustomsValue'] = $subtotalCustomsValue;
        return $this;
    }

    /**
     * Set Commodities
     *
     * @param ConsolidatedCommodity[] $commodities
     * @return $this
     */
    public function setCommodities(array $commodities)
    {
        $this->values['Commodities'] = $commodities;
        return $this;
    }
}
