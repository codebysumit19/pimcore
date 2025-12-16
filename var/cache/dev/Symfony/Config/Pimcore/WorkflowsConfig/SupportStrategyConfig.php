<?php

namespace Symfony\Config\Pimcore\WorkflowsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SupportStrategyConfig 
{
    private $type;
    private $arguments;
    private $service;
    private $_usedProperties = [];

    /**
     * Type "expression": a symfony expression to define a criteria.
     * @default null
     * @param ParamConfigurator|'expression' $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|string $value
     *
     * @return $this
     */
    public function arguments(ParamConfigurator|string|array $value): static
    {
        $this->_usedProperties['arguments'] = true;
        $this->arguments = $value;

        return $this;
    }

    /**
     * Define a custom service to handle the logic. Take a look at the Symfony docs for more details.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function service($value): static
    {
        $this->_usedProperties['service'] = true;
        $this->service = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('type', $config)) {
            $this->_usedProperties['type'] = true;
            $this->type = $config['type'];
            unset($config['type']);
        }

        if (array_key_exists('arguments', $config)) {
            $this->_usedProperties['arguments'] = true;
            $this->arguments = $config['arguments'];
            unset($config['arguments']);
        }

        if (array_key_exists('service', $config)) {
            $this->_usedProperties['service'] = true;
            $this->service = $config['service'];
            unset($config['service']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['arguments'])) {
            $output['arguments'] = $this->arguments;
        }
        if (isset($this->_usedProperties['service'])) {
            $output['service'] = $this->service;
        }

        return $output;
    }

}
