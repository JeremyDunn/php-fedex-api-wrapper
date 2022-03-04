<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupHistoryDetailRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property UserDetail $UserDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property \FedEx\PickupService\SimpleType\PickupServiceLevelType|string $ServiceLevel
 * @property string $ScheduledDate
 * @property AssociatedAccount $AssociatedAccountNumber
 * @property \FedEx\PickupService\SimpleType\CarrierCodeType|string $CarrierCode
 * @property boolean $IsExpressFreight
 * @property string $PickupConfirmationNumber
 * @property string $Location
 * @property string $StandingInstructionId
 * @property string $CountryCode
 * @property string $PostalCode

 */
class PickupHistoryDetailRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupHistoryDetailRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return $this
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->values['WebAuthenticationDetail'] = $webAuthenticationDetail;
        return $this;
    }

    /**
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * @return $this
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->values['ClientDetail'] = $clientDetail;
        return $this;
    }

    /**
     * Set UserDetail
     *
     * @param UserDetail $userDetail
     * @return $this
     */
    public function setUserDetail(UserDetail $userDetail)
    {
        $this->values['UserDetail'] = $userDetail;
        return $this;
    }

    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return $this
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->values['TransactionDetail'] = $transactionDetail;
        return $this;
    }

    /**
     * Set Version
     *
     * @param VersionId $version
     * @return $this
     */
    public function setVersion(VersionId $version)
    {
        $this->values['Version'] = $version;
        return $this;
    }

    /**
     * Set ServiceLevel
     *
     * @param \FedEx\PickupService\SimpleType\PickupServiceLevelType|string $serviceLevel
     * @return $this
     */
    public function setServiceLevel($serviceLevel)
    {
        $this->values['ServiceLevel'] = $serviceLevel;
        return $this;
    }

    /**
     * The local date which the pickup was originally scheduled to be picked up on. The date provided is the local to the client of the request. The date specification does not include any time zone designators.
     *
     * @param string $scheduledDate
     * @return $this
     */
    public function setScheduledDate($scheduledDate)
    {
        $this->values['ScheduledDate'] = $scheduledDate;
        return $this;
    }

    /**
     * Set AssociatedAccountNumber
     *
     * @param AssociatedAccount $associatedAccountNumber
     * @return $this
     */
    public function setAssociatedAccountNumber(AssociatedAccount $associatedAccountNumber)
    {
        $this->values['AssociatedAccountNumber'] = $associatedAccountNumber;
        return $this;
    }

    /**
     * Set CarrierCode
     *
     * @param \FedEx\PickupService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Set IsExpressFreight
     *
     * @param boolean $isExpressFreight
     * @return $this
     */
    public function setIsExpressFreight($isExpressFreight)
    {
        $this->values['IsExpressFreight'] = $isExpressFreight;
        return $this;
    }

    /**
     * Set PickupConfirmationNumber
     *
     * @param string $pickupConfirmationNumber
     * @return $this
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber)
    {
        $this->values['PickupConfirmationNumber'] = $pickupConfirmationNumber;
        return $this;
    }

    /**
     * Set Location
     *
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->values['Location'] = $location;
        return $this;
    }

    /**
     * Set StandingInstructionId
     *
     * @param string $standingInstructionId
     * @return $this
     */
    public function setStandingInstructionId($standingInstructionId)
    {
        $this->values['StandingInstructionId'] = $standingInstructionId;
        return $this;
    }

    /**
     * Set CountryCode
     *
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->values['CountryCode'] = $countryCode;
        return $this;
    }

    /**
     * Set PostalCode
     *
     * @param string $postalCode
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->values['PostalCode'] = $postalCode;
        return $this;
    }
}
