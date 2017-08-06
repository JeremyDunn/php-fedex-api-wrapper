<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RadionuclideDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 *
 * @property string $Radionuclide
 * @property RadionuclideActivity $Activity
 * @property boolean $ExceptedPackagingIsReportableQuantity
 * @property \FedEx\OpenShipService\SimpleType\PhysicalFormType|string $PhysicalForm
 * @property string $ChemicalForm

 */
class RadionuclideDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RadionuclideDetail';

    /**
     * Set Radionuclide
     *
     * @param string $radionuclide
     * @return $this
     */
    public function setRadionuclide($radionuclide)
    {
        $this->values['Radionuclide'] = $radionuclide;
        return $this;
    }

    /**
     * Set Activity
     *
     * @param RadionuclideActivity $activity
     * @return $this
     */
    public function setActivity(RadionuclideActivity $activity)
    {
        $this->values['Activity'] = $activity;
        return $this;
    }

    /**
     * Indicates whether packaging type "EXCEPTED" or "EXCEPTED_PACKAGE" is for radioactive material in reportable quantity.
     *
     * @param boolean $exceptedPackagingIsReportableQuantity
     * @return $this
     */
    public function setExceptedPackagingIsReportableQuantity($exceptedPackagingIsReportableQuantity)
    {
        $this->values['ExceptedPackagingIsReportableQuantity'] = $exceptedPackagingIsReportableQuantity;
        return $this;
    }

    /**
     * Set PhysicalForm
     *
     * @param \FedEx\OpenShipService\SimpleType\PhysicalFormType|string $physicalForm
     * @return $this
     */
    public function setPhysicalForm($physicalForm)
    {
        $this->values['PhysicalForm'] = $physicalForm;
        return $this;
    }

    /**
     * Set ChemicalForm
     *
     * @param string $chemicalForm
     * @return $this
     */
    public function setChemicalForm($chemicalForm)
    {
        $this->values['ChemicalForm'] = $chemicalForm;
        return $this;
    }
}
