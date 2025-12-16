<?php

namespace Symfony\Config\PimcoreAdmin;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ExportConfig 
{
    private $versionSuffix;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function versionSuffix($value): static
    {
        $this->_usedProperties['versionSuffix'] = true;
        $this->versionSuffix = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('version_suffix', $config)) {
            $this->_usedProperties['versionSuffix'] = true;
            $this->versionSuffix = $config['version_suffix'];
            unset($config['version_suffix']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['versionSuffix'])) {
            $output['version_suffix'] = $this->versionSuffix;
        }

        return $output;
    }

}
