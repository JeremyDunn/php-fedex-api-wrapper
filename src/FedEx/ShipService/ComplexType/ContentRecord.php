<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Content Record.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ContentRecord
    extends AbstractComplexType
{
    protected $_name = 'ContentRecord';

    /**
     * Part Number.
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
     * Item Number.
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
     * Received Quantity.
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
     * Description.
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