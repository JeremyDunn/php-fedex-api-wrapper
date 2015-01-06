<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ContentRecord
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ContentRecord
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ContentRecord';

    /**
     * Set PartNumber
     *
     * @param string $partNumber
     * @return ContentRecord
     */
    public function setPartNumber($partNumber)
    {
        $this->PartNumber = $partNumber;
        return $this;
    }
    
    /**
     * Returns Set PartNumber
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->PartNumber;
    }
    
    /**
     * Set ItemNumber
     *
     * @param string $itemNumber
     * @return ContentRecord
     */
    public function setItemNumber($itemNumber)
    {
        $this->ItemNumber = $itemNumber;
        return $this;
    }
    
    /**
     * Returns Set ItemNumber
     *
     * @return string
     */
    public function getItemNumber()
    {
        return $this->ItemNumber;
    }
    
    /**
     * Set ReceivedQuantity
     *
     * @param nonNegativeInteger $receivedQuantity
     * @return ContentRecord
     */
    public function setReceivedQuantity($receivedQuantity)
    {
        $this->ReceivedQuantity = $receivedQuantity;
        return $this;
    }
    
    /**
     * Returns Set ReceivedQuantity
     *
     * @return nonNegativeInteger
     */
    public function getReceivedQuantity()
    {
        return $this->ReceivedQuantity;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return ContentRecord
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Set Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    

    
}