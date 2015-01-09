<?php
namespace FedEx\LocatorService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedExLocatorRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 */
class FedExLocatorRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FedExLocatorRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return FedExLocatorRequest
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
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * @return FedExLocatorRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns The descriptive data identifying the client submitting the transaction.
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * @return FedExLocatorRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
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
     * @return FedExLocatorRequest
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
     * The index of first location to be returned from among all matching locations. Defauls to 1.
     *
     * @param int $beginningRecordIndex
     * @return FedExLocatorRequest
     */
    public function setBeginningRecordIndex($beginningRecordIndex)
    {
        $this->BeginningRecordIndex = $beginningRecordIndex;
        return $this;
    }
    
    /**
     * Returns The index of first location to be returned from among all matching locations. Defauls to 1.
     *
     * @return int
     */
    public function getBeginningRecordIndex()
    {
        return $this->BeginningRecordIndex;
    }
    
    /**
     * The maximum number of locations to be returned. Maximum count allowed is 25. Defaults to 10.
     *
     * @param  $maximumMatchCount
     * @return FedExLocatorRequest
     */
    public function setMaximumMatchCount( $maximumMatchCount)
    {
        $this->MaximumMatchCount = $maximumMatchCount;
        return $this;
    }
    
    /**
     * Returns The maximum number of locations to be returned. Maximum count allowed is 25. Defaults to 10.
     *
     * @return 
     */
    public function getMaximumMatchCount()
    {
        return $this->MaximumMatchCount;
    }
    
    /**
     * Units in which Distance to location is to be expressed. See DistanceUnits for list of returned values.
     *
     * @param \FedEx\LocatorService\SimpleType\DistanceUnits|string $distanceUnits
     * @return FedExLocatorRequest
     */
    public function setDistanceUnits($distanceUnits)
    {
        $this->DistanceUnits = $distanceUnits;
        return $this;
    }
    
    /**
     * Returns Units in which Distance to location is to be expressed. See DistanceUnits for list of returned values.
     *
     * @return \FedEx\LocatorService\SimpleType\DistanceUnits|string
     */
    public function getDistanceUnits()
    {
        return $this->DistanceUnits;
    }
    
    /**
     * Phone number for which nearby FedEx locations are to be found. This element is required if NearToAddress is not present.
     *
     * @param string $nearToPhoneNumber
     * @return FedExLocatorRequest
     */
    public function setNearToPhoneNumber($nearToPhoneNumber)
    {
        $this->NearToPhoneNumber = $nearToPhoneNumber;
        return $this;
    }
    
    /**
     * Returns Phone number for which nearby FedEx locations are to be found. This element is required if NearToAddress is not present.
     *
     * @return string
     */
    public function getNearToPhoneNumber()
    {
        return $this->NearToPhoneNumber;
    }
    
    /**
     * The descriptive data of a physical location for which nearby FedEx locations are to be found. This element is required if NearToPhoneNumber is not present. Both City and StateOrProvinceCode child elements are required if	PostalCode is not present.
     *
     * @param Address $nearToAddress
     * @return FedExLocatorRequest
     */
    public function setNearToAddress(Address $nearToAddress)
    {
        $this->NearToAddress = $nearToAddress;
        return $this;
    }
    
    /**
     * Returns The descriptive data of a physical location for which nearby FedEx locations are to be found. This element is required if NearToPhoneNumber is not present. Both City and StateOrProvinceCode child elements are required if	PostalCode is not present.
     *
     * @return Address
     */
    public function getNearToAddress()
    {
        return $this->NearToAddress;
    }
    
    /**
     * The descriptive data about the various drop off services that must be available at the locations returned.
     *
     * @param DropoffServicesDesired $dropoffServicesDesired
     * @return FedExLocatorRequest
     */
    public function setDropoffServicesDesired(DropoffServicesDesired $dropoffServicesDesired)
    {
        $this->DropoffServicesDesired = $dropoffServicesDesired;
        return $this;
    }
    
    /**
     * Returns The descriptive data about the various drop off services that must be available at the locations returned.
     *
     * @return DropoffServicesDesired
     */
    public function getDropoffServicesDesired()
    {
        return $this->DropoffServicesDesired;
    }
    

    
}