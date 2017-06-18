<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information relating to a return shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\ReturnType|string $ReturnType
 * @property Rma $Rma
 * @property ReturnEMailDetail $ReturnEMailDetail

 */
class ReturnShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ReturnShipmentDetail';

    /**
     * The type of return shipment that is being requested.
     *
     * @param \FedEx\PickupService\SimpleType\ReturnType|string $returnType
     * @return $this
     */
    public function setReturnType($returnType)
    {
        $this->values['ReturnType'] = $returnType;
        return $this;
    }

    /**
     * Return Merchant Authorization
     *
     * @param Rma $rma
     * @return $this
     */
    public function setRma(Rma $rma)
    {
        $this->values['Rma'] = $rma;
        return $this;
    }

    /**
     * Describes specific information about the email label shipment.
     *
     * @param ReturnEMailDetail $returnEMailDetail
     * @return $this
     */
    public function setReturnEMailDetail(ReturnEMailDetail $returnEMailDetail)
    {
        $this->values['ReturnEMailDetail'] = $returnEMailDetail;
        return $this;
    }
}
