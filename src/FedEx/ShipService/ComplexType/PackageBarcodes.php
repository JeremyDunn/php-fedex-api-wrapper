<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PackageBarcodes
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PackageBarcodes';

    /**
     * Binary-style barcodes for this package.
     *
     * @param BinaryBarcode[] $binaryBarcodes
     * return PackageBarcodes
     */
    public function setBinaryBarcodes(array $binaryBarcodes)
    {
        $this->BinaryBarcodes = $binaryBarcodes;
        return $this;
    }
    
    /**
     * String-style barcodes for this package.
     *
     * @param StringBarcode[] $stringBarcodes
     * return PackageBarcodes
     */
    public function setStringBarcodes(array $stringBarcodes)
    {
        $this->StringBarcodes = $stringBarcodes;
        return $this;
    }
    

    
}