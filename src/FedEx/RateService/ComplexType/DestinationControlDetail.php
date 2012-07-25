<?php
namespace FedEx\RateService\ComplexType;

/**
 * Data required to complete the Destionation Control Statement for US exports.
 *
 * @version     $Revision: 4 $
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
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