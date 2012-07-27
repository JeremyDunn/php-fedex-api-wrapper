<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to complete the Destionation Control Statement for US exports.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DestinationControlDetail
    extends AbstractComplexType
{
    protected $_name = 'DestinationControlDetail';

    /**
     * 
     *
     * @param array[DestinationControlStatementType] $StatementTypes
     * return DestinationControlDetail
     */
    public function setStatementTypes(array $statementTypes)
    {
        $this->StatementTypes = $statementTypes;
        return $this;
    }
    
    /**
     * Comma-separated list of up to four country codes, required for DEPARTMENT_OF_STATE statement.
     *
     * @param string $DestinationCountries
     * return DestinationControlDetail
     */
    public function setDestinationCountries($destinationCountries)
    {
        $this->DestinationCountries = $destinationCountries;
        return $this;
    }
    
    /**
     * Name of end user, required for DEPARTMENT_OF_STATE statement.
     *
     * @param string $EndUser
     * return DestinationControlDetail
     */
    public function setEndUser($endUser)
    {
        $this->EndUser = $endUser;
        return $this;
    }
    

    
}