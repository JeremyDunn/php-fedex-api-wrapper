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
     * @return RadionuclideDetail
     */
    public function setRadionuclide($radionuclide)
    {
        $this->Radionuclide = $radionuclide;
        return $this;
    }
    
    /**
     * Returns Set Radionuclide
     *
     * @return string
     */
    public function getRadionuclide()
    {
        return $this->Radionuclide;
    }
    
    /**
     * Set Activity
     *
     * @param RadionuclideActivity $activity
     * @return RadionuclideDetail
     */
    public function setActivity(RadionuclideActivity $activity)
    {
        $this->Activity = $activity;
        return $this;
    }
    
    /**
     * Returns Set Activity
     *
     * @return RadionuclideActivity
     */
    public function getActivity()
    {
        return $this->Activity;
    }
    
    /**
     * Indicates whether packaging type "EXCEPTED" or "EXCEPTED_PACKAGE" is for radioactive material in reportable quantity.
     *
     * @param boolean $exceptedPackagingIsReportableQuantity
     * @return RadionuclideDetail
     */
    public function setExceptedPackagingIsReportableQuantity($exceptedPackagingIsReportableQuantity)
    {
        $this->ExceptedPackagingIsReportableQuantity = $exceptedPackagingIsReportableQuantity;
        return $this;
    }
    
    /**
     * Returns Indicates whether packaging type "EXCEPTED" or "EXCEPTED_PACKAGE" is for radioactive material in reportable quantity.
     *
     * @return boolean
     */
    public function getExceptedPackagingIsReportableQuantity()
    {
        return $this->ExceptedPackagingIsReportableQuantity;
    }
    
    /**
     * Set PhysicalForm
     *
     * @param \FedEx\ShipService\SimpleType\PhysicalFormType|string $physicalForm
     * @return RadionuclideDetail
     */
    public function setPhysicalForm($physicalForm)
    {
        $this->PhysicalForm = $physicalForm;
        return $this;
    }
    
    /**
     * Returns Set PhysicalForm
     *
     * @return \FedEx\ShipService\SimpleType\PhysicalFormType|string
     */
    public function getPhysicalForm()
    {
        return $this->PhysicalForm;
    }
    
    /**
     * Set ChemicalForm
     *
     * @param string $chemicalForm
     * @return RadionuclideDetail
     */
    public function setChemicalForm($chemicalForm)
    {
        $this->ChemicalForm = $chemicalForm;
        return $this;
    }
    
    /**
     * Returns Set ChemicalForm
     *
     * @return string
     */
    public function getChemicalForm()
    {
        return $this->ChemicalForm;
    }
    

    
}