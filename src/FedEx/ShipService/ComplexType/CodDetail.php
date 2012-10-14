<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * @param \FedEx\ShipService\SimpleType\CodCollectionType|string $collectionType
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
     * When the FedEx COD payment type is not CASH, indicates the contact and address of the financial institution used to service the payment of the COD.
     *
     * @param ContactAndAddress $financialInstitutionContactAndAddress
     * return CodDetail
     */
    public function setFinancialInstitutionContactAndAddress(ContactAndAddress $financialInstitutionContactAndAddress)
    {
        $this->FinancialInstitutionContactAndAddress = $financialInstitutionContactAndAddress;
        return $this;
    }
    
    /**
     * Specifies the name of person or company receiving the secured/unsecured funds payment
     *
     * @param string $remitToName
     * return CodDetail
     */
    public function setRemitToName($remitToName)
    {
        $this->RemitToName = $remitToName;
        return $this;
    }
    
    /**
     * Indicates which type of reference information to include on the COD return shipping label.
     *
     * @param \FedEx\ShipService\SimpleType\CodReturnReferenceIndicatorType|string $referenceIndicator
     * return CodDetail
     */
    public function setReferenceIndicator($referenceIndicator)
    {
        $this->ReferenceIndicator = $referenceIndicator;
        return $this;
    }
    
    /**
     * Only used with multi-piece COD shipments sent in multiple transactions. Required on last transaction only.
     *
     * @param TrackingId $returnTrackingId
     * return CodDetail
     */
    public function setReturnTrackingId(TrackingId $returnTrackingId)
    {
        $this->ReturnTrackingId = $returnTrackingId;
        return $this;
    }
    

    
}