<?php

namespace Symfony\Config\Pimcore\Documents\DocTypes;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DefinitionsConfig 
{
    private $name;
    private $group;
    private $module;
    private $controller;
    private $template;
    private $type;
    private $priority;
    private $creationDate;
    private $modificationDate;
    private $staticGeneratorEnabled;
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
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function group($value): static
    {
        $this->_usedProperties['group'] = true;
        $this->group = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function module($value): static
    {
        $this->_usedProperties['module'] = true;
        $this->module = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function controller($value): static
    {
        $this->_usedProperties['controller'] = true;
        $this->controller = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function template($value): static
    {
        $this->_usedProperties['template'] = true;
        $this->template = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function priority($value): static
    {
        $this->_usedProperties['priority'] = true;
        $this->priority = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function creationDate($value): static
    {
        $this->_usedProperties['creationDate'] = true;
        $this->creationDate = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function modificationDate($value): static
    {
        $this->_usedProperties['modificationDate'] = true;
        $this->modificationDate = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function staticGeneratorEnabled($value): static
    {
        $this->_usedProperties['staticGeneratorEnabled'] = true;
        $this->staticGeneratorEnabled = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('name', $config)) {
            $this->_usedProperties['name'] = true;
            $this->name = $config['name'];
            unset($config['name']);
        }

        if (array_key_exists('group', $config)) {
            $this->_usedProperties['group'] = true;
            $this->group = $config['group'];
            unset($config['group']);
        }

        if (array_key_exists('module', $config)) {
            $this->_usedProperties['module'] = true;
            $this->module = $config['module'];
            unset($config['module']);
        }

        if (array_key_exists('controller', $config)) {
            $this->_usedProperties['controller'] = true;
            $this->controller = $config['controller'];
            unset($config['controller']);
        }

        if (array_key_exists('template', $config)) {
            $this->_usedProperties['template'] = true;
            $this->template = $config['template'];
            unset($config['template']);
        }

        if (array_key_exists('type', $config)) {
            $this->_usedProperties['type'] = true;
            $this->type = $config['type'];
            unset($config['type']);
        }

        if (array_key_exists('priority', $config)) {
            $this->_usedProperties['priority'] = true;
            $this->priority = $config['priority'];
            unset($config['priority']);
        }

        if (array_key_exists('creationDate', $config)) {
            $this->_usedProperties['creationDate'] = true;
            $this->creationDate = $config['creationDate'];
            unset($config['creationDate']);
        }

        if (array_key_exists('modificationDate', $config)) {
            $this->_usedProperties['modificationDate'] = true;
            $this->modificationDate = $config['modificationDate'];
            unset($config['modificationDate']);
        }

        if (array_key_exists('staticGeneratorEnabled', $config)) {
            $this->_usedProperties['staticGeneratorEnabled'] = true;
            $this->staticGeneratorEnabled = $config['staticGeneratorEnabled'];
            unset($config['staticGeneratorEnabled']);
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
        if (isset($this->_usedProperties['group'])) {
            $output['group'] = $this->group;
        }
        if (isset($this->_usedProperties['module'])) {
            $output['module'] = $this->module;
        }
        if (isset($this->_usedProperties['controller'])) {
            $output['controller'] = $this->controller;
        }
        if (isset($this->_usedProperties['template'])) {
            $output['template'] = $this->template;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['priority'])) {
            $output['priority'] = $this->priority;
        }
        if (isset($this->_usedProperties['creationDate'])) {
            $output['creationDate'] = $this->creationDate;
        }
        if (isset($this->_usedProperties['modificationDate'])) {
            $output['modificationDate'] = $this->modificationDate;
        }
        if (isset($this->_usedProperties['staticGeneratorEnabled'])) {
            $output['staticGeneratorEnabled'] = $this->staticGeneratorEnabled;
        }

        return $output;
    }

}
