<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CloseSmartPostDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property string $HubId
 * @property string $CustomerId
 * @property string $CustomerManifestId
 * @property string $DestinationCountryCode
 * @property \FedEx\CloseService\SimpleType\CarrierCodeType|string $PickupCarrier

 */
class CloseSmartPostDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CloseSmartPostDetail';

    /**
     * Set HubId
     *
     * @param string $hubId
     * @return $this
     */
    public function setHubId($hubId)
    {
        $this->values['HubId'] = $hubId;
        return $this;
    }

    /**
     * Set CustomerId
     *
     * @param string $customerId
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->values['CustomerId'] = $customerId;
        return $this;
    }

    /**
     * Set CustomerManifestId
     *
     * @param string $customerManifestId
     * @return $this
     */
    public function setCustomerManifestId($customerManifestId)
    {
        $this->values['CustomerManifestId'] = $customerManifestId;
        return $this;
    }

    /**
     * Set DestinationCountryCode
     *
     * @param string $destinationCountryCode
     * @return $this
     */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->values['DestinationCountryCode'] = $destinationCountryCode;
        return $this;
    }

    /**
     * Set PickupCarrier
     *
     * @param \FedEx\CloseService\SimpleType\CarrierCodeType|string $pickupCarrier
     * @return $this
     */
    public function setPickupCarrier($pickupCarrier)
    {
        $this->values['PickupCarrier'] = $pickupCarrier;
        return $this;
    }
}
