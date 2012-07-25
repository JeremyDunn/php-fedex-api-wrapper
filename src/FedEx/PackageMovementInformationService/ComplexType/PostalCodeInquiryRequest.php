<?php
namespace FedEx\PackageMovementInformationService\ComplexType;

/**
 * FedEx Postal Code Inquiry request.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class PostalCodeInquiryRequest
    extends AbstractComplexType
{
    protected $_name = 'PostalCodeInquiryRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return PostalCodeInquiryRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return PostalCodeInquiryRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return PostalCodeInquiryRequest
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
     * return PostalCodeInquiryRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Only used with postal-aware countries.
     *
     * @param string $PostalCode
     * return PostalCodeInquiryRequest
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Identifies the country code.
     *
     * @param string $CountryCode
     * return PostalCodeInquiryRequest
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    

    
}