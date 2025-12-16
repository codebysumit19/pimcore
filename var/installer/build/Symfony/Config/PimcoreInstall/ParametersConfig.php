<?php

namespace Symfony\Config\PimcoreInstall;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Parameters'.\DIRECTORY_SEPARATOR.'DatabaseCredentialsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ParametersConfig 
{
    private $databaseCredentials;
    private $_usedProperties = [];

    public function databaseCredentials(array $value = []): \Symfony\Config\PimcoreInstall\Parameters\DatabaseCredentialsConfig
    {
        if (null === $this->databaseCredentials) {
            $this->_usedProperties['databaseCredentials'] = true;
            $this->databaseCredentials = new \Symfony\Config\PimcoreInstall\Parameters\DatabaseCredentialsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "databaseCredentials()" has already been initialized. You cannot pass values the second time you call databaseCredentials().');
        }

        return $this->databaseCredentials;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('database_credentials', $config)) {
            $this->_usedProperties['databaseCredentials'] = true;
            $this->databaseCredentials = new \Symfony\Config\PimcoreInstall\Parameters\DatabaseCredentialsConfig($config['database_credentials']);
            unset($config['database_credentials']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['databaseCredentials'])) {
            $output['database_credentials'] = $this->databaseCredentials->toArray();
        }

        return $output;
    }

}
