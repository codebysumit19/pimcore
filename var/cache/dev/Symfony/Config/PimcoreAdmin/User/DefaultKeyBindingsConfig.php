<?php

namespace Symfony\Config\PimcoreAdmin\User;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DefaultKeyBindingsConfig 
{
    private $key;
    private $action;
    private $alt;
    private $ctrl;
    private $shift;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function key($value): static
    {
        $this->_usedProperties['key'] = true;
        $this->key = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function action($value): static
    {
        $this->_usedProperties['action'] = true;
        $this->action = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function alt($value): static
    {
        $this->_usedProperties['alt'] = true;
        $this->alt = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function ctrl($value): static
    {
        $this->_usedProperties['ctrl'] = true;
        $this->ctrl = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function shift($value): static
    {
        $this->_usedProperties['shift'] = true;
        $this->shift = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('key', $config)) {
            $this->_usedProperties['key'] = true;
            $this->key = $config['key'];
            unset($config['key']);
        }

        if (array_key_exists('action', $config)) {
            $this->_usedProperties['action'] = true;
            $this->action = $config['action'];
            unset($config['action']);
        }

        if (array_key_exists('alt', $config)) {
            $this->_usedProperties['alt'] = true;
            $this->alt = $config['alt'];
            unset($config['alt']);
        }

        if (array_key_exists('ctrl', $config)) {
            $this->_usedProperties['ctrl'] = true;
            $this->ctrl = $config['ctrl'];
            unset($config['ctrl']);
        }

        if (array_key_exists('shift', $config)) {
            $this->_usedProperties['shift'] = true;
            $this->shift = $config['shift'];
            unset($config['shift']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['key'])) {
            $output['key'] = $this->key;
        }
        if (isset($this->_usedProperties['action'])) {
            $output['action'] = $this->action;
        }
        if (isset($this->_usedProperties['alt'])) {
            $output['alt'] = $this->alt;
        }
        if (isset($this->_usedProperties['ctrl'])) {
            $output['ctrl'] = $this->ctrl;
        }
        if (isset($this->_usedProperties['shift'])) {
            $output['shift'] = $this->shift;
        }

        return $output;
    }

}
