<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision: 2 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CodReturnPackageDetail
    extends AbstractComplexType
{
    protected $_name = 'CodReturnPackageDetail';

    /**
     * The COD amount (after any accumulations) that must be collected upon delivery of a package shipped using the COD special service.
     *
     * @param Money $CollectionAmount
     * return CodReturnPackageDetail
     */
    public function setCollectionAmount(Money $collectionAmount)
    {
        $this->CollectionAmount = $collectionAmount;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $Electronic
     * return CodReturnPackageDetail
     */
    public function setElectronic($electronic)
    {
        $this->Electronic = $electronic;
        return $this;
    }
    
    /**
     * Contains the data which form the Astra and 2DCommon barcodes that print on the COD return label.
     *
     * @param PackageBarcodes $Barcodes
     * return CodReturnPackageDetail
     */
    public function setBarcodes(PackageBarcodes $barcodes)
    {
        $this->Barcodes = $barcodes;
        return $this;
    }
    
    /**
     * The label image or printer commands to print the label.
     *
     * @param ShippingDocument $Label
     * return CodReturnPackageDetail
     */
    public function setLabel(ShippingDocument $label)
    {
        $this->Label = $label;
        return $this;
    }
    

    
}