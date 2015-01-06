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
     * @return ReprintGroundCloseDocumentsRequest
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
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $clientDetail
     * @return ReprintGroundCloseDocumentsRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data identifying the client submitting the transaction.
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $transactionDetail
     * @return ReprintGroundCloseDocumentsRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
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
     * @return ReprintGroundCloseDocumentsRequest
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
     * Set ReprintOption
     *
     * @param \FedEx\CloseService\SimpleType\ReprintGroundCloseDocumentsOptionType|string $reprintOption
     * @return ReprintGroundCloseDocumentsRequest
     */
    public function setReprintOption($reprintOption)
    {
        $this->ReprintOption = $reprintOption;
        return $this;
    }
    
    /**
     * Returns Set ReprintOption
     *
     * @return \FedEx\CloseService\SimpleType\ReprintGroundCloseDocumentsOptionType|string
     */
    public function getReprintOption()
    {
        return $this->ReprintOption;
    }
    
    /**
     * Date on which shipments were closed.
     *
     * @param date $closeDate
     * @return ReprintGroundCloseDocumentsRequest
     */
    public function setCloseDate($closeDate)
    {
        $this->CloseDate = $closeDate;
        return $this;
    }
    
    /**
     * Returns Date on which shipments were closed.
     *
     * @return date
     */
    public function getCloseDate()
    {
        return $this->CloseDate;
    }
    
    /**
     * Set TrackingNumber
     *
     * @param string $trackingNumber
     * @return ReprintGroundCloseDocumentsRequest
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Returns Set TrackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    
    /**
     * Specifies characteristics of document(s) to be returned for this request.
     *
     * @param CloseDocumentSpecification $closeDocumentSpecification
     * @return ReprintGroundCloseDocumentsRequest
     */
    public function setCloseDocumentSpecification(CloseDocumentSpecification $closeDocumentSpecification)
    {
        $this->CloseDocumentSpecification = $closeDocumentSpecification;
        return $this;
    }
    
    /**
     * Returns Specifies characteristics of document(s) to be returned for this request.
     *
     * @return CloseDocumentSpecification
     */
    public function getCloseDocumentSpecification()
    {
        return $this->CloseDocumentSpecification;
    }
    

    
}