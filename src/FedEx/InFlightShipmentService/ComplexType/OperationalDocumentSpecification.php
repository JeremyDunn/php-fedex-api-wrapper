<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * OperationalDocumentSpecification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property \FedEx\InFlightShipmentService\SimpleType\OperationalDocumentType|string[] $DocumentTypes
 * @property SignatureReleaseDocumentDetail $SignatureReleaseDocumentDetail

 */
class OperationalDocumentSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OperationalDocumentSpecification';

    /**
     * Specifies the types of operational documents to be produced.
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\OperationalDocumentType[]|string[] $documentTypes
     * @return $this
     */
    public function setDocumentTypes(array $documentTypes)
    {
        $this->values['DocumentTypes'] = $documentTypes;
        return $this;
    }

    /**
     * Specifies the data required to produce a singature release document.
     *
     * @param SignatureReleaseDocumentDetail $signatureReleaseDocumentDetail
     * @return $this
     */
    public function setSignatureReleaseDocumentDetail(SignatureReleaseDocumentDetail $signatureReleaseDocumentDetail)
    {
        $this->values['SignatureReleaseDocumentDetail'] = $signatureReleaseDocumentDetail;
        return $this;
    }
}
