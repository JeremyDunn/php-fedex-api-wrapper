<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ManifestReferenceDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property \FedEx\DGDSService\SimpleType\CustomerReferenceType|string $Type
 * @property string $Value

 */
class ManifestReferenceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ManifestReferenceDetail';

    /**
     * The PO_NUMBER, INVOICE_NUMBER, and CUSTOMER_REFERENCE types can be used for grouping shipments by conveyance, like a trailer, if populated in shipping.
     *
     * @param \FedEx\DGDSService\SimpleType\CustomerReferenceType|string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['Type'] = $type;
        return $this;
    }

    /**
     * Set Value
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['Value'] = $value;
        return $this;
    }
}
