<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * GetAllSpecialServicesRequest
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property GetAllSpecialServicesProcessingOptionsRequested $ProcessingOptions
 * @property EnterpriseCustomer $Customer
 * @property RestrictionsAndPrivilegesPolicyDetail $RestrictionsAndPrivileges
 * @property string $OriginRoutingCode
 * @property string $DestinationRoutingCode
 * @property string $FormId
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CarrierCodeType|string[] $CarrierCodes
 * @property RequestedShipment $RequestedShipment

 */
class GetAllSpecialServicesRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'GetAllSpecialServicesRequest';

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
     * FOR FEDEX INTERNAL USE ONLY: These processing options are presently all internal.
     *
     * @param GetAllSpecialServicesProcessingOptionsRequested $processingOptions
     * @return $this
     */
    public function setProcessingOptions(GetAllSpecialServicesProcessingOptionsRequested $processingOptions)
    {
        $this->values['ProcessingOptions'] = $processingOptions;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: Only internal FedEx applications can include customer.
     *
     * @param EnterpriseCustomer $customer
     * @return $this
     */
    public function setCustomer(EnterpriseCustomer $customer)
    {
        $this->values['Customer'] = $customer;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: Restrictions and privileges associated with an entity based on one or more identifiers (for example, account number or unique user id). These restrictions and privileges can be used to determine whether an entity is enabled to perform various operations.
     *
     * @param RestrictionsAndPrivilegesPolicyDetail $restrictionsAndPrivileges
     * @return $this
     */
    public function setRestrictionsAndPrivileges(RestrictionsAndPrivilegesPolicyDetail $restrictionsAndPrivileges)
    {
        $this->values['RestrictionsAndPrivileges'] = $restrictionsAndPrivileges;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: Only internal FedEx applications can include originRoutingCode.
     *
     * @param string $originRoutingCode
     * @return $this
     */
    public function setOriginRoutingCode($originRoutingCode)
    {
        $this->values['OriginRoutingCode'] = $originRoutingCode;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: Only internal FedEx applications can include destinationRoutingCode.
     *
     * @param string $destinationRoutingCode
     * @return $this
     */
    public function setDestinationRoutingCode($destinationRoutingCode)
    {
        $this->values['DestinationRoutingCode'] = $destinationRoutingCode;
        return $this;
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY: Only internal FedEx applications can include formId.
     *
     * @param string $formId
     * @return $this
     */
    public function setFormId($formId)
    {
        $this->values['FormId'] = $formId;
        return $this;
    }

    /**
     * Set CarrierCodes
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\CarrierCodeType[]|string[] $carrierCodes
     * @return $this
     */
    public function setCarrierCodes(array $carrierCodes)
    {
        $this->values['CarrierCodes'] = $carrierCodes;
        return $this;
    }

    /**
     * Set RequestedShipment
     *
     * @param RequestedShipment $requestedShipment
     * @return $this
     */
    public function setRequestedShipment(RequestedShipment $requestedShipment)
    {
        $this->values['RequestedShipment'] = $requestedShipment;
        return $this;
    }
}
