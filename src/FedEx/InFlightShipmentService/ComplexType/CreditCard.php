<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CreditCard
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property string $Number
 * @property \FedEx\InFlightShipmentService\SimpleType\CreditCardType|string $CreditCardType
 * @property string $ExpirationDate
 * @property string $LastAuthenticationByFedexDate
 * @property string $VerificationCode
 * @property ParsedContactAndAddress $CreditCardHolder
 * @property string[] $TrackData

 */
class CreditCard extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CreditCard';

    /**
     * Set Number
     *
     * @param string $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->values['Number'] = $number;
        return $this;
    }

    /**
     * Set CreditCardType
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\CreditCardType|string $creditCardType
     * @return $this
     */
    public function setCreditCardType($creditCardType)
    {
        $this->values['CreditCardType'] = $creditCardType;
        return $this;
    }

    /**
     * Must be in one of the following formats: YYMM, YYYYMM, or YYYYMMDD.
     *
     * @param string $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->values['ExpirationDate'] = $expirationDate;
        return $this;
    }

    /**
     * Date when the credit card was last used in a FedEx online transaction.
     *
     * @param string $lastAuthenticationByFedexDate
     * @return $this
     */
    public function setLastAuthenticationByFedexDate($lastAuthenticationByFedexDate)
    {
        $this->values['LastAuthenticationByFedexDate'] = $lastAuthenticationByFedexDate;
        return $this;
    }

    /**
     * Set VerificationCode
     *
     * @param string $verificationCode
     * @return $this
     */
    public function setVerificationCode($verificationCode)
    {
        $this->values['VerificationCode'] = $verificationCode;
        return $this;
    }

    /**
     * Set CreditCardHolder
     *
     * @param ParsedContactAndAddress $creditCardHolder
     * @return $this
     */
    public function setCreditCardHolder(ParsedContactAndAddress $creditCardHolder)
    {
        $this->values['CreditCardHolder'] = $creditCardHolder;
        return $this;
    }

    /**
     * This field contains the track data from the credit card stripe.
     *
     * @param string $trackData
     * @return $this
     */
    public function setTrackData($trackData)
    {
        $this->values['TrackData'] = $trackData;
        return $this;
    }
}
