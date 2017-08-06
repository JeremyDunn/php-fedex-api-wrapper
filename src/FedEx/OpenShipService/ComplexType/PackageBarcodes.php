<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property BinaryBarcode[] $BinaryBarcodes
 * @property StringBarcode[] $StringBarcodes

 */
class PackageBarcodes extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PackageBarcodes';

    /**
     * Binary-style barcodes for this package.
     *
     * @param BinaryBarcode[] $binaryBarcodes
     * @return $this
     */
    public function setBinaryBarcodes(array $binaryBarcodes)
    {
        $this->values['BinaryBarcodes'] = $binaryBarcodes;
        return $this;
    }

    /**
     * String-style barcodes for this package.
     *
     * @param StringBarcode[] $stringBarcodes
     * @return $this
     */
    public function setStringBarcodes(array $stringBarcodes)
    {
        $this->values['StringBarcodes'] = $stringBarcodes;
        return $this;
    }
}
