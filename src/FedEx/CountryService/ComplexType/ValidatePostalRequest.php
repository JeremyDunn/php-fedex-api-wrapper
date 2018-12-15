<?php
namespace FedEx\CountryService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ValidatePostalRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Country Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $ShipDateTime
 * @property Address $Address
 * @property string $RoutingCode
 * @property boolean $CheckForMismatch
 * @property \FedEx\CountryService\SimpleType\CarrierCodeType|string $CarrierCode

 */
class ValidatePostalRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ValidatePostalRequest';

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
     * Set ShipDateTime
     *
     * @param string $shipDateTime
     * @return $this
     */
    public function setShipDateTime($shipDateTime)
    {
        $this->values['ShipDateTime'] = $shipDateTime;
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
     * Set RoutingCode
     *
     * @param string $routingCode
     * @return $this
     */
    public function setRoutingCode($routingCode)
    {
        $this->values['RoutingCode'] = $routingCode;
        return $this;
    }

    /**
     * Set CheckForMismatch
     *
     * @param boolean $checkForMismatch
     * @return $this
     */
    public function setCheckForMismatch($checkForMismatch)
    {
        $this->values['CheckForMismatch'] = $checkForMismatch;
        return $this;
    }

    /**
     * Set CarrierCode
     *
     * @param \FedEx\CountryService\SimpleType\CarrierCodeType|string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['CarrierCode'] = $carrierCode;
        return $this;
    }
}
