<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class UploadDocumentsRequest
    extends AbstractComplexType
{
    protected $_name = 'UploadDocumentsRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return UploadDocumentsRequest
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
     * return UploadDocumentsRequest
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
     * return UploadDocumentsRequest
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
     * return UploadDocumentsRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $OriginCountryCode
     * return UploadDocumentsRequest
     */
    public function setOriginCountryCode($originCountryCode)
    {
        $this->OriginCountryCode = $originCountryCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $DestinationCountryCode
     * return UploadDocumentsRequest
     */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->DestinationCountryCode = $destinationCountryCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[UploadDocumentDetail] $Documents
     * return UploadDocumentsRequest
     */
    public function setDocuments(array $documents)
    {
        $this->Documents = $documents;
        return $this;
    }
    

    
}