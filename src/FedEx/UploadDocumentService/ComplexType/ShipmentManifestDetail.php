<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentManifestDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\CustomerReferenceType|string $ManifestReferenceType

 */
class ShipmentManifestDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipmentManifestDetail';

    /**
     * This identifies which customer reference field contains the manifest ID.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\CustomerReferenceType|string $manifestReferenceType
     * @return $this
     */
    public function setManifestReferenceType($manifestReferenceType)
    {
        $this->values['ManifestReferenceType'] = $manifestReferenceType;
        return $this;
    }
}
