<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class SmartPostCloseRequest
    extends AbstractComplexType
{
    protected $_name = 'SmartPostCloseRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return SmartPostCloseRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param ClientDetail $ClientDetail
     * return SmartPostCloseRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param TransactionDetail $TransactionDetail
     * return SmartPostCloseRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param VersionId $Version
     * return SmartPostCloseRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $HubId
     * return SmartPostCloseRequest
     */
    public function setHubId($hubId)
    {
        $this->HubId = $hubId;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $CustomerManifestId
     * return SmartPostCloseRequest
     */
    public function setCustomerManifestId($customerManifestId)
    {
        $this->CustomerManifestId = $customerManifestId;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $DestinationCountryCode
     * return SmartPostCloseRequest
     */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->DestinationCountryCode = $destinationCountryCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param CarrierCodeType $PickUpCarrier
     * return SmartPostCloseRequest
     */
    public function setPickUpCarrier(\FedEx\CloseService\SimpleType\CarrierCodeType $pickUpCarrier)
    {
        $this->PickUpCarrier = $pickUpCarrier;
        return $this;
    }
    

    
}