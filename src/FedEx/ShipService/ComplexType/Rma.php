<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * June 2011 ITG 121203 IR-RMA number has been removed from this structure and added as a new customer reference type. The structure remains because of the reason field below.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * The reason for the return.
     *
     * @param string $reason
     * return Rma
     */
    public function setReason($reason)
    {
        $this->Reason = $reason;
        return $this;
    }
    

    
}