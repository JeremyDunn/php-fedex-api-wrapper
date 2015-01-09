<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information relating to a return shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
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
     * @param \FedEx\Pickup\SimpleType\ReturnType|string $returnType
     * @return ReturnShipmentDetail
     */
    public function setReturnType($returnType)
    {
        $this->ReturnType = $returnType;
        return $this;
    }
    
    /**
     * Returns The type of return shipment that is being requested.
     *
     * @return \FedEx\Pickup\SimpleType\ReturnType|string
     */
    public function getReturnType()
    {
        return $this->ReturnType;
    }
    
    /**
     * Return Merchant Authorization
     *
     * @param Rma $rma
     * @return ReturnShipmentDetail
     */
    public function setRma(Rma $rma)
    {
        $this->Rma = $rma;
        return $this;
    }
    
    /**
     * Returns Return Merchant Authorization
     *
     * @return Rma
     */
    public function getRma()
    {
        return $this->Rma;
    }
    
    /**
     * Describes specific information about the email label shipment.
     *
     * @param ReturnEMailDetail $returnEMailDetail
     * @return ReturnShipmentDetail
     */
    public function setReturnEMailDetail(ReturnEMailDetail $returnEMailDetail)
    {
        $this->ReturnEMailDetail = $returnEMailDetail;
        return $this;
    }
    
    /**
     * Returns Describes specific information about the email label shipment.
     *
     * @return ReturnEMailDetail
     */
    public function getReturnEMailDetail()
    {
        return $this->ReturnEMailDetail;
    }
    

    
}