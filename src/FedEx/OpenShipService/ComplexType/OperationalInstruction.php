<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * OperationalInstruction
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property int $Number
 * @property string $Content

 */
class OperationalInstruction extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OperationalInstruction';

    /**
     * Position of operational instruction element.
     *
     * @param int $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->values['Number'] = $number;
        return $this;
    }

    /**
     * Content corresponding to the operational instruction.
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->values['Content'] = $content;
        return $this;
    }
}
