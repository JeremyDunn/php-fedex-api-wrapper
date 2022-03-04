<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ExportDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\B13AFilingOptionType|string $B13AFilingOption
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
     * Set B13AFilingOption
     *
     * @param \FedEx\RateService\SimpleType\B13AFilingOptionType|string $b13AFilingOption
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
     * Set PermitNumber
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
     * Set DestinationControlDetail
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
