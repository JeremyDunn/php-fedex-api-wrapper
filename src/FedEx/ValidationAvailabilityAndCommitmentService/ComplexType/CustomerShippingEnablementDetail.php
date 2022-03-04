<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the shipping enablements a customer has.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property PolicyGridManifest[] $PolicyGridManifests

 */
class CustomerShippingEnablementDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomerShippingEnablementDetail';

    /**
     * Set PolicyGridManifests
     *
     * @param PolicyGridManifest[] $policyGridManifests
     * @return $this
     */
    public function setPolicyGridManifests(array $policyGridManifests)
    {
        $this->values['PolicyGridManifests'] = $policyGridManifests;
        return $this;
    }
}
