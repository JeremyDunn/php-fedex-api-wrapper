<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These special services are available at the consolidation level for some or all consolidation types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the consolidation special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property \FedEx\OpenShipService\SimpleType\ConsolidationSpecialServiceType|string[] $SpecialServiceTypes
 * @property PriorityAlertDetail $PriorityAlertDetail

 */
class ConsolidationSpecialServicesRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ConsolidationSpecialServicesRequested';

    /**
     * The types of all special services requested for the enclosing consolidation.
     *
     * @param \FedEx\OpenShipService\SimpleType\ConsolidationSpecialServiceType[]|string[] $specialServiceTypes
     * @return $this
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->values['SpecialServiceTypes'] = $specialServiceTypes;
        return $this;
    }

    /**
     * Set PriorityAlertDetail
     *
     * @param PriorityAlertDetail $priorityAlertDetail
     * @return $this
     */
    public function setPriorityAlertDetail(PriorityAlertDetail $priorityAlertDetail)
    {
        $this->values['PriorityAlertDetail'] = $priorityAlertDetail;
        return $this;
    }
}
