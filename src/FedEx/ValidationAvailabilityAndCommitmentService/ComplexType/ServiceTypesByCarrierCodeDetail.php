<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the services types supported for a specific carrier code.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property string[] $Services

 */
class ServiceTypesByCarrierCodeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ServiceTypesByCarrierCodeDetail';

    /**
     * Set CarrierCode
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Set Services
     *
     * @param string $services
     * @return $this
     */
    public function setServices($services)
    {
        $this->values['Services'] = $services;
        return $this;
    }
}
