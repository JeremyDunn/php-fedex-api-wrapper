<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies how charges relating to different aspects of a shipment are to be paid.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property SplitPaymentDetail[] $Payments

 */
class SplitPaymentSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SplitPaymentSpecification';

    /**
     * Each entry specifies payement for a single aspect of the shipment.
     *
     * @param SplitPaymentDetail[] $payments
     * @return $this
     */
    public function setPayments(array $payments)
    {
        $this->values['Payments'] = $payments;
        return $this;
    }
}
