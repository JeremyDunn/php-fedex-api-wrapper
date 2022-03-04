<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ConsolidatedPartyReportDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property ShippingDocumentFormat $Format
 * @property CustomerImageUsage[] $CustomerImageUsages
 * @property string $SignatureName

 */
class ConsolidatedPartyReportDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ConsolidatedPartyReportDetail';

    /**
     * Set Format
     *
     * @param ShippingDocumentFormat $format
     * @return $this
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->values['Format'] = $format;
        return $this;
    }

    /**
     * Set CustomerImageUsages
     *
     * @param CustomerImageUsage[] $customerImageUsages
     * @return $this
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->values['CustomerImageUsages'] = $customerImageUsages;
        return $this;
    }

    /**
     * Set SignatureName
     *
     * @param string $signatureName
     * @return $this
     */
    public function setSignatureName($signatureName)
    {
        $this->values['SignatureName'] = $signatureName;
        return $this;
    }
}
