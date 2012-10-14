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
     * return CustomsClearanceDetail
     */
    public function setBrokers(array $brokers)
    {
        $this->Brokers = $brokers;
        return $this;
    }
    
    /**
     * Interacts both with properties of the shipment and contractual relationship with the shipper.
     *
     * @param \FedEx\ShipService\SimpleType\ClearanceBrokerageType|string $clearanceBrokerage
     * return CustomsClearanceDetail
     */
    public function setClearanceBrokerage($clearanceBrokerage)
    {
        $this->ClearanceBrokerage = $clearanceBrokerage;
        return $this;
    }
    
    /**
     * Set CustomsOptions
     *
     * @param CustomsOptionDetail $customsOptions
     * return CustomsClearanceDetail
     */
    public function setCustomsOptions(CustomsOptionDetail $customsOptions)
    {
        $this->CustomsOptions = $customsOptions;
        return $this;
    }
    
    /**
     * Set ImporterOfRecord
     *
     * @param Party $importerOfRecord
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
     * @param RecipientCustomsId $recipientCustomsId
     * return CustomsClearanceDetail
     */
    public function setRecipientCustomsId(RecipientCustomsId $recipientCustomsId)
    {
        $this->RecipientCustomsId = $recipientCustomsId;
        return $this;
    }
    
    /**
     * Set DutiesPayment
     *
     * @param Payment $dutiesPayment
     * return CustomsClearanceDetail
     */
    public function setDutiesPayment(Payment $dutiesPayment)
    {
        $this->DutiesPayment = $dutiesPayment;
        return $this;
    }
    
    /**
     * Set DocumentContent
     *
     * @param \FedEx\ShipService\SimpleType\InternationalDocumentContentType|string $documentContent
     * return CustomsClearanceDetail
     */
    public function setDocumentContent($documentContent)
    {
        $this->DocumentContent = $documentContent;
        return $this;
    }
    
    /**
     * Set CustomsValue
     *
     * @param Money $customsValue
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
     * @param \FedEx\ShipService\SimpleType\FreightOnValueType|string $freightOnValue
     * return CustomsClearanceDetail
     */
    public function setFreightOnValue($freightOnValue)
    {
        $this->FreightOnValue = $freightOnValue;
        return $this;
    }
    
    /**
     * Documents amount paid to third party for coverage of shipment content.
     *
     * @param Money $insuranceCharges
     * return CustomsClearanceDetail
     */
    public function setInsuranceCharges(Money $insuranceCharges)
    {
        $this->InsuranceCharges = $insuranceCharges;
        return $this;
    }
    
    /**
     * Set PartiesToTransactionAreRelated
     *
     * @param boolean $partiesToTransactionAreRelated
     * return CustomsClearanceDetail
     */
    public function setPartiesToTransactionAreRelated($partiesToTransactionAreRelated)
    {
        $this->PartiesToTransactionAreRelated = $partiesToTransactionAreRelated;
        return $this;
    }
    
    /**
     * Set CommercialInvoice
     *
     * @param CommercialInvoice $commercialInvoice
     * return CustomsClearanceDetail
     */
    public function setCommercialInvoice(CommercialInvoice $commercialInvoice)
    {
        $this->CommercialInvoice = $commercialInvoice;
        return $this;
    }
    
    /**
     * Set Commodities
     *
     * @param Commodity[] $commodities
     * return CustomsClearanceDetail
     */
    public function setCommodities(array $commodities)
    {
        $this->Commodities = $commodities;
        return $this;
    }
    
    /**
     * Set ExportDetail
     *
     * @param ExportDetail $exportDetail
     * return CustomsClearanceDetail
     */
    public function setExportDetail(ExportDetail $exportDetail)
    {
        $this->ExportDetail = $exportDetail;
        return $this;
    }
    
    /**
     * Set RegulatoryControls
     *
     * @param RegulatoryControlType[] $regulatoryControls
     * return CustomsClearanceDetail
     */
    public function setRegulatoryControls(array $regulatoryControls)
    {
        $this->RegulatoryControls = $regulatoryControls;
        return $this;
    }
    

    
}