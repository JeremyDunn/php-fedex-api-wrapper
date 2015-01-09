<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 */
class TransactionDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TransactionDetail';

    /**
     * Identifies a customer-supplied unique identifier for this transaction. It is returned in the reply message to aid in matching requests to replies.
     *
     * @param string $customerTransactionId
     * @return TransactionDetail
     */
    public function setCustomerTransactionId($customerTransactionId)
    {
        $this->CustomerTransactionId = $customerTransactionId;
        return $this;
    }
    
    /**
     * Returns Identifies a customer-supplied unique identifier for this transaction. It is returned in the reply message to aid in matching requests to replies.
     *
     * @return string
     */
    public function getCustomerTransactionId()
    {
        return $this->CustomerTransactionId;
    }
    
    /**
     * Governs data payload language/translations (contrasted with ClientDetail.localization, which governs Notification.localizedMessage language selection).
     *
     * @param Localization $localization
     * @return TransactionDetail
     */
    public function setLocalization(Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    
    /**
     * Returns Governs data payload language/translations (contrasted with ClientDetail.localization, which governs Notification.localizedMessage language selection).
     *
     * @return Localization
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    

    
}