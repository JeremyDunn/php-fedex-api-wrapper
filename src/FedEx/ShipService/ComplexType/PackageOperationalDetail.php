<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Package-level data required for labeling and/or movement.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PackageOperationalDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PackageOperationalDetail';

    /**
     * Human-readable text for pre-January 2011 clients.
     *
     * @param string $astraHandlingText
     * @return PackageOperationalDetail
     */
    public function setAstraHandlingText($astraHandlingText)
    {
        $this->AstraHandlingText = $astraHandlingText;
        return $this;
    }
    
    /**
     * Returns Human-readable text for pre-January 2011 clients.
     *
     * @return string
     */
    public function getAstraHandlingText()
    {
        return $this->AstraHandlingText;
    }
    
    /**
     * Human-readable content for use on a label.
     *
     * @param OperationalInstruction[] $operationalInstructions
     * @return PackageOperationalDetail
     */
    public function setOperationalInstructions(array $operationalInstructions)
    {
        $this->OperationalInstructions = $operationalInstructions;
        return $this;
    }
    
    /**
     * Returns Human-readable content for use on a label.
     *
     * @return OperationalInstruction[]
     */
    public function getOperationalInstructions()
    {
        return $this->OperationalInstructions;
    }
    
    /**
     * The operational barcodes pertaining to the current package.
     *
     * @param PackageBarcodes $barcodes
     * @return PackageOperationalDetail
     */
    public function setBarcodes(PackageBarcodes $barcodes)
    {
        $this->Barcodes = $barcodes;
        return $this;
    }
    
    /**
     * Returns The operational barcodes pertaining to the current package.
     *
     * @return PackageBarcodes
     */
    public function getBarcodes()
    {
        return $this->Barcodes;
    }
    
    /**
     * The FedEx internal code that represents the service and/or features of service for the current package moving under a FedEx Ground service.
     *
     * @param string $groundServiceCode
     * @return PackageOperationalDetail
     */
    public function setGroundServiceCode($groundServiceCode)
    {
        $this->GroundServiceCode = $groundServiceCode;
        return $this;
    }
    
    /**
     * Returns The FedEx internal code that represents the service and/or features of service for the current package moving under a FedEx Ground service.
     *
     * @return string
     */
    public function getGroundServiceCode()
    {
        return $this->GroundServiceCode;
    }
    

    
}