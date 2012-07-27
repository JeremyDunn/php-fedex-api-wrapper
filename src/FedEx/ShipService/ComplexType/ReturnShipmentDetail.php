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
    protected $_name = 'ReturnShipmentDetail';

    /**
     * The type of return shipment that is being requested.
     *
     * @param ReturnType $ReturnType
     * return ReturnShipmentDetail
     */
    public function setReturnType(\FedEx\ShipService\SimpleType\ReturnType $returnType)
    {
        $this->ReturnType = $returnType;
        return $this;
    }
    
    /**
     * Return Merchant Authorization
     *
     * @param Rma $Rma
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
     * @param ReturnEMailDetail $ReturnEMailDetail
     * return ReturnShipmentDetail
     */
    public function setReturnEMailDetail(ReturnEMailDetail $returnEMailDetail)
    {
        $this->ReturnEMailDetail = $returnEMailDetail;
        return $this;
    }
    

    
}