<?php

namespace Symfony\Config\PimcoreAdmin\Session;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AttributeBagsConfig 
{
    private $storageKey;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function storageKey($value): static
    {
        $this->_usedProperties['storageKey'] = true;
        $this->storageKey = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('storage_key', $config)) {
            $this->_usedProperties['storageKey'] = true;
            $this->storageKey = $config['storage_key'];
            unset($config['storage_key']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['storageKey'])) {
            $output['storage_key'] = $this->storageKey;
        }

        return $output;
    }

}
