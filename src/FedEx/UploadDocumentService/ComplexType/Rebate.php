<?php
namespace FedEx\UploadDocumentService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Rebate
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Upload Document Service
 *
 * @property \FedEx\UploadDocumentService\SimpleType\RebateType|string $RebateType
 * @property string $Description
 * @property Money $Amount
 * @property float $Percent

 */
class Rebate extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Rebate';

    /**
     * Set RebateType
     *
     * @param \FedEx\UploadDocumentService\SimpleType\RebateType|string $rebateType
     * @return $this
     */
    public function setRebateType($rebateType)
    {
        $this->values['RebateType'] = $rebateType;
        return $this;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Set Amount
     *
     * @param Money $amount
     * @return $this
     */
    public function setAmount(Money $amount)
    {
        $this->values['Amount'] = $amount;
        return $this;
    }

    /**
     * Set Percent
     *
     * @param float $percent
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->values['Percent'] = $percent;
        return $this;
    }
}
