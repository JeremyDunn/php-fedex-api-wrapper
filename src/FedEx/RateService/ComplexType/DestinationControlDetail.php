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

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DestinationControlDetail';

    /**
     * Set StatementTypes
     *
     * @param DestinationControlStatementType[] $statementTypes
     * @return DestinationControlDetail
     */
    public function setStatementTypes(array $statementTypes)
    {
        $this->StatementTypes = $statementTypes;
        return $this;
    }
    
    /**
     * Returns Set StatementTypes
     *
     * @return DestinationControlStatementType[]
     */
    public function getStatementTypes()
    {
        return $this->StatementTypes;
    }
    
    /**
     * Comma-separated list of up to four country codes, required for DEPARTMENT_OF_STATE statement.
     *
     * @param string $destinationCountries
     * @return DestinationControlDetail
     */
    public function setDestinationCountries($destinationCountries)
    {
        $this->DestinationCountries = $destinationCountries;
        return $this;
    }
    
    /**
     * Returns Comma-separated list of up to four country codes, required for DEPARTMENT_OF_STATE statement.
     *
     * @return string
     */
    public function getDestinationCountries()
    {
        return $this->DestinationCountries;
    }
    
    /**
     * Name of end user, required for DEPARTMENT_OF_STATE statement.
     *
     * @param string $endUser
     * @return DestinationControlDetail
     */
    public function setEndUser($endUser)
    {
        $this->EndUser = $endUser;
        return $this;
    }
    
    /**
     * Returns Name of end user, required for DEPARTMENT_OF_STATE statement.
     *
     * @return string
     */
    public function getEndUser()
    {
        return $this->EndUser;
    }
    

    
}