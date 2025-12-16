<?php

namespace Symfony\Config\Pimcore\WorkflowsConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TransitionsConfig'.\DIRECTORY_SEPARATOR.'OptionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TransitionsConfig 
{
    private $name;
    private $guard;
    private $from;
    private $to;
    private $options;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): static
    {
        $this->_usedProperties['name'] = true;
        $this->name = $value;

        return $this;
    }

    /**
     * An expression to block the transition
     * @example is_fully_authenticated() and is_granted('ROLE_JOURNALIST') and subject.getTitle() == 'My first article'
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function guard($value): static
    {
        $this->_usedProperties['guard'] = true;
        $this->guard = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|string $value
     *
     * @return $this
     */
    public function from(ParamConfigurator|string|array $value): static
    {
        $this->_usedProperties['from'] = true;
        $this->from = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|string $value
     *
     * @return $this
     */
    public function to(ParamConfigurator|string|array $value): static
    {
        $this->_usedProperties['to'] = true;
        $this->to = $value;

        return $this;
    }

    public function options(array $value = []): \Symfony\Config\Pimcore\WorkflowsConfig\TransitionsConfig\OptionsConfig
    {
        if (null === $this->options) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\Pimcore\WorkflowsConfig\TransitionsConfig\OptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "options()" has already been initialized. You cannot pass values the second time you call options().');
        }

        return $this->options;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('name', $config)) {
            $this->_usedProperties['name'] = true;
            $this->name = $config['name'];
            unset($config['name']);
        }

        if (array_key_exists('guard', $config)) {
            $this->_usedProperties['guard'] = true;
            $this->guard = $config['guard'];
            unset($config['guard']);
        }

        if (array_key_exists('from', $config)) {
            $this->_usedProperties['from'] = true;
            $this->from = $config['from'];
            unset($config['from']);
        }

        if (array_key_exists('to', $config)) {
            $this->_usedProperties['to'] = true;
            $this->to = $config['to'];
            unset($config['to']);
        }

        if (array_key_exists('options', $config)) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\Pimcore\WorkflowsConfig\TransitionsConfig\OptionsConfig($config['options']);
            unset($config['options']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['guard'])) {
            $output['guard'] = $this->guard;
        }
        if (isset($this->_usedProperties['from'])) {
            $output['from'] = $this->from;
        }
        if (isset($this->_usedProperties['to'])) {
            $output['to'] = $this->to;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options->toArray();
        }

        return $output;
    }

}
