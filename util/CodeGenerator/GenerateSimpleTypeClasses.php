<?php
namespace FedEx\Utility\CodeGenerator;

/**
 * Converts simple types in .wsdl file to PHP class files
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Utilities
 */
class GenerateSimpleTypeClasses extends AbstractGenerate
{
    /**
     * String replacement values
     *
     * @var array
     */
    protected $strReplace = array(
        'invalid' => array(
            '.'
        ),
        'valid' => array(
            'point'
        )
    );

    /**
     * Run generator
     */
    public function run()
    {
        foreach ($this->xml->types->schema->children() as $schema) {
            if ('simpleType' == $schema->getName()) {
                $documentation = $schema->annotation->documentation;

                $attributes = $schema->attributes();
                $className = $attributes['name'];
                $consts = '';

                foreach ($schema->restriction->enumeration as $enum) {
                    $attributes = $enum->attributes();
                    $constantName = strtoupper(str_replace($this->strReplace['invalid'], $this->strReplace['valid'], $attributes->value->__toString()));
                    $consts .= "    const _{$constantName} = '{$attributes->value->__toString()}';\n";
                }

                $classFilePath = $this->exportPath . DIRECTORY_SEPARATOR . $className . '.php';

                echo "Writing File: {$classFilePath}\n";

                $fh = fopen($classFilePath, 'w');

                $fileBody = $this->getGeneratedFileBody($documentation, $className, $consts);
                fwrite($fh, $fileBody);
                fclose($fh);
            }
        }
    }

    /**
     * Generates the body of the class file
     *
     * @param string $documentation Documentation string
     * @param string $className Class Name
     * @param string $constants string of constants for class
     * @return string
     */
    protected function getGeneratedFileBody($documentation, $className, $constants)
    {

        if (empty($documentation)) {
            $documentation = $className;
        }

        $documentation = str_ireplace("\t", '', $documentation);
        $documentation = trim($documentation);

        $fileBody = <<<TEXT
<?php
namespace {$this->namespace}\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * $documentation
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  {$this->subPackageName}
 */
class $className extends AbstractSimpleType
{
$constants}

TEXT;

        return $fileBody;
    }

}
