<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This provides the information necessary to identify the different statements, declarations, acts, and/or certifications that apply to this shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\CustomsDeclarationStatementType|string[] $Types

 */
class CustomsDeclarationStatementDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CustomsDeclarationStatementDetail';

    /**
     * This indicates the different statements, declarations, acts, and/or certifications that apply to this shipment.
     *
     * @param \FedEx\UploadDocumentService\SimpleType\CustomsDeclarationStatementType[]|string[] $types
     * @return $this
     */
    public function setTypes(array $types)
    {
        $this->values['Types'] = $types;
        return $this;
    }
}
