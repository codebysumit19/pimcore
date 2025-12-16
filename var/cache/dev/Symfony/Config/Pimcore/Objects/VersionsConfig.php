<?php

namespace Symfony\Config\Pimcore\Objects;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class VersionsConfig 
{
    private $days;
    private $steps;
    private $disableEvents;
    private $disableStackTrace;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function days($value): static
    {
        $this->_usedProperties['days'] = true;
        $this->days = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function steps($value): static
    {
        $this->_usedProperties['steps'] = true;
        $this->steps = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function disableEvents($value): static
    {
        $this->_usedProperties['disableEvents'] = true;
        $this->disableEvents = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function disableStackTrace($value): static
    {
        $this->_usedProperties['disableStackTrace'] = true;
        $this->disableStackTrace = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('days', $config)) {
            $this->_usedProperties['days'] = true;
            $this->days = $config['days'];
            unset($config['days']);
        }

        if (array_key_exists('steps', $config)) {
            $this->_usedProperties['steps'] = true;
            $this->steps = $config['steps'];
            unset($config['steps']);
        }

        if (array_key_exists('disable_events', $config)) {
            $this->_usedProperties['disableEvents'] = true;
            $this->disableEvents = $config['disable_events'];
            unset($config['disable_events']);
        }

        if (array_key_exists('disable_stack_trace', $config)) {
            $this->_usedProperties['disableStackTrace'] = true;
            $this->disableStackTrace = $config['disable_stack_trace'];
            unset($config['disable_stack_trace']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['days'])) {
            $output['days'] = $this->days;
        }
        if (isset($this->_usedProperties['steps'])) {
            $output['steps'] = $this->steps;
        }
        if (isset($this->_usedProperties['disableEvents'])) {
            $output['disable_events'] = $this->disableEvents;
        }
        if (isset($this->_usedProperties['disableStackTrace'])) {
            $output['disable_stack_trace'] = $this->disableStackTrace;
        }

        return $output;
    }

}
