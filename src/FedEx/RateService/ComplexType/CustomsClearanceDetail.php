<?php
namespace FedEx\RateService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class CustomsClearanceDetail
    extends AbstractComplexType
{
    protected $_name = 'CustomsClearanceDetail';

    /**
     * 
                Descriptive data identifying the Broker responsible for the shipmet.
                Required if BROKER_SELECT_OPTION is requested in Special Services.
              
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
    public function setClearanceBrokerage(\FedEx\RateService\SimpleType\ClearanceBrokerageType $clearanceBrokerage)
    {
        $this->ClearanceBrokerage = $clearanceBrokerage;
        return $this;
    }
    
    /**
     * 
                Applicable only for Commercial Invoice. If the consignee and importer are not the same, the Following importer fields are required.
                Importer/Contact/PersonName
                Importer/Contact/CompanyName
                Importer/Contact/PhoneNumber
                Importer/Address/StreetLine[0]
                Importer/Address/City
                Importer/Address/StateOrProvinceCode - if Importer Country Code is US or CA
                Importer/Address/PostalCode - if Importer Country Code is US or CA
                Importer/Address/CountryCode
              
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
     * Indicates how payment of duties for the shipment will be made.
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
     * Indicates whether this shipment contains documents only or non-documents.
     *
     * @param InternationalDocumentContentType $DocumentContent
     * return CustomsClearanceDetail
     */
    public function setDocumentContent(\FedEx\RateService\SimpleType\InternationalDocumentContentType $documentContent)
    {
        $this->DocumentContent = $documentContent;
        return $this;
    }
    
    /**
     * The total customs value for the shipment. This total will rrepresent th esum of the values of all commodities, and may include freight, miscellaneous, and insurance charges. Must contain 2 explicit decimal positions with a max length of 17 including the decimal. For Express International MPS, the Total Customs Value is in the master transaction and all child transactions
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
    public function setFreightOnValue(\FedEx\RateService\SimpleType\FreightOnValueType $freightOnValue)
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
     * CommercialInvoice element is required for electronic upload of CI data. It will serve to create/transmit an Electronic Commercial Invoice through FedEx System. Customers are responsible for printing their own Commercial Invoice. Commercial Invoice support consists of a maximum of 20 commodity line items.
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
                For international multiple piece shipments, commodity information must be passed in the Master and on each child transaction.
                If this shipment cotains more than four commodities line items, the four highest valued should be included in the first 4 occurances for this request.
              
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
     * Country specific details of an International shipment.
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
     * FOOD_OR_PERISHABLE is required by FDA/BTA; must be true for food/perishable items coming to US or PR from non-US/non-PR origin.
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