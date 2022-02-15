<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackPayment
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 *
 * @property \FedEx\TrackService\SimpleType\TrackChargesPaymentClassificationType|string $Classification
 * @property \FedEx\TrackService\SimpleType\TrackPaymentType|string $Type
 * @property string $Description
 * @property string $PayorAccountNumber

 */
class TrackPayment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackPayment';

    /**
     * Indicates the classification of the charges being paid.
     *
     * @param \FedEx\TrackService\SimpleType\TrackChargesPaymentClassificationType|string $classification
     * @return $this
     */
    public function setClassification($classification)
    {
        $this->values['Classification'] = $classification;
        return $this;
    }

    /**
     * Set Type
     *
     * @param \FedEx\TrackService\SimpleType\TrackPaymentType|string $type
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
     * Set PayorAccountNumber
     *
     * @param string $payorAccountNumber
     * @return $this
     */
    public function setPayorAccountNumber($payorAccountNumber)
    {
        $this->values['PayorAccountNumber'] = $payorAccountNumber;
        return $this;
    }
}
