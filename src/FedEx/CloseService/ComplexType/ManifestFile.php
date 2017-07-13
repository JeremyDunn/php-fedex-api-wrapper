<?php
namespace FedEx\CloseService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ManifestFile
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Close Service
 *
 * @property string $FileName
 * @property string $File

 */
class ManifestFile extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ManifestFile';

    /**
     * Set FileName
     *
     * @param string $fileName
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->values['FileName'] = $fileName;
        return $this;
    }

    /**
     * Set File
     *
     * @param string $file
     * @return $this
     */
    public function setFile($file)
    {
        $this->values['File'] = $file;
        return $this;
    }
}
