<?php

namespace Symfony\Config\Pimcore\Translations;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DebuggingConfig 
{
    private $enabled;
    private $parameter;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @default 'pimcore_debug_translations'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function parameter($value): static
    {
        $this->_usedProperties['parameter'] = true;
        $this->parameter = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('parameter', $config)) {
            $this->_usedProperties['parameter'] = true;
            $this->parameter = $config['parameter'];
            unset($config['parameter']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['parameter'])) {
            $output['parameter'] = $this->parameter;
        }

        return $output;
    }

}
