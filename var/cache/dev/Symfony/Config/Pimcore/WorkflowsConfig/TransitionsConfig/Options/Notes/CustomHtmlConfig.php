<?php

namespace Symfony\Config\Pimcore\WorkflowsConfig\TransitionsConfig\Options\Notes;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CustomHtmlConfig 
{
    private $position;
    private $service;
    private $_usedProperties = [];

    /**
     * Set position of custom HTML inside modal (top, center, bottom).
     * @default 'top'
     * @param ParamConfigurator|'top'|'center'|'bottom' $value
     * @return $this
     */
    public function position($value): static
    {
        $this->_usedProperties['position'] = true;
        $this->position = $value;

        return $this;
    }

    /**
     * Define a custom service for rendering custom HTML within the note modal.
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
        if (array_key_exists('position', $config)) {
            $this->_usedProperties['position'] = true;
            $this->position = $config['position'];
            unset($config['position']);
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
        if (isset($this->_usedProperties['position'])) {
            $output['position'] = $this->position;
        }
        if (isset($this->_usedProperties['service'])) {
            $output['service'] = $this->service;
        }

        return $output;
    }

}
