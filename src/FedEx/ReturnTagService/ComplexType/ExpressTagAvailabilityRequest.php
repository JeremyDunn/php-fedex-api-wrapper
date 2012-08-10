<?php
namespace FedEx\ReturnTagService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx Express Tag Availability request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Return Tag Service
 */
class ExpressTagAvailabilityRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ExpressTagAvailabilityRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * return ExpressTagAvailabilityRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * return ExpressTagAvailabilityRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * return ExpressTagAvailabilityRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $version
     * return ExpressTagAvailabilityRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Package ready date and time.
     *
     * @param dateTime $readyDateTime
     * return ExpressTagAvailabilityRequest
     */
    public function setReadyDateTime($readyDateTime)
    {
        $this->ReadyDateTime = $readyDateTime;
        return $this;
    }
    
    /**
     * Sender postal code and country.
     *
     * @param Address $originAddress
     * return ExpressTagAvailabilityRequest
     */
    public function setOriginAddress(Address $originAddress)
    {
        $this->OriginAddress = $originAddress;
        return $this;
    }
    
    /**
     * FedEx Service type.
     *
     * @param \FedEx\ReturnTagService\SimpleType\ServiceType|string $service
     * return ExpressTagAvailabilityRequest
     */
    public function setService($service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * FedEx Packaging type.
     *
     * @param \FedEx\ReturnTagService\SimpleType\PackagingType|string $packaging
     * return ExpressTagAvailabilityRequest
     */
    public function setPackaging($packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    

    
}