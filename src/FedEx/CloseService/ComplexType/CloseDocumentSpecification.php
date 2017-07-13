<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Contains all data required for close-time documents to be produced in conjunction with a specific set of shipments. For January 2010, there are no applicable options for the COD report, the Manifest, or the Multiweight Report (they will only be available in TEXT format). Detail specifications will be added for those report types when customer-selectable options are implemented.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property \FedEx\CloseService\SimpleType\CloseDocumentType|string[] $CloseDocumentTypes
 * @property Op950Detail $Op950Detail

 */
class CloseDocumentSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'CloseDocumentSpecification';

    /**
     * Indicates the types of close documents requested by the caller.
     *
     * @param \FedEx\CloseService\SimpleType\CloseDocumentType[]|string[] $closeDocumentTypes
     * @return $this
     */
    public function setCloseDocumentTypes(array $closeDocumentTypes)
    {
        $this->values['CloseDocumentTypes'] = $closeDocumentTypes;
        return $this;
    }

    /**
     * Specifies the production of the OP-950 document for hazardous materials.
     *
     * @param Op950Detail $op950Detail
     * @return $this
     */
    public function setOp950Detail(Op950Detail $op950Detail)
    {
        $this->values['Op950Detail'] = $op950Detail;
        return $this;
    }
}
