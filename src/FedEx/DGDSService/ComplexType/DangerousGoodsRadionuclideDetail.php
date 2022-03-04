<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DangerousGoodsRadionuclideDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property string[] $Radionuclides
 * @property DangerousGoodsRadionuclideActivity $Activity
 * @property \FedEx\DGDSService\SimpleType\PhysicalFormType|string $PhysicalForm
 * @property string $ChemicalForm

 */
class DangerousGoodsRadionuclideDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'DangerousGoodsRadionuclideDetail';

    /**
     * Specifies the radionuclide(s) of this dangerous goods commodity (e.g. - U-238 or Tm-168).
     *
     * @param string $radionuclides
     * @return $this
     */
    public function setRadionuclides($radionuclides)
    {
        $this->values['Radionuclides'] = $radionuclides;
        return $this;
    }

    /**
     * Specifies the measure of radioactivity for this dangerous goods commodity.
     *
     * @param DangerousGoodsRadionuclideActivity $activity
     * @return $this
     */
    public function setActivity(DangerousGoodsRadionuclideActivity $activity)
    {
        $this->values['Activity'] = $activity;
        return $this;
    }

    /**
     * Specifies the physical form or nature of the radioactive material.
     *
     * @param \FedEx\DGDSService\SimpleType\PhysicalFormType|string $physicalForm
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
