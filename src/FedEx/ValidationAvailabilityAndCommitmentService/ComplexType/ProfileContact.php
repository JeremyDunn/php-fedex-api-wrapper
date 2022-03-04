<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ProfileContact
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $ContactId
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ProfileContactType|string $Type
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ProfileContactAttribute|string[] $Attributes
 * @property ParsedPersonName $Name
 * @property string $Company
 * @property string $Division
 * @property string $Department
 * @property string $StoreId
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\Gender|string $Gender
 * @property ParsedPhoneNumberDetail[] $PhoneNumbers
 * @property EMailAddressDetail[] $EMailAddressDetails
 * @property Address $Address
 * @property AddressAncillaryDetail $AddressAncillaryDetail
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\AddressVerificationOverrideReasonType|string $AddressVerficationOverrideReason
 * @property CustomerCommunicationDetail $CommunicationDetail
 * @property string $CustomerReference

 */
class ProfileContact extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ProfileContact';

    /**
     * Uniquely identifies a profile contact
     *
     * @param string $contactId
     * @return $this
     */
    public function setContactId($contactId)
    {
        $this->values['ContactId'] = $contactId;
        return $this;
    }

    /**
     * Identifies the type of contact.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ProfileContactType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Specifies additional attributes about this contact.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ProfileContactAttribute[]|string[] $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['Attributes'] = $attributes;
        return $this;
    }

    /**
     * Set Name
     *
     * @param ParsedPersonName $name
     * @return $this
     */
    public function setName(ParsedPersonName $name)
    {
        $this->values['Name'] = $name;
        return $this;
    }

    /**
     * Set Company
     *
     * @param string $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->values['Company'] = $company;
        return $this;
    }

    /**
     * Set Division
     *
     * @param string $division
     * @return $this
     */
    public function setDivision($division)
    {
        $this->values['Division'] = $division;
        return $this;
    }

    /**
     * Set Department
     *
     * @param string $department
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->values['Department'] = $department;
        return $this;
    }

    /**
     * Set StoreId
     *
     * @param string $storeId
     * @return $this
     */
    public function setStoreId($storeId)
    {
        $this->values['StoreId'] = $storeId;
        return $this;
    }

    /**
     * Set Gender
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\Gender|string $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->values['Gender'] = $gender;
        return $this;
    }

    /**
     * Set PhoneNumbers
     *
     * @param ParsedPhoneNumberDetail[] $phoneNumbers
     * @return $this
     */
    public function setPhoneNumbers(array $phoneNumbers)
    {
        $this->values['PhoneNumbers'] = $phoneNumbers;
        return $this;
    }

    /**
     * Set EMailAddressDetails
     *
     * @param EMailAddressDetail[] $eMailAddressDetails
     * @return $this
     */
    public function setEMailAddressDetails(array $eMailAddressDetails)
    {
        $this->values['EMailAddressDetails'] = $eMailAddressDetails;
        return $this;
    }

    /**
     * Set Address
     *
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->values['Address'] = $address;
        return $this;
    }

    /**
     * Specifies additional details about the address.
     *
     * @param AddressAncillaryDetail $addressAncillaryDetail
     * @return $this
     */
    public function setAddressAncillaryDetail(AddressAncillaryDetail $addressAncillaryDetail)
    {
        $this->values['AddressAncillaryDetail'] = $addressAncillaryDetail;
        return $this;
    }

    /**
     * Specifies the reason to override address verification.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\AddressVerificationOverrideReasonType|string $addressVerficationOverrideReason
     * @return $this
     */
    public function setAddressVerficationOverrideReason($addressVerficationOverrideReason)
    {
        $this->values['AddressVerficationOverrideReason'] = $addressVerficationOverrideReason;
        return $this;
    }

    /**
     * Set CommunicationDetail
     *
     * @param CustomerCommunicationDetail $communicationDetail
     * @return $this
     */
    public function setCommunicationDetail(CustomerCommunicationDetail $communicationDetail)
    {
        $this->values['CommunicationDetail'] = $communicationDetail;
        return $this;
    }

    /**
     * Customer specified reference for this contact.
     *
     * @param string $customerReference
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->values['CustomerReference'] = $customerReference;
        return $this;
    }
}
