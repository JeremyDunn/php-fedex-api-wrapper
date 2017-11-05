<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackSpecialHandling
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\TrackSpecialHandlingType|string $Type
 * @property string $Description
 * @property \FedEx\TrackService\SimpleType\TrackPaymentType|string $PaymentType

 */
class TrackSpecialHandling extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackSpecialHandling';

    /**
     * Set Type
     *
     * @param \FedEx\TrackService\SimpleType\TrackSpecialHandlingType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Set PaymentType
     *
     * @param \FedEx\TrackService\SimpleType\TrackPaymentType|string $paymentType
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->values['PaymentType'] = $paymentType;
        return $this;
    }
}
