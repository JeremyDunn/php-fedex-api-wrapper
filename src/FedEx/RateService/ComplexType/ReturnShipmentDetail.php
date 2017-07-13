<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information relating to a return shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\ReturnType|string $ReturnType
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
     * The type of return shipment that is being requested. At present the only type of retrun shipment that is supported is PRINT_RETURN_LABEL. With this option you can print a return label to insert into the box of an outbound shipment. This option can not be used to print an outbound label.
     *
     * @param \FedEx\RateService\SimpleType\ReturnType|string $returnType
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
     * Specific information about the delivery of the email and options for the shipment.
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
