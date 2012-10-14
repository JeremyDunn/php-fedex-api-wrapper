<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information relating to a return shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ReturnShipmentDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ReturnShipmentDetail';

    /**
     * The type of return shipment that is being requested.
     *
     * @param \FedEx\ShipService\SimpleType\ReturnType|string $returnType
     * return ReturnShipmentDetail
     */
    public function setReturnType($returnType)
    {
        $this->ReturnType = $returnType;
        return $this;
    }
    
    /**
     * Return Merchant Authorization
     *
     * @param Rma $rma
     * return ReturnShipmentDetail
     */
    public function setRma(Rma $rma)
    {
        $this->Rma = $rma;
        return $this;
    }
    
    /**
     * Describes specific information about the email label for return shipment.
     *
     * @param ReturnEMailDetail $returnEMailDetail
     * return ReturnShipmentDetail
     */
    public function setReturnEMailDetail(ReturnEMailDetail $returnEMailDetail)
    {
        $this->ReturnEMailDetail = $returnEMailDetail;
        return $this;
    }
    
    /**
     * Set ReturnAssociation
     *
     * @param ReturnAssociationDetail $returnAssociation
     * return ReturnShipmentDetail
     */
    public function setReturnAssociation(ReturnAssociationDetail $returnAssociation)
    {
        $this->ReturnAssociation = $returnAssociation;
        return $this;
    }
    

    
}