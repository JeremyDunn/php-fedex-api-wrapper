<?php
namespace FedEx\DGDSService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddDangerousGoodsHandlingUnitRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Dangerous Goods Data Service
 *
 * @property WebAuthenticationDetail $WebAuthenticationDetail
 * @property ClientDetail $ClientDetail
 * @property TransactionDetail $TransactionDetail
 * @property VersionId $Version
 * @property string $UploadId
 * @property UploadedDangerousGoodsHandlingUnitGroup $HandlingUnitGroup

 */
class AddDangerousGoodsHandlingUnitRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddDangerousGoodsHandlingUnitRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return $this
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->values['WebAuthenticationDetail'] = $webAuthenticationDetail;
        return $this;
    }

    /**
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * @return $this
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->values['ClientDetail'] = $clientDetail;
        return $this;
    }

    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return $this
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->values['TransactionDetail'] = $transactionDetail;
        return $this;
    }

    /**
     * Set Version
     *
     * @param VersionId $version
     * @return $this
     */
    public function setVersion(VersionId $version)
    {
        $this->values['Version'] = $version;
        return $this;
    }

    /**
     * Set UploadId
     *
     * @param string $uploadId
     * @return $this
     */
    public function setUploadId($uploadId)
    {
        $this->values['UploadId'] = $uploadId;
        return $this;
    }

    /**
     * Set HandlingUnitGroup
     *
     * @param UploadedDangerousGoodsHandlingUnitGroup $handlingUnitGroup
     * @return $this
     */
    public function setHandlingUnitGroup(UploadedDangerousGoodsHandlingUnitGroup $handlingUnitGroup)
    {
        $this->values['HandlingUnitGroup'] = $handlingUnitGroup;
        return $this;
    }
}
