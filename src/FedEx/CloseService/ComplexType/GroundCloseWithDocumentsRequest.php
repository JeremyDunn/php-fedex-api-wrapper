<?php
namespace FedEx\CloseService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class GroundCloseWithDocumentsRequest
    extends AbstractComplexType
{
    protected $_name = 'GroundCloseWithDocumentsRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return GroundCloseWithDocumentsRequest
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
     * return GroundCloseWithDocumentsRequest
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
     * return GroundCloseWithDocumentsRequest
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
     * return GroundCloseWithDocumentsRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Date on which shipments were closed.
     *
     * @param date $CloseDate
     * return GroundCloseWithDocumentsRequest
     */
    public function setCloseDate($closeDate)
    {
        $this->CloseDate = $closeDate;
        return $this;
    }
    
    /**
     * Specifies characteristics of document(s) to be returned for this request.
     *
     * @param CloseDocumentSpecification $CloseDocumentSpecification
     * return GroundCloseWithDocumentsRequest
     */
    public function setCloseDocumentSpecification(CloseDocumentSpecification $closeDocumentSpecification)
    {
        $this->CloseDocumentSpecification = $closeDocumentSpecification;
        return $this;
    }
    

    
}