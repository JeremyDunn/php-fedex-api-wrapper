<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DeleteTagRequest
    extends AbstractComplexType
{
    protected $_name = 'DeleteTagRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return DeleteTagRequest
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
     * return DeleteTagRequest
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
     * return DeleteTagRequest
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
     * return DeleteTagRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Only used for tags which had FedEx Express services.
     *
     * @param string $DispatchLocationId
     * return DeleteTagRequest
     */
    public function setDispatchLocationId($dispatchLocationId)
    {
        $this->DispatchLocationId = $dispatchLocationId;
        return $this;
    }
    
    /**
     * Only used for tags which had FedEx Express services.
     *
     * @param date $DispatchDate
     * return DeleteTagRequest
     */
    public function setDispatchDate($dispatchDate)
    {
        $this->DispatchDate = $dispatchDate;
        return $this;
    }
    
    /**
     * If the original ProcessTagRequest specified third-party payment, then the delete request must contain the same pay type and payor account number for security purposes.
     *
     * @param Payment $Payment
     * return DeleteTagRequest
     */
    public function setPayment(Payment $payment)
    {
        $this->Payment = $payment;
        return $this;
    }
    
    /**
     * Also known as Pickup Confirmation Number or Dispatch Number
     *
     * @param string $ConfirmationNumber
     * return DeleteTagRequest
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $this->ConfirmationNumber = $confirmationNumber;
        return $this;
    }
    

    
}