<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class OperationalInstruction
    extends AbstractComplexType
{
    protected $_name = 'OperationalInstruction';

    /**
     * Position of operational instruction element.
     *
     * @param int $Number
     * return OperationalInstruction
     */
    public function setNumber($number)
    {
        $this->Number = $number;
        return $this;
    }
    
    /**
     * Content corresponding to the operational instruction.
     *
     * @param string $Content
     * return OperationalInstruction
     */
    public function setContent($content)
    {
        $this->Content = $content;
        return $this;
    }
    

    
}