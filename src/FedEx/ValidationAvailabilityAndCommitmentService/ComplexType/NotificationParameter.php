<?php
namespace FedEx\ValidationAvailabilityAndCommitmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * NotificationParameter
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Validation Availability And Commitment Service Service
 *
 * @property string $Id
 * @property string $Value

 */
class NotificationParameter extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'NotificationParameter';

    /**
     * Identifies the type of data contained in Value (e.g. SERVICE_TYPE, PACKAGE_SEQUENCE, etc..).
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
     * The value of the parameter (e.g. PRIORITY_OVERNIGHT, 2, etc..).
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
