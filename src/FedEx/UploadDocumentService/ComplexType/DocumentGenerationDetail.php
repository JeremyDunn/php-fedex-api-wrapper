<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocumentGenerationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\EnterpriseDocumentType|string $Type
 * @property int $MinimumCopiesRequired
 * @property \FedEx\UploadDocumentService\SimpleType\RequirementType|string $Letterhead
 * @property \FedEx\UploadDocumentService\SimpleType\RequirementType|string $ElectronicSignature

 */
class DocumentGenerationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DocumentGenerationDetail';

    /**
     * Set Type
     *
     * @param \FedEx\UploadDocumentService\SimpleType\EnterpriseDocumentType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set MinimumCopiesRequired
     *
     * @param int $minimumCopiesRequired
     * @return $this
     */
    public function setMinimumCopiesRequired($minimumCopiesRequired)
    {
        $this->values['MinimumCopiesRequired'] = $minimumCopiesRequired;
        return $this;
    }

    /**
     * Set Letterhead
     *
     * @param \FedEx\UploadDocumentService\SimpleType\RequirementType|string $letterhead
     * @return $this
     */
    public function setLetterhead($letterhead)
    {
        $this->values['Letterhead'] = $letterhead;
        return $this;
    }

    /**
     * Set ElectronicSignature
     *
     * @param \FedEx\UploadDocumentService\SimpleType\RequirementType|string $electronicSignature
     * @return $this
     */
    public function setElectronicSignature($electronicSignature)
    {
        $this->values['ElectronicSignature'] = $electronicSignature;
        return $this;
    }
}
