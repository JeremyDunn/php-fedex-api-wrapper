<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CodDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CodDetail';

    /**
     * Set CodCollectionAmount
     *
     * @param Money $codCollectionAmount
     * return CodDetail
     */
    public function setCodCollectionAmount(Money $codCollectionAmount)
    {
        $this->CodCollectionAmount = $codCollectionAmount;
        return $this;
    }
    
    /**
     * Specifies the details of the charges are to be added to the COD collect amount.
     *
     * @param CodAddTransportationChargesDetail $addTransportationChargesDetail
     * return CodDetail
     */
    public function setAddTransportationChargesDetail(CodAddTransportationChargesDetail $addTransportationChargesDetail)
    {
        $this->AddTransportationChargesDetail = $addTransportationChargesDetail;
        return $this;
    }
    
    /**
     * Identifies the type of funds FedEx should collect upon package delivery
     *
     * @param \FedEx\Pickup\SimpleType\CodCollectionType|string $collectionType
     * return CodDetail
     */
    public function setCollectionType($collectionType)
    {
        $this->CollectionType = $collectionType;
        return $this;
    }
    
    /**
     * For Express this is the descriptive data that is used for the recipient of the FedEx Letter containing the COD payment. For Ground this is the descriptive data for the party to receive the payment that prints the COD receipt.
     *
     * @param Party $codRecipient
     * return CodDetail
     */
    public function setCodRecipient(Party $codRecipient)
    {
        $this->CodRecipient = $codRecipient;
        return $this;
    }
    
    /**
     * Indicates which type of reference information to include on the COD return shipping label.
     *
     * @param \FedEx\Pickup\SimpleType\CodReturnReferenceIndicatorType|string $referenceIndicator
     * return CodDetail
     */
    public function setReferenceIndicator($referenceIndicator)
    {
        $this->ReferenceIndicator = $referenceIndicator;
        return $this;
    }
    

    
}