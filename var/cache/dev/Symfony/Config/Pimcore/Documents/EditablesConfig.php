<?php

namespace Symfony\Config\Pimcore\Documents;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class EditablesConfig 
{
    private $map;
    private $prefixes;
    private $_usedProperties = [];

    /**
     * @return $this
     */
    public function map(string $name, mixed $value): static
    {
        $this->_usedProperties['map'] = true;
        $this->map[$name] = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function prefixes(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['prefixes'] = true;
        $this->prefixes = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('map', $config)) {
            $this->_usedProperties['map'] = true;
            $this->map = $config['map'];
            unset($config['map']);
        }

        if (array_key_exists('prefixes', $config)) {
            $this->_usedProperties['prefixes'] = true;
            $this->prefixes = $config['prefixes'];
            unset($config['prefixes']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['map'])) {
            $output['map'] = $this->map;
        }
        if (isset($this->_usedProperties['prefixes'])) {
            $output['prefixes'] = $this->prefixes;
        }

        return $output;
    }

}
