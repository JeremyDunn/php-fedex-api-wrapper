<?php
namespace FedEx\AddressValidationService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class AddressValidationRequest
    extends AbstractComplexType
{
    protected $_name = 'AddressValidationRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return AddressValidationRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return AddressValidationRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return AddressValidationRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return AddressValidationRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param dateTime $RequestTimestamp
     * return AddressValidationRequest
     */
    public function setRequestTimestamp($requestTimestamp)
    {
        $this->RequestTimestamp = $requestTimestamp;
        return $this;
    }
    
    /**
     * 
     *
     * @param AddressValidationOptions $Options
     * return AddressValidationRequest
     */
    public function setOptions(AddressValidationOptions $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[AddressToValidate] $AddressesToValidate
     * return AddressValidationRequest
     */
    public function setAddressesToValidate(array $addressesToValidate)
    {
        $this->AddressesToValidate = $addressesToValidate;
        return $this;
    }
    

    
}