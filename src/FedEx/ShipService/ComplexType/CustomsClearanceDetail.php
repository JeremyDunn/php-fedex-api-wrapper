<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomsClearanceDetail
    extends AbstractComplexType
{
    protected $_name = 'CustomsClearanceDetail';

    /**
     * 
     *
     * @param Party $Broker
     * return CustomsClearanceDetail
     */
    public function setBroker(Party $broker)
    {
        $this->Broker = $broker;
        return $this;
    }
    
    /**
     * Interacts both with properties of the shipment and contractual relationship with the shipper.
     *
     * @param ClearanceBrokerageType $ClearanceBrokerage
     * return CustomsClearanceDetail
     */
    public function setClearanceBrokerage(\FedEx\ShipService\SimpleType\ClearanceBrokerageType $clearanceBrokerage)
    {
        $this->ClearanceBrokerage = $clearanceBrokerage;
        return $this;
    }
    
    /**
     * 
     *
     * @param Party $ImporterOfRecord
     * return CustomsClearanceDetail
     */
    public function setImporterOfRecord(Party $importerOfRecord)
    {
        $this->ImporterOfRecord = $importerOfRecord;
        return $this;
    }
    
    /**
     * Specifies how the recipient is identified for customs purposes; the requirements on this information vary with destination country.
     *
     * @param RecipientCustomsId $RecipientCustomsId
     * return CustomsClearanceDetail
     */
    public function setRecipientCustomsId(RecipientCustomsId $recipientCustomsId)
    {
        $this->RecipientCustomsId = $recipientCustomsId;
        return $this;
    }
    
    /**
     * 
     *
     * @param Payment $DutiesPayment
     * return CustomsClearanceDetail
     */
    public function setDutiesPayment(Payment $dutiesPayment)
    {
        $this->DutiesPayment = $dutiesPayment;
        return $this;
    }
    
    /**
     * 
     *
     * @param InternationalDocumentContentType $DocumentContent
     * return CustomsClearanceDetail
     */
    public function setDocumentContent(\FedEx\ShipService\SimpleType\InternationalDocumentContentType $documentContent)
    {
        $this->DocumentContent = $documentContent;
        return $this;
    }
    
    /**
     * 
     *
     * @param Money $CustomsValue
     * return CustomsClearanceDetail
     */
    public function setCustomsValue(Money $customsValue)
    {
        $this->CustomsValue = $customsValue;
        return $this;
    }
    
    /**
     * Identifies responsibilities with respect to loss, damage, etc.
     *
     * @param FreightOnValueType $FreightOnValue
     * return CustomsClearanceDetail
     */
    public function setFreightOnValue(\FedEx\ShipService\SimpleType\FreightOnValueType $freightOnValue)
    {
        $this->FreightOnValue = $freightOnValue;
        return $this;
    }
    
    /**
     * Documents amount paid to third party for coverage of shipment content.
     *
     * @param Money $InsuranceCharges
     * return CustomsClearanceDetail
     */
    public function setInsuranceCharges(Money $insuranceCharges)
    {
        $this->InsuranceCharges = $insuranceCharges;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $PartiesToTransactionAreRelated
     * return CustomsClearanceDetail
     */
    public function setPartiesToTransactionAreRelated($partiesToTransactionAreRelated)
    {
        $this->PartiesToTransactionAreRelated = $partiesToTransactionAreRelated;
        return $this;
    }
    
    /**
     * 
     *
     * @param CommercialInvoice $CommercialInvoice
     * return CustomsClearanceDetail
     */
    public function setCommercialInvoice(CommercialInvoice $commercialInvoice)
    {
        $this->CommercialInvoice = $commercialInvoice;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[Commodity] $Commodities
     * return CustomsClearanceDetail
     */
    public function setCommodities(array $commodities)
    {
        $this->Commodities = $commodities;
        return $this;
    }
    
    /**
     * 
     *
     * @param ExportDetail $ExportDetail
     * return CustomsClearanceDetail
     */
    public function setExportDetail(ExportDetail $exportDetail)
    {
        $this->ExportDetail = $exportDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[RegulatoryControlType] $RegulatoryControls
     * return CustomsClearanceDetail
     */
    public function setRegulatoryControls(array $regulatoryControls)
    {
        $this->RegulatoryControls = $regulatoryControls;
        return $this;
    }
    

    
}