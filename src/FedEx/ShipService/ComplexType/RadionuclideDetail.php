<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RadionuclideDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class RadionuclideDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'RadionuclideDetail';

    /**
     * Set Radionuclide
     *
     * @param string $radionuclide
     * return RadionuclideDetail
     */
    public function setRadionuclide($radionuclide)
    {
        $this->Radionuclide = $radionuclide;
        return $this;
    }
    
    /**
     * Set Activity
     *
     * @param RadionuclideActivity $activity
     * return RadionuclideDetail
     */
    public function setActivity(RadionuclideActivity $activity)
    {
        $this->Activity = $activity;
        return $this;
    }
    
    /**
     * Indicates whether packaging type "EXCEPTED" or "EXCEPTED_PACKAGE" is for radioactive material in reportable quantity.
     *
     * @param boolean $exceptedPackagingIsReportableQuantity
     * return RadionuclideDetail
     */
    public function setExceptedPackagingIsReportableQuantity($exceptedPackagingIsReportableQuantity)
    {
        $this->ExceptedPackagingIsReportableQuantity = $exceptedPackagingIsReportableQuantity;
        return $this;
    }
    
    /**
     * Set PhysicalForm
     *
     * @param \FedEx\ShipService\SimpleType\PhysicalFormType|string $physicalForm
     * return RadionuclideDetail
     */
    public function setPhysicalForm($physicalForm)
    {
        $this->PhysicalForm = $physicalForm;
        return $this;
    }
    
    /**
     * Set ChemicalForm
     *
     * @param string $chemicalForm
     * return RadionuclideDetail
     */
    public function setChemicalForm($chemicalForm)
    {
        $this->ChemicalForm = $chemicalForm;
        return $this;
    }
    

    
}