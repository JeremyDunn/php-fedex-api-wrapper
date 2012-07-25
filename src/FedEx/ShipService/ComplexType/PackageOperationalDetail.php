<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Package-level data required for labeling and/or movement.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PackageOperationalDetail
    extends AbstractComplexType
{
    protected $_name = 'PackageOperationalDetail';

    /**
     * Human-readable text for pre-January 2011 clients.
     *
     * @param string $AstraHandlingText
     * return PackageOperationalDetail
     */
    public function setAstraHandlingText($astraHandlingText)
    {
        $this->AstraHandlingText = $astraHandlingText;
        return $this;
    }
    
    /**
     * Human-readable content for use on a label.
     *
     * @param array[OperationalInstruction] $OperationalInstructions
     * return PackageOperationalDetail
     */
    public function setOperationalInstructions(array $operationalInstructions)
    {
        $this->OperationalInstructions = $operationalInstructions;
        return $this;
    }
    
    /**
     * The operational barcodes pertaining to the current package.
     *
     * @param PackageBarcodes $Barcodes
     * return PackageOperationalDetail
     */
    public function setBarcodes(PackageBarcodes $barcodes)
    {
        $this->Barcodes = $barcodes;
        return $this;
    }
    
    /**
     * The FedEx internal code that represents the service and/or features of service for the current package moving under a FedEx Ground service.
     *
     * @param string $GroundServiceCode
     * return PackageOperationalDetail
     */
    public function setGroundServiceCode($groundServiceCode)
    {
        $this->GroundServiceCode = $groundServiceCode;
        return $this;
    }
    

    
}