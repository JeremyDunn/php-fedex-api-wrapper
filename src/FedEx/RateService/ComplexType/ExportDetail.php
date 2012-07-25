<?php
namespace FedEx\RateService\ComplexType;

/**
 * Country specific details of an International shipment.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class ExportDetail
    extends AbstractComplexType
{
    protected $_name = 'ExportDetail';

    /**
     * 
                Specifies which filing option is being exercised by the customer.
                Required for non-document shipments originating in Canada destined for any country other than Canada, the United States, Puerto Rico or the U.S. Virgin Islands.
              
     *
     * @param B13AFilingOptionType $B13AFilingOption
     * return ExportDetail
     */
    public function setB13AFilingOption(\FedEx\RateService\SimpleType\B13AFilingOptionType $b13AFilingOption)
    {
        $this->B13AFilingOption = $b13AFilingOption;
        return $this;
    }
    
    /**
     * General field for exporting-country-specific export data (e.g. B13A for CA, FTSR Exemption or AES Citation for US).
     *
     * @param string $ExportComplianceStatement
     * return ExportDetail
     */
    public function setExportComplianceStatement($exportComplianceStatement)
    {
        $this->ExportComplianceStatement = $exportComplianceStatement;
        return $this;
    }
    
    /**
     * This field is applicable only to Canada export non-document shipments of any value to any destination. No special characters allowed. 
     *
     * @param string $PermitNumber
     * return ExportDetail
     */
    public function setPermitNumber($permitNumber)
    {
        $this->PermitNumber = $permitNumber;
        return $this;
    }
    
    /**
     * Department of Commerce/Department of State information about this shipment.
     *
     * @param DestinationControlDetail $DestinationControlDetail
     * return ExportDetail
     */
    public function setDestinationControlDetail(DestinationControlDetail $destinationControlDetail)
    {
        $this->DestinationControlDetail = $destinationControlDetail;
        return $this;
    }
    

    
}