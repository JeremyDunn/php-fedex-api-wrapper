<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the tax exemption details for the entity under considertaion.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ExemptionType|string $ExemptionType
 * @property string $TaxCodeType
 * @property string $Id
 * @property GeoPoliticalEntityDetail $GeoPoliticalEntity

 */
class TaxExemptionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TaxExemptionDetail';

    /**
     * Specifies whehther exempt or not.
     *
     * @param \FedEx\ValidationAvailabilityAndCommitmentService\SimpleType\ExemptionType|string $exemptionType
     * @return $this
     */
    public function setExemptionType($exemptionType)
    {
        $this->values['ExemptionType'] = $exemptionType;
        return $this;
    }

    /**
     * The specific tax code type for which the exemption is specified.
     *
     * @param string $taxCodeType
     * @return $this
     */
    public function setTaxCodeType($taxCodeType)
    {
        $this->values['TaxCodeType'] = $taxCodeType;
        return $this;
    }

    /**
     * Tax Identification code for the entity under consideration.
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['Id'] = $id;
        return $this;
    }

    /**
     * The geo-political entity where the tax details are relevant.
     *
     * @param GeoPoliticalEntityDetail $geoPoliticalEntity
     * @return $this
     */
    public function setGeoPoliticalEntity(GeoPoliticalEntityDetail $geoPoliticalEntity)
    {
        $this->values['GeoPoliticalEntity'] = $geoPoliticalEntity;
        return $this;
    }
}
