<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * OperationalInstruction
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class OperationalInstruction
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'OperationalInstruction';

    /**
     * Position of operational instruction element.
     *
     * @param int $number
     * @return OperationalInstruction
     */
    public function setNumber($number)
    {
        $this->Number = $number;
        return $this;
    }
    
    /**
     * Returns Position of operational instruction element.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->Number;
    }
    
    /**
     * Content corresponding to the operational instruction.
     *
     * @param string $content
     * @return OperationalInstruction
     */
    public function setContent($content)
    {
        $this->Content = $content;
        return $this;
    }
    
    /**
     * Returns Content corresponding to the operational instruction.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->Content;
    }
    

    
}