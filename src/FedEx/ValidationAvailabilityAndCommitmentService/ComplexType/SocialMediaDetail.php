<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details about customer's social media accounts and contact persmissions.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $PlatformId
 * @property string $UserId

 */
class SocialMediaDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SocialMediaDetail';

    /**
     * Specifies the platform ID of the social media platform.
     *
     * @param string $platformId
     * @return $this
     */
    public function setPlatformId($platformId)
    {
        $this->values['PlatformId'] = $platformId;
        return $this;
    }

    /**
     * Specifies the user id of the customer's account on the social media platform specified.
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->values['UserId'] = $userId;
        return $this;
    }
}
