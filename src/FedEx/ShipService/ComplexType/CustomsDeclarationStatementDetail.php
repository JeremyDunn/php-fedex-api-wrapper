<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This provides the information necessary to identify the different statements, declarations, acts, and/or certifications that apply to this shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property \FedEx\ShipService\SimpleType\CustomsDeclarationStatementType|string[] $Types
 * @property NaftaLowValueStatementDetail $NaftaLowValueStatementDetail

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
     * @param \FedEx\ShipService\SimpleType\CustomsDeclarationStatementType[]|string[] $types
     * @return $this
     */
    public function setTypes(array $types)
    {
        $this->values['Types'] = $types;
        return $this;
    }

    /**
     * Specifies the NAFTA low value statement information.
     *
     * @param NaftaLowValueStatementDetail $naftaLowValueStatementDetail
     * @return $this
     */
    public function setNaftaLowValueStatementDetail(NaftaLowValueStatementDetail $naftaLowValueStatementDetail)
    {
        $this->values['NaftaLowValueStatementDetail'] = $naftaLowValueStatementDetail;
        return $this;
    }
}
