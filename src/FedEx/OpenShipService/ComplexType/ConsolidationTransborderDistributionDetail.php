<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies consolidation data for a tranborder distribution shipment. This is data that can be provided by the customer at the consolidation creation time.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property TransborderDistributionSpecialServicesRequested $SpecialServicesRequested
 * @property \FedEx\OpenShipService\SimpleType\TransborderDistributionRoutingType|string $Routing

 */
class ConsolidationTransborderDistributionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ConsolidationTransborderDistributionDetail';

    /**
     * Set SpecialServicesRequested
     *
     * @param TransborderDistributionSpecialServicesRequested $specialServicesRequested
     * @return $this
     */
    public function setSpecialServicesRequested(TransborderDistributionSpecialServicesRequested $specialServicesRequested)
    {
        $this->values['SpecialServicesRequested'] = $specialServicesRequested;
        return $this;
    }

    /**
     * Specifies how to route the transborder distribution CRNs to different distribution locations.
     *
     * @param \FedEx\OpenShipService\SimpleType\TransborderDistributionRoutingType|string $routing
     * @return $this
     */
    public function setRouting($routing)
    {
        $this->values['Routing'] = $routing;
        return $this;
    }
}
