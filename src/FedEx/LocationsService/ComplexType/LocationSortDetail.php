<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the criterion and order to be used to sort the location details.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 *
 * @property \FedEx\LocationsService\SimpleType\LocationSortCriteriaType|string $Criterion
 * @property \FedEx\LocationsService\SimpleType\LocationSortOrderType|string $Order

 */
class LocationSortDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'LocationSortDetail';

    /**
     * Specifies the criterion to be used to sort the location details.
     *
     * @param \FedEx\LocationsService\SimpleType\LocationSortCriteriaType|string $criterion
     * @return $this
     */
    public function setCriterion($criterion)
    {
        $this->values['Criterion'] = $criterion;
        return $this;
    }

    /**
     * Specifies sort order of the location details.
     *
     * @param \FedEx\LocationsService\SimpleType\LocationSortOrderType|string $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->values['Order'] = $order;
        return $this;
    }
}
