<?php
namespace FedEx\PickupService\ComplexType;

/**
 * Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CodDetail
    extends AbstractComplexType
{
    protected $_name = 'CodDetail';

    /**
     * 
     *
     * @param Money $CodCollectionAmount
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
     * @param CodAddTransportationChargesDetail $AddTransportationChargesDetail
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
     * @param CodCollectionType $CollectionType
     * return CodDetail
     */
    public function setCollectionType(\FedEx\PickupService\SimpleType\CodCollectionType $collectionType)
    {
        $this->CollectionType = $collectionType;
        return $this;
    }
    
    /**
     * For Express this is the descriptive data that is used for the recipient of the FedEx Letter containing the COD payment. For Ground this is the descriptive data for the party to receive the payment that prints the COD receipt.
     *
     * @param Party $CodRecipient
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
     * @param CodReturnReferenceIndicatorType $ReferenceIndicator
     * return CodDetail
     */
    public function setReferenceIndicator(\FedEx\PickupService\SimpleType\CodReturnReferenceIndicatorType $referenceIndicator)
    {
        $this->ReferenceIndicator = $referenceIndicator;
        return $this;
    }
    

    
}