<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SmartPostAccountDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string[] $AllowedHubs
 * @property string $MailerId
 * @property string $DistributionCenter
 * @property string $SmartPostId
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SmartPostAccountZoneType|string $AccountZoneType
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CarrierCodeType|string $PickUpCarrier
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SmartPostIndiciaType|string[] $AllowedIndicia
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SmartPostAccountFeatureType|string[] $Features

 */
class SmartPostAccountDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SmartPostAccountDetail';

    /**
     * Set AllowedHubs
     *
     * @param string $allowedHubs
     * @return $this
     */
    public function setAllowedHubs($allowedHubs)
    {
        $this->values['AllowedHubs'] = $allowedHubs;
        return $this;
    }

    /**
     * Set MailerId
     *
     * @param string $mailerId
     * @return $this
     */
    public function setMailerId($mailerId)
    {
        $this->values['MailerId'] = $mailerId;
        return $this;
    }

    /**
     * Set DistributionCenter
     *
     * @param string $distributionCenter
     * @return $this
     */
    public function setDistributionCenter($distributionCenter)
    {
        $this->values['DistributionCenter'] = $distributionCenter;
        return $this;
    }

    /**
     * Set SmartPostId
     *
     * @param string $smartPostId
     * @return $this
     */
    public function setSmartPostId($smartPostId)
    {
        $this->values['SmartPostId'] = $smartPostId;
        return $this;
    }

    /**
     * Specifies the zone type that SmartPost classifies the customer account as. This controls how the SmartPost outbound shipments are rated, routed, tracked and reported.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SmartPostAccountZoneType|string $accountZoneType
     * @return $this
     */
    public function setAccountZoneType($accountZoneType)
    {
        $this->values['AccountZoneType'] = $accountZoneType;
        return $this;
    }

    /**
     * Set PickUpCarrier
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CarrierCodeType|string $pickUpCarrier
     * @return $this
     */
    public function setPickUpCarrier($pickUpCarrier)
    {
        $this->values['PickUpCarrier'] = $pickUpCarrier;
        return $this;
    }

    /**
     * Array containing only those indicia that this account is contracted to use.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SmartPostIndiciaType[]|string[] $allowedIndicia
     * @return $this
     */
    public function setAllowedIndicia(array $allowedIndicia)
    {
        $this->values['AllowedIndicia'] = $allowedIndicia;
        return $this;
    }

    /**
     * Specifies features of SmartPost shipping which apply to shipments processed using the enclosing account.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\SmartPostAccountFeatureType[]|string[] $features
     * @return $this
     */
    public function setFeatures(array $features)
    {
        $this->values['Features'] = $features;
        return $this;
    }
}
