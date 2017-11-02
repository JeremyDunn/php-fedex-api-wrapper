<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Represents a transaction-specific set of initiative control data for all services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property string[] $Content

 */
class InitiativeManifest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'InitiativeManifest';

    /**
     * Compressed data representing status of initiatives per domain and service.
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->values['Content'] = $content;
        return $this;
    }
}
