<?php
namespace FedEx\Utility\Cli\GenerateCode;

use     Symfony\Component\Console\Application as SymfonyConsoleApplication;

/**
 * CLI Application to generate code from WSDLs
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Utilities
 */
class Application extends SymfonyConsoleApplication
{
    /**
     * Constructor 
     */
    public function __construct() {
        parent::__construct('Generate code from WSDL', 1);
        
        $this->addCommands(array(
            new Command\GenerateCode()
        ));
    }
}