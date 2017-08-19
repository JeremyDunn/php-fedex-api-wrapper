<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Package-level data required for labeling and/or movement.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $AstraHandlingText
 * @property OperationalInstruction[] $OperationalInstructions
 * @property PackageBarcodes $Barcodes
 * @property string $GroundServiceCode

 */
class PackageOperationalDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PackageOperationalDetail';

    /**
     * Human-readable text for pre-January 2011 clients.
     *
     * @param string $astraHandlingText
     * @return $this
     */
    public function setAstraHandlingText($astraHandlingText)
    {
        $this->values['AstraHandlingText'] = $astraHandlingText;
        return $this;
    }

    /**
     * Human-readable content for use on a label.
     *
     * @param OperationalInstruction[] $operationalInstructions
     * @return $this
     */
    public function setOperationalInstructions(array $operationalInstructions)
    {
        $this->values['OperationalInstructions'] = $operationalInstructions;
        return $this;
    }

    /**
     * The operational barcodes pertaining to the current package.
     *
     * @param PackageBarcodes $barcodes
     * @return $this
     */
    public function setBarcodes(PackageBarcodes $barcodes)
    {
        $this->values['Barcodes'] = $barcodes;
        return $this;
    }

    /**
     * The FedEx internal code that represents the service and/or features of service for the current package moving under a FedEx Ground service.
     *
     * @param string $groundServiceCode
     * @return $this
     */
    public function setGroundServiceCode($groundServiceCode)
    {
        $this->values['GroundServiceCode'] = $groundServiceCode;
        return $this;
    }
}
