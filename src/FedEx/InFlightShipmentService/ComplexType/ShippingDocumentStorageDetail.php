<?php
namespace FedEx\InFlightShipmentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies how to store shipping documents.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  In Flight Shipment Service
 *
 * @property string $FilePath
 * @property \FedEx\InFlightShipmentService\SimpleType\ShippingDocumentNamingType|string $FileNaming
 * @property string $FileSuffix

 */
class ShippingDocumentStorageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShippingDocumentStorageDetail';

    /**
     * Provides the path to be used for STORED or DEFERRED documents.
     *
     * @param string $filePath
     * @return $this
     */
    public function setFilePath($filePath)
    {
        $this->values['FilePath'] = $filePath;
        return $this;
    }

    /**
     * Identifies the convention by which file names are constructed for STORED or DEFERRED documents.
     *
     * @param \FedEx\InFlightShipmentService\SimpleType\ShippingDocumentNamingType|string $fileNaming
     * @return $this
     */
    public function setFileNaming($fileNaming)
    {
        $this->values['FileNaming'] = $fileNaming;
        return $this;
    }

    /**
     * Suffix to be placed at the end of the file name; required on some platforms to determine file type.
     *
     * @param string $fileSuffix
     * @return $this
     */
    public function setFileSuffix($fileSuffix)
    {
        $this->values['FileSuffix'] = $fileSuffix;
        return $this;
    }
}
