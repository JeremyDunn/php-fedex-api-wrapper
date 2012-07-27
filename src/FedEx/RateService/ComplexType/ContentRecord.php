<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * 
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ContentRecord
    extends AbstractComplexType
{
    protected $_name = 'ContentRecord';

    /**
     * 
     *
     * @param string $PartNumber
     * return ContentRecord
     */
    public function setPartNumber($partNumber)
    {
        $this->PartNumber = $partNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $ItemNumber
     * return ContentRecord
     */
    public function setItemNumber($itemNumber)
    {
        $this->ItemNumber = $itemNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param nonNegativeInteger $ReceivedQuantity
     * return ContentRecord
     */
    public function setReceivedQuantity($receivedQuantity)
    {
        $this->ReceivedQuantity = $receivedQuantity;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
     * return ContentRecord
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    

    
}