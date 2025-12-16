<?php

namespace Symfony\Config\Pimcore\Assets\TypeDefinitions;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MapConfig 
{
    private $class;
    private $matching;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function class($value): static
    {
        $this->_usedProperties['class'] = true;
        $this->class = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function matching(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['matching'] = true;
        $this->matching = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('class', $config)) {
            $this->_usedProperties['class'] = true;
            $this->class = $config['class'];
            unset($config['class']);
        }

        if (array_key_exists('matching', $config)) {
            $this->_usedProperties['matching'] = true;
            $this->matching = $config['matching'];
            unset($config['matching']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['class'])) {
            $output['class'] = $this->class;
        }
        if (isset($this->_usedProperties['matching'])) {
            $output['matching'] = $this->matching;
        }

        return $output;
    }

}
