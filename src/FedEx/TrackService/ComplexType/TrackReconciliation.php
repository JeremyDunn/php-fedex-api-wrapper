<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Used to report the status of a piece of a multiple piece shipment which is no longer traveling with the rest of the packages in the shipment or has not been accounted for.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackReconciliation
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackReconciliation';

    /**
     * An identifier for this type of status.
     *
     * @param string $status
     * @return TrackReconciliation
     */
    public function setStatus($status)
    {
        $this->Status = $status;
        return $this;
    }
    
    /**
     * Returns An identifier for this type of status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    
    /**
     * A human-readable description of this status.
     *
     * @param string $description
     * @return TrackReconciliation
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns A human-readable description of this status.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    

    
}