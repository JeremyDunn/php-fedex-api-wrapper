<?php
namespace FedEx\Utility\Cli\GenerateCode;

use     Symfony\Component\Console\Application as SymfonyConsoleApplication;

class Application extends SymfonyConsoleApplication
{
    public function __construct() {
        parent::__construct('Generate code from WSDL', 1);
        
        $this->addCommands(array(
            new Command\GenerateCode()
        ));
    }
}