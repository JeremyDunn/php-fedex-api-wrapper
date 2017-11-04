<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * GroundCloseWithDocumentsRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $CloseDate
 * @property CloseDocumentSpecification $CloseDocumentSpecification

 */
class GroundCloseWithDocumentsRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'GroundCloseWithDocumentsRequest';

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
     * Cutoff date for closing and reports.
     *
     * @param string $closeDate
     * @return $this
     */
    public function setCloseDate($closeDate)
    {
        $this->values['CloseDate'] = $closeDate;
        return $this;
    }

    /**
     * Specifies characteristics of document(s) to be returned for this request.
     *
     * @param CloseDocumentSpecification $closeDocumentSpecification
     * @return $this
     */
    public function setCloseDocumentSpecification(CloseDocumentSpecification $closeDocumentSpecification)
    {
        $this->values['CloseDocumentSpecification'] = $closeDocumentSpecification;
        return $this;
    }
}
