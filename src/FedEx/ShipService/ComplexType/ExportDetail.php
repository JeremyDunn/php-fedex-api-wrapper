<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Country specific details of an International shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\B13AFilingOptionType|string $B13AFilingOption
 * @property string $ExportComplianceStatement
 * @property string $PermitNumber
 * @property DestinationControlDetail $DestinationControlDetail

 */
class ExportDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ExportDetail';

    /**
     * Specifies which filing option is being exercised by the customer.
                Required for non-document shipments originating in Canada destined for any country other than Canada, the United States, Puerto Rico or the U.S. Virgin Islands.
     *
     * @param \FedEx\ShipService\SimpleType\B13AFilingOptionType|string $b13AFilingOption
     * @return $this
     */
    public function setB13AFilingOption($b13AFilingOption)
    {
        $this->values['B13AFilingOption'] = $b13AFilingOption;
        return $this;
    }

    /**
     * General field for exporting-country-specific export data (e.g. B13A for CA, FTSR Exemption or AES Citation for US).
     *
     * @param string $exportComplianceStatement
     * @return $this
     */
    public function setExportComplianceStatement($exportComplianceStatement)
    {
        $this->values['ExportComplianceStatement'] = $exportComplianceStatement;
        return $this;
    }

    /**
     * This field is applicable only to Canada export non-document shipments of any value to any destination. No special characters allowed.
     *
     * @param string $permitNumber
     * @return $this
     */
    public function setPermitNumber($permitNumber)
    {
        $this->values['PermitNumber'] = $permitNumber;
        return $this;
    }

    /**
     * Department of Commerce/Department of State information about this shipment.
     *
     * @param DestinationControlDetail $destinationControlDetail
     * @return $this
     */
    public function setDestinationControlDetail(DestinationControlDetail $destinationControlDetail)
    {
        $this->values['DestinationControlDetail'] = $destinationControlDetail;
        return $this;
    }
}
