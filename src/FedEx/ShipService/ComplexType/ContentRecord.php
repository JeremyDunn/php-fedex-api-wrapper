<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Content Record.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property string $PartNumber
 * @property string $ItemNumber
 * @property int $ReceivedQuantity
 * @property string $Description

 */
class ContentRecord extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ContentRecord';

    /**
     * Part Number.
     *
     * @param string $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->values['PartNumber'] = $partNumber;
        return $this;
    }

    /**
     * Item Number.
     *
     * @param string $itemNumber
     * @return $this
     */
    public function setItemNumber($itemNumber)
    {
        $this->values['ItemNumber'] = $itemNumber;
        return $this;
    }

    /**
     * Received Quantity.
     *
     * @param int $receivedQuantity
     * @return $this
     */
    public function setReceivedQuantity($receivedQuantity)
    {
        $this->values['ReceivedQuantity'] = $receivedQuantity;
        return $this;
    }

    /**
     * Description.
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }
}
