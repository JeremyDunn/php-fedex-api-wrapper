<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddressValidationRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class AddressValidationRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AddressValidationRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return AddressValidationRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Returns The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @return WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * @return AddressValidationRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data identifying the client submitting the transaction.
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * @return AddressValidationRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * @return AddressValidationRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Set RequestTimestamp
     *
     * @param dateTime $requestTimestamp
     * @return AddressValidationRequest
     */
    public function setRequestTimestamp($requestTimestamp)
    {
        $this->RequestTimestamp = $requestTimestamp;
        return $this;
    }
    
    /**
     * Returns Set RequestTimestamp
     *
     * @return dateTime
     */
    public function getRequestTimestamp()
    {
        return $this->RequestTimestamp;
    }
    
    /**
     * Set Options
     *
     * @param AddressValidationOptions $options
     * @return AddressValidationRequest
     */
    public function setOptions(AddressValidationOptions $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Returns Set Options
     *
     * @return AddressValidationOptions
     */
    public function getOptions()
    {
        return $this->Options;
    }
    
    /**
     * Set AddressesToValidate
     *
     * @param AddressToValidate[] $addressesToValidate
     * @return AddressValidationRequest
     */
    public function setAddressesToValidate(array $addressesToValidate)
    {
        $this->AddressesToValidate = $addressesToValidate;
        return $this;
    }
    
    /**
     * Returns Set AddressesToValidate
     *
     * @return AddressToValidate[]
     */
    public function getAddressesToValidate()
    {
        return $this->AddressesToValidate;
    }
    

    
}