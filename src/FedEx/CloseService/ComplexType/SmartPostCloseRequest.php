<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SmartPostCloseRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class SmartPostCloseRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SmartPostCloseRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return SmartPostCloseRequest
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
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * @return SmartPostCloseRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns Set ClientDetail
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return SmartPostCloseRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Set TransactionDetail
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Set Version
     *
     * @param VersionId $version
     * @return SmartPostCloseRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Set Version
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Set HubId
     *
     * @param string $hubId
     * @return SmartPostCloseRequest
     */
    public function setHubId($hubId)
    {
        $this->HubId = $hubId;
        return $this;
    }
    
    /**
     * Returns Set HubId
     *
     * @return string
     */
    public function getHubId()
    {
        return $this->HubId;
    }
    
    /**
     * Set CustomerManifestId
     *
     * @param string $customerManifestId
     * @return SmartPostCloseRequest
     */
    public function setCustomerManifestId($customerManifestId)
    {
        $this->CustomerManifestId = $customerManifestId;
        return $this;
    }
    
    /**
     * Returns Set CustomerManifestId
     *
     * @return string
     */
    public function getCustomerManifestId()
    {
        return $this->CustomerManifestId;
    }
    
    /**
     * Set DestinationCountryCode
     *
     * @param string $destinationCountryCode
     * @return SmartPostCloseRequest
     */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->DestinationCountryCode = $destinationCountryCode;
        return $this;
    }
    
    /**
     * Returns Set DestinationCountryCode
     *
     * @return string
     */
    public function getDestinationCountryCode()
    {
        return $this->DestinationCountryCode;
    }
    
    /**
     * Set PickUpCarrier
     *
     * @param \FedEx\CloseService\SimpleType\CarrierCodeType|string $pickUpCarrier
     * @return SmartPostCloseRequest
     */
    public function setPickUpCarrier($pickUpCarrier)
    {
        $this->PickUpCarrier = $pickUpCarrier;
        return $this;
    }
    
    /**
     * Returns Set PickUpCarrier
     *
     * @return \FedEx\CloseService\SimpleType\CarrierCodeType|string
     */
    public function getPickUpCarrier()
    {
        return $this->PickUpCarrier;
    }
    

    
}