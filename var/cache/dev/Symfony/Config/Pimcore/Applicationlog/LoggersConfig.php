<?php

namespace Symfony\Config\Pimcore\Applicationlog;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Loggers'.\DIRECTORY_SEPARATOR.'DbConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class LoggersConfig 
{
    private $db;
    private $_usedProperties = [];

    public function db(array $value = []): \Symfony\Config\Pimcore\Applicationlog\Loggers\DbConfig
    {
        if (null === $this->db) {
            $this->_usedProperties['db'] = true;
            $this->db = new \Symfony\Config\Pimcore\Applicationlog\Loggers\DbConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "db()" has already been initialized. You cannot pass values the second time you call db().');
        }

        return $this->db;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('db', $config)) {
            $this->_usedProperties['db'] = true;
            $this->db = new \Symfony\Config\Pimcore\Applicationlog\Loggers\DbConfig($config['db']);
            unset($config['db']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['db'])) {
            $output['db'] = $this->db->toArray();
        }

        return $output;
    }

}
