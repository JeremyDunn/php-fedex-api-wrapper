<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddressValidationRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $RequestTimestamp
 * @property AddressValidationOptions $Options
 * @property AddressToValidate[] $AddressesToValidate

 */
class AddressValidationRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
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
     * Descriptive data identifying the client submitting the transaction.
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
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
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
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
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
     * Set RequestTimestamp
     *
     * @param string $requestTimestamp
     * @return $this
     */
    public function setRequestTimestamp($requestTimestamp)
    {
        $this->values['RequestTimestamp'] = $requestTimestamp;
        return $this;
    }

    /**
     * Set Options
     *
     * @param AddressValidationOptions $options
     * @return $this
     */
    public function setOptions(AddressValidationOptions $options)
    {
        $this->values['Options'] = $options;
        return $this;
    }

    /**
     * Set AddressesToValidate
     *
     * @param AddressToValidate[] $addressesToValidate
     * @return $this
     */
    public function setAddressesToValidate(array $addressesToValidate)
    {
        $this->values['AddressesToValidate'] = $addressesToValidate;
        return $this;
    }
}
