<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details for a Recipient profile.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property ProfileContact[] $Contacts
 * @property string[] $AlternateFirstNames
 * @property ParsedPersonName $AuthorizedName
 * @property AuthorizedAddress[] $AuthorizedAddresses
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ProfileType|string $AlternateCreditCardSource
 * @property CreditCard $CreditCard
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerAccountStatusType|string $AccountStatus
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\StatusType|string $ProfileStatus
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerAccountType|string[] $AccountTypes
 * @property string $ExpirationDate
 * @property string $ExpirationReason
 * @property string $CreationDate

 */
class RecipientProfile extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RecipientProfile';

    /**
     * Set Contacts
     *
     * @param ProfileContact[] $contacts
     * @return $this
     */
    public function setContacts(array $contacts)
    {
        $this->values['Contacts'] = $contacts;
        return $this;
    }

    /**
     * List of alternate first names that can be used as contact.
     *
     * @param string $alternateFirstNames
     * @return $this
     */
    public function setAlternateFirstNames($alternateFirstNames)
    {
        $this->values['AlternateFirstNames'] = $alternateFirstNames;
        return $this;
    }

    /**
     * Specifies the legal name associated with the recipient profile.
     *
     * @param ParsedPersonName $authorizedName
     * @return $this
     */
    public function setAuthorizedName(ParsedPersonName $authorizedName)
    {
        $this->values['AuthorizedName'] = $authorizedName;
        return $this;
    }

    /**
     * All the addresses that are authorized to be used with this profile.
     *
     * @param AuthorizedAddress[] $authorizedAddresses
     * @return $this
     */
    public function setAuthorizedAddresses(array $authorizedAddresses)
    {
        $this->values['AuthorizedAddresses'] = $authorizedAddresses;
        return $this;
    }

    /**
     * Specifies an alternate source for the credit card data.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ProfileType|string $alternateCreditCardSource
     * @return $this
     */
    public function setAlternateCreditCardSource($alternateCreditCardSource)
    {
        $this->values['AlternateCreditCardSource'] = $alternateCreditCardSource;
        return $this;
    }

    /**
     * Set CreditCard
     *
     * @param CreditCard $creditCard
     * @return $this
     */
    public function setCreditCard(CreditCard $creditCard)
    {
        $this->values['CreditCard'] = $creditCard;
        return $this;
    }

    /**
     * Set AccountStatus
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerAccountStatusType|string $accountStatus
     * @return $this
     */
    public function setAccountStatus($accountStatus)
    {
        $this->values['AccountStatus'] = $accountStatus;
        return $this;
    }

    /**
     * Set ProfileStatus
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\StatusType|string $profileStatus
     * @return $this
     */
    public function setProfileStatus($profileStatus)
    {
        $this->values['ProfileStatus'] = $profileStatus;
        return $this;
    }

    /**
     * Set AccountTypes
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CustomerAccountType[]|string[] $accountTypes
     * @return $this
     */
    public function setAccountTypes(array $accountTypes)
    {
        $this->values['AccountTypes'] = $accountTypes;
        return $this;
    }

    /**
     * Set ExpirationDate
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
     * Set ExpirationReason
     *
     * @param string $expirationReason
     * @return $this
     */
    public function setExpirationReason($expirationReason)
    {
        $this->values['ExpirationReason'] = $expirationReason;
        return $this;
    }

    /**
     * Set CreationDate
     *
     * @param string $creationDate
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->values['CreationDate'] = $creationDate;
        return $this;
    }
}
