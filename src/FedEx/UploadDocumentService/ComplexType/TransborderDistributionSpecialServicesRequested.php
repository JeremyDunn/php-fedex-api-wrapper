<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies features of service within a Transborder Distribution shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\TransborderDistributionSpecialServiceType|string[] $SpecialServiceTypes
 * @property TransborderDistributionLtlDetail $TransborderDistributionLtlDetail

 */
class TransborderDistributionSpecialServicesRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TransborderDistributionSpecialServicesRequested';

    /**
     * Identifies features of service requested for the current Transborder Distribution shipment.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\TransborderDistributionSpecialServiceType[]|string[] $specialServiceTypes
     * @return $this
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->values['SpecialServiceTypes'] = $specialServiceTypes;
        return $this;
    }

    /**
     * Specifies details for origin-country LTL services performed by FedEx.
     *
     * @param TransborderDistributionLtlDetail $transborderDistributionLtlDetail
     * @return $this
     */
    public function setTransborderDistributionLtlDetail(TransborderDistributionLtlDetail $transborderDistributionLtlDetail)
    {
        $this->values['TransborderDistributionLtlDetail'] = $transborderDistributionLtlDetail;
        return $this;
    }
}
