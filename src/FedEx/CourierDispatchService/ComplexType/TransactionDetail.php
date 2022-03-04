<?php
namespace FedEx\CourierDispatchService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data that governs data payload language/translations.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Courier Dispatch Service
 *
 * @property string $CustomerTransactionId
 * @property Localization $Localization

 */
class TransactionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TransactionDetail';

    /**
     * Identifies a customer-supplied unique identifier for this transaction. It is returned in the reply message to aid in matching requests to replies.
     *
     * @param string $customerTransactionId
     * @return $this
     */
    public function setCustomerTransactionId($customerTransactionId)
    {
        $this->values['CustomerTransactionId'] = $customerTransactionId;
        return $this;
    }

    /**
     * Governs any future language/translations applied to the data payload(contrasted with ClientDetail.localization, which governs Notification.localizedMessage language selection).
     *
     * @param Localization $localization
     * @return $this
     */
    public function setLocalization(Localization $localization)
    {
        $this->values['Localization'] = $localization;
        return $this;
    }
}
