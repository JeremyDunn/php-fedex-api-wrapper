<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * WelcomeKitDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property boolean $IsRequested
 * @property string $PromotionCode

 */
class WelcomeKitDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'WelcomeKitDetail';

    /**
     * Set IsRequested
     *
     * @param boolean $isRequested
     * @return $this
     */
    public function setIsRequested($isRequested)
    {
        $this->values['IsRequested'] = $isRequested;
        return $this;
    }

    /**
     * Set PromotionCode
     *
     * @param string $promotionCode
     * @return $this
     */
    public function setPromotionCode($promotionCode)
    {
        $this->values['PromotionCode'] = $promotionCode;
        return $this;
    }
}
