<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property Money $CodCollectionAmount
 * @property CodAddTransportationChargesDetail $AddTransportationChargesDetail
 * @property \FedEx\PickupService\SimpleType\CodCollectionType|string $CollectionType
 * @property Party $CodRecipient
 * @property \FedEx\PickupService\SimpleType\CodReturnReferenceIndicatorType|string $ReferenceIndicator

 */
class CodDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CodDetail';

    /**
     * Set CodCollectionAmount
     *
     * @param Money $codCollectionAmount
     * @return $this
     */
    public function setCodCollectionAmount(Money $codCollectionAmount)
    {
        $this->values['CodCollectionAmount'] = $codCollectionAmount;
        return $this;
    }

    /**
     * Specifies the details of the charges are to be added to the COD collect amount.
     *
     * @param CodAddTransportationChargesDetail $addTransportationChargesDetail
     * @return $this
     */
    public function setAddTransportationChargesDetail(CodAddTransportationChargesDetail $addTransportationChargesDetail)
    {
        $this->values['AddTransportationChargesDetail'] = $addTransportationChargesDetail;
        return $this;
    }

    /**
     * Identifies the type of funds FedEx should collect upon package delivery
     *
     * @param \FedEx\PickupService\SimpleType\CodCollectionType|string $collectionType
     * @return $this
     */
    public function setCollectionType($collectionType)
    {
        $this->values['CollectionType'] = $collectionType;
        return $this;
    }

    /**
     * For Express this is the descriptive data that is used for the recipient of the FedEx Letter containing the COD payment. For Ground this is the descriptive data for the party to receive the payment that prints the COD receipt.
     *
     * @param Party $codRecipient
     * @return $this
     */
    public function setCodRecipient(Party $codRecipient)
    {
        $this->values['CodRecipient'] = $codRecipient;
        return $this;
    }

    /**
     * Indicates which type of reference information to include on the COD return shipping label.
     *
     * @param \FedEx\PickupService\SimpleType\CodReturnReferenceIndicatorType|string $referenceIndicator
     * @return $this
     */
    public function setReferenceIndicator($referenceIndicator)
    {
        $this->values['ReferenceIndicator'] = $referenceIndicator;
        return $this;
    }
}
