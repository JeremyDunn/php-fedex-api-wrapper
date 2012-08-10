<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ReprintGroundCloseDocumentsRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 */
class ReprintGroundCloseDocumentsRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ReprintGroundCloseDocumentsRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * return ReprintGroundCloseDocumentsRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * return ReprintGroundCloseDocumentsRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * return ReprintGroundCloseDocumentsRequest
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
     * return ReprintGroundCloseDocumentsRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Set ReprintOption
     *
     * @param \FedEx\CloseService\SimpleType\ReprintGroundCloseDocumentsOptionType|string $reprintOption
     * return ReprintGroundCloseDocumentsRequest
     */
    public function setReprintOption($reprintOption)
    {
        $this->ReprintOption = $reprintOption;
        return $this;
    }
    
    /**
     * Date on which shipments were closed.
     *
     * @param date $closeDate
     * return ReprintGroundCloseDocumentsRequest
     */
    public function setCloseDate($closeDate)
    {
        $this->CloseDate = $closeDate;
        return $this;
    }
    
    /**
     * Set TrackingNumber
     *
     * @param string $trackingNumber
     * return ReprintGroundCloseDocumentsRequest
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Specifies characteristics of document(s) to be returned for this request.
     *
     * @param CloseDocumentSpecification $closeDocumentSpecification
     * return ReprintGroundCloseDocumentsRequest
     */
    public function setCloseDocumentSpecification(CloseDocumentSpecification $closeDocumentSpecification)
    {
        $this->CloseDocumentSpecification = $closeDocumentSpecification;
        return $this;
    }
    

    
}