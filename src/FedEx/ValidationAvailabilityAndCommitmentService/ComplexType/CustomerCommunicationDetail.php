<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomerCommunicationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $PreferredCommunicationCodeType
 * @property Localization $Localization
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\EMailNotificationFormatType|string $EmailNotificationFormat
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CorrespondenceType|string[] $MarketingCorrespondenceTypes
 * @property string $AttentionToName
 * @property SocialMediaDetail[] $SocialMediaDetails

 */
class CustomerCommunicationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomerCommunicationDetail';

    /**
     * Specifies the customer's preferred mode of communication by FedEx. This specifies how the customer wants to be contacted by FedEx for customer service notifications.
     *
     * @param string $preferredCommunicationCodeType
     * @return $this
     */
    public function setPreferredCommunicationCodeType($preferredCommunicationCodeType)
    {
        $this->values['PreferredCommunicationCodeType'] = $preferredCommunicationCodeType;
        return $this;
    }

    /**
     * Governs the language to be used for communicating with this customer.
     *
     * @param Localization $localization
     * @return $this
     */
    public function setLocalization(Localization $localization)
    {
        $this->values['Localization'] = $localization;
        return $this;
    }

    /**
     * Specifies the format email such as HTML or TEXT.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\EMailNotificationFormatType|string $emailNotificationFormat
     * @return $this
     */
    public function setEmailNotificationFormat($emailNotificationFormat)
    {
        $this->values['EmailNotificationFormat'] = $emailNotificationFormat;
        return $this;
    }

    /**
     * Specifies how FedEx can contact the customer for marketing purposes.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CorrespondenceType[]|string[] $marketingCorrespondenceTypes
     * @return $this
     */
    public function setMarketingCorrespondenceTypes(array $marketingCorrespondenceTypes)
    {
        $this->values['MarketingCorrespondenceTypes'] = $marketingCorrespondenceTypes;
        return $this;
    }

    /**
     * Identifies the name to be put on the attentionTo field of a correspondence.
     *
     * @param string $attentionToName
     * @return $this
     */
    public function setAttentionToName($attentionToName)
    {
        $this->values['AttentionToName'] = $attentionToName;
        return $this;
    }

    /**
     * Set SocialMediaDetails
     *
     * @param SocialMediaDetail[] $socialMediaDetails
     * @return $this
     */
    public function setSocialMediaDetails(array $socialMediaDetails)
    {
        $this->values['SocialMediaDetails'] = $socialMediaDetails;
        return $this;
    }
}
