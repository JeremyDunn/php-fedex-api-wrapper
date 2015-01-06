<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CustomsClearanceDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomsClearanceDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CustomsClearanceDetail';

    /**
     * Set Brokers
     *
     * @param BrokerDetail[] $brokers
     * @return CustomsClearanceDetail
     */
    public function setBrokers(array $brokers)
    {
        $this->Brokers = $brokers;
        return $this;
    }
    
    /**
     * Returns Set Brokers
     *
     * @return BrokerDetail[]
     */
    public function getBrokers()
    {
        return $this->Brokers;
    }
    
    /**
     * Interacts both with properties of the shipment and contractual relationship with the shipper.
     *
     * @param \FedEx\ShipService\SimpleType\ClearanceBrokerageType|string $clearanceBrokerage
     * @return CustomsClearanceDetail
     */
    public function setClearanceBrokerage($clearanceBrokerage)
    {
        $this->ClearanceBrokerage = $clearanceBrokerage;
        return $this;
    }
    
    /**
     * Returns Interacts both with properties of the shipment and contractual relationship with the shipper.
     *
     * @return \FedEx\ShipService\SimpleType\ClearanceBrokerageType|string
     */
    public function getClearanceBrokerage()
    {
        return $this->ClearanceBrokerage;
    }
    
    /**
     * Set CustomsOptions
     *
     * @param CustomsOptionDetail $customsOptions
     * @return CustomsClearanceDetail
     */
    public function setCustomsOptions(CustomsOptionDetail $customsOptions)
    {
        $this->CustomsOptions = $customsOptions;
        return $this;
    }
    
    /**
     * Returns Set CustomsOptions
     *
     * @return CustomsOptionDetail
     */
    public function getCustomsOptions()
    {
        return $this->CustomsOptions;
    }
    
    /**
     * Set ImporterOfRecord
     *
     * @param Party $importerOfRecord
     * @return CustomsClearanceDetail
     */
    public function setImporterOfRecord(Party $importerOfRecord)
    {
        $this->ImporterOfRecord = $importerOfRecord;
        return $this;
    }
    
    /**
     * Returns Set ImporterOfRecord
     *
     * @return Party
     */
    public function getImporterOfRecord()
    {
        return $this->ImporterOfRecord;
    }
    
    /**
     * Specifies how the recipient is identified for customs purposes; the requirements on this information vary with destination country.
     *
     * @param RecipientCustomsId $recipientCustomsId
     * @return CustomsClearanceDetail
     */
    public function setRecipientCustomsId(RecipientCustomsId $recipientCustomsId)
    {
        $this->RecipientCustomsId = $recipientCustomsId;
        return $this;
    }
    
    /**
     * Returns Specifies how the recipient is identified for customs purposes; the requirements on this information vary with destination country.
     *
     * @return RecipientCustomsId
     */
    public function getRecipientCustomsId()
    {
        return $this->RecipientCustomsId;
    }
    
    /**
     * Set DutiesPayment
     *
     * @param Payment $dutiesPayment
     * @return CustomsClearanceDetail
     */
    public function setDutiesPayment(Payment $dutiesPayment)
    {
        $this->DutiesPayment = $dutiesPayment;
        return $this;
    }
    
    /**
     * Returns Set DutiesPayment
     *
     * @return Payment
     */
    public function getDutiesPayment()
    {
        return $this->DutiesPayment;
    }
    
    /**
     * Set DocumentContent
     *
     * @param \FedEx\ShipService\SimpleType\InternationalDocumentContentType|string $documentContent
     * @return CustomsClearanceDetail
     */
    public function setDocumentContent($documentContent)
    {
        $this->DocumentContent = $documentContent;
        return $this;
    }
    
    /**
     * Returns Set DocumentContent
     *
     * @return \FedEx\ShipService\SimpleType\InternationalDocumentContentType|string
     */
    public function getDocumentContent()
    {
        return $this->DocumentContent;
    }
    
    /**
     * Set CustomsValue
     *
     * @param Money $customsValue
     * @return CustomsClearanceDetail
     */
    public function setCustomsValue(Money $customsValue)
    {
        $this->CustomsValue = $customsValue;
        return $this;
    }
    
    /**
     * Returns Set CustomsValue
     *
     * @return Money
     */
    public function getCustomsValue()
    {
        return $this->CustomsValue;
    }
    
    /**
     * Identifies responsibilities with respect to loss, damage, etc.
     *
     * @param \FedEx\ShipService\SimpleType\FreightOnValueType|string $freightOnValue
     * @return CustomsClearanceDetail
     */
    public function setFreightOnValue($freightOnValue)
    {
        $this->FreightOnValue = $freightOnValue;
        return $this;
    }
    
    /**
     * Returns Identifies responsibilities with respect to loss, damage, etc.
     *
     * @return \FedEx\ShipService\SimpleType\FreightOnValueType|string
     */
    public function getFreightOnValue()
    {
        return $this->FreightOnValue;
    }
    
    /**
     * Documents amount paid to third party for coverage of shipment content.
     *
     * @param Money $insuranceCharges
     * @return CustomsClearanceDetail
     */
    public function setInsuranceCharges(Money $insuranceCharges)
    {
        $this->InsuranceCharges = $insuranceCharges;
        return $this;
    }
    
    /**
     * Returns Documents amount paid to third party for coverage of shipment content.
     *
     * @return Money
     */
    public function getInsuranceCharges()
    {
        return $this->InsuranceCharges;
    }
    
    /**
     * Set PartiesToTransactionAreRelated
     *
     * @param boolean $partiesToTransactionAreRelated
     * @return CustomsClearanceDetail
     */
    public function setPartiesToTransactionAreRelated($partiesToTransactionAreRelated)
    {
        $this->PartiesToTransactionAreRelated = $partiesToTransactionAreRelated;
        return $this;
    }
    
    /**
     * Returns Set PartiesToTransactionAreRelated
     *
     * @return boolean
     */
    public function getPartiesToTransactionAreRelated()
    {
        return $this->PartiesToTransactionAreRelated;
    }
    
    /**
     * Set CommercialInvoice
     *
     * @param CommercialInvoice $commercialInvoice
     * @return CustomsClearanceDetail
     */
    public function setCommercialInvoice(CommercialInvoice $commercialInvoice)
    {
        $this->CommercialInvoice = $commercialInvoice;
        return $this;
    }
    
    /**
     * Returns Set CommercialInvoice
     *
     * @return CommercialInvoice
     */
    public function getCommercialInvoice()
    {
        return $this->CommercialInvoice;
    }
    
    /**
     * Set Commodities
     *
     * @param Commodity[] $commodities
     * @return CustomsClearanceDetail
     */
    public function setCommodities(array $commodities)
    {
        $this->Commodities = $commodities;
        return $this;
    }
    
    /**
     * Returns Set Commodities
     *
     * @return Commodity[]
     */
    public function getCommodities()
    {
        return $this->Commodities;
    }
    
    /**
     * Set ExportDetail
     *
     * @param ExportDetail $exportDetail
     * @return CustomsClearanceDetail
     */
    public function setExportDetail(ExportDetail $exportDetail)
    {
        $this->ExportDetail = $exportDetail;
        return $this;
    }
    
    /**
     * Returns Set ExportDetail
     *
     * @return ExportDetail
     */
    public function getExportDetail()
    {
        return $this->ExportDetail;
    }
    
    /**
     * Set RegulatoryControls
     *
     * @param RegulatoryControlType[] $regulatoryControls
     * @return CustomsClearanceDetail
     */
    public function setRegulatoryControls(array $regulatoryControls)
    {
        $this->RegulatoryControls = $regulatoryControls;
        return $this;
    }
    
    /**
     * Returns Set RegulatoryControls
     *
     * @return RegulatoryControlType[]
     */
    public function getRegulatoryControls()
    {
        return $this->RegulatoryControls;
    }
    

    
}