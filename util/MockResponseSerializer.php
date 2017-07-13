<?php

namespace FedEx\Utility;

class MockResponseSerializer
{
    /**
     * @var string
     */
    protected $mockResponseDirectory;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mockResponseDirectory = __DIR__ . '/../tests/mock-responses';
    }

    /**
     * @param mixed $data
     * @param string $fileName
     * @param bool $overwrite
     * @throws \Exception
     */
    public function save($data, $fileName, $overwrite = true)
    {
        $filePath = realpath($this->mockResponseDirectory) . DIRECTORY_SEPARATOR . $fileName;

        if (!$overwrite && file_exists($filePath)) {
            throw new \Exception("The file '{$filePath}' already exists and \$overwrite = false.");
        }

        $file = new \SplFileObject($filePath, 'w');
        $file->fwrite(serialize($data));
        unset($file);
    }

    /**
     * Get unserialised contents of file
     *
     * @param string $fileName
     * @return mixed
     * @throws \Exception
     */
    public function get($fileName)
    {
        $filePath = realpath($this->mockResponseDirectory) . DIRECTORY_SEPARATOR . $fileName;

        if (!file_exists($filePath)) {
            throw new \Exception("File not found: '{$filePath}'");
        }

        if (!is_readable($filePath)) {
            throw new \Exception("Cannot read file: '{$filePath}'");
        }

        return unserialize(file_get_contents($filePath));
    }
}
