<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is a structure for providing document line item content (in part or in whole) to a service.
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property KeyValueDetail[] $Values

 */
class DocumentLineItem extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DocumentLineItem';

    /**
     * Set Values
     *
     * @param KeyValueDetail[] $values
     * @return $this
     */
    public function setValues(array $values)
    {
        $this->values['Values'] = $values;
        return $this;
    }
}
