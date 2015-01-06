<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Return Merchant Authorization
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Rma
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Rma';

    /**
     * The RMA number.
     *
     * @param string $number
     * @return Rma
     */
    public function setNumber($number)
    {
        $this->Number = $number;
        return $this;
    }
    
    /**
     * Returns The RMA number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }
    
    /**
     * The reason for the return.
     *
     * @param string $reason
     * @return Rma
     */
    public function setReason($reason)
    {
        $this->Reason = $reason;
        return $this;
    }
    
    /**
     * Returns The reason for the return.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->Reason;
    }
    

    
}