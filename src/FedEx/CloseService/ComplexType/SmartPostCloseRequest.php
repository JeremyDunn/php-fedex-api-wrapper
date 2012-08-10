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
     * return SmartPostCloseRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * return SmartPostCloseRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * return SmartPostCloseRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Set Version
     *
     * @param VersionId $version
     * return SmartPostCloseRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Set HubId
     *
     * @param string $hubId
     * return SmartPostCloseRequest
     */
    public function setHubId($hubId)
    {
        $this->HubId = $hubId;
        return $this;
    }
    
    /**
     * Set CustomerManifestId
     *
     * @param string $customerManifestId
     * return SmartPostCloseRequest
     */
    public function setCustomerManifestId($customerManifestId)
    {
        $this->CustomerManifestId = $customerManifestId;
        return $this;
    }
    
    /**
     * Set DestinationCountryCode
     *
     * @param string $destinationCountryCode
     * return SmartPostCloseRequest
     */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->DestinationCountryCode = $destinationCountryCode;
        return $this;
    }
    
    /**
     * Set PickUpCarrier
     *
     * @param \FedEx\CloseService\SimpleType\CarrierCodeType|string $pickUpCarrier
     * return SmartPostCloseRequest
     */
    public function setPickUpCarrier($pickUpCarrier)
    {
        $this->PickUpCarrier = $pickUpCarrier;
        return $this;
    }
    

    
}