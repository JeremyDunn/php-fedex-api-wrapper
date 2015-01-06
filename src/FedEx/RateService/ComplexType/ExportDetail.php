<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Country specific details of an International shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ExportDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ExportDetail';

    /**
     * 
                Specifies which filing option is being exercised by the customer.
                Required for non-document shipments originating in Canada destined for any country other than Canada, the United States, Puerto Rico or the U.S. Virgin Islands.
              
     *
     * @param \FedEx\RateService\SimpleType\B13AFilingOptionType|string $b13AFilingOption
     * @return ExportDetail
     */
    public function setB13AFilingOption($b13AFilingOption)
    {
        $this->B13AFilingOption = $b13AFilingOption;
        return $this;
    }
    
    /**
     * Returns 
                Specifies which filing option is being exercised by the customer.
                Required for non-document shipments originating in Canada destined for any country other than Canada, the United States, Puerto Rico or the U.S. Virgin Islands.
              
     *
     * @return \FedEx\RateService\SimpleType\B13AFilingOptionType|string
     */
    public function getB13AFilingOption()
    {
        return $this->B13AFilingOption;
    }
    
    /**
     * General field for exporting-country-specific export data (e.g. B13A for CA, FTSR Exemption or AES Citation for US).
     *
     * @param string $exportComplianceStatement
     * @return ExportDetail
     */
    public function setExportComplianceStatement($exportComplianceStatement)
    {
        $this->ExportComplianceStatement = $exportComplianceStatement;
        return $this;
    }
    
    /**
     * Returns General field for exporting-country-specific export data (e.g. B13A for CA, FTSR Exemption or AES Citation for US).
     *
     * @return string
     */
    public function getExportComplianceStatement()
    {
        return $this->ExportComplianceStatement;
    }
    
    /**
     * This field is applicable only to Canada export non-document shipments of any value to any destination. No special characters allowed. 
     *
     * @param string $permitNumber
     * @return ExportDetail
     */
    public function setPermitNumber($permitNumber)
    {
        $this->PermitNumber = $permitNumber;
        return $this;
    }
    
    /**
     * Returns This field is applicable only to Canada export non-document shipments of any value to any destination. No special characters allowed. 
     *
     * @return string
     */
    public function getPermitNumber()
    {
        return $this->PermitNumber;
    }
    
    /**
     * Department of Commerce/Department of State information about this shipment.
     *
     * @param DestinationControlDetail $destinationControlDetail
     * @return ExportDetail
     */
    public function setDestinationControlDetail(DestinationControlDetail $destinationControlDetail)
    {
        $this->DestinationControlDetail = $destinationControlDetail;
        return $this;
    }
    
    /**
     * Returns Department of Commerce/Department of State information about this shipment.
     *
     * @return DestinationControlDetail
     */
    public function getDestinationControlDetail()
    {
        return $this->DestinationControlDetail;
    }
    

    
}