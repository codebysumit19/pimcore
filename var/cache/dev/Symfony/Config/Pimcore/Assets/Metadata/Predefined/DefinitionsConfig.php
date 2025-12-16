<?php

namespace Symfony\Config\Pimcore\Assets\Metadata\Predefined;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DefinitionsConfig 
{
    private $name;
    private $description;
    private $group;
    private $language;
    private $type;
    private $data;
    private $targetSubtype;
    private $config;
    private $inheritable;
    private $creationDate;
    private $modificationDate;
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
    public function description($value): static
    {
        $this->_usedProperties['description'] = true;
        $this->description = $value;

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
    public function language($value): static
    {
        $this->_usedProperties['language'] = true;
        $this->language = $value;

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
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function data($value): static
    {
        $this->_usedProperties['data'] = true;
        $this->data = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function targetSubtype($value): static
    {
        $this->_usedProperties['targetSubtype'] = true;
        $this->targetSubtype = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function config($value): static
    {
        $this->_usedProperties['config'] = true;
        $this->config = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function inheritable($value): static
    {
        $this->_usedProperties['inheritable'] = true;
        $this->inheritable = $value;

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

    public function __construct(array $config = [])
    {
        if (array_key_exists('name', $config)) {
            $this->_usedProperties['name'] = true;
            $this->name = $config['name'];
            unset($config['name']);
        }

        if (array_key_exists('description', $config)) {
            $this->_usedProperties['description'] = true;
            $this->description = $config['description'];
            unset($config['description']);
        }

        if (array_key_exists('group', $config)) {
            $this->_usedProperties['group'] = true;
            $this->group = $config['group'];
            unset($config['group']);
        }

        if (array_key_exists('language', $config)) {
            $this->_usedProperties['language'] = true;
            $this->language = $config['language'];
            unset($config['language']);
        }

        if (array_key_exists('type', $config)) {
            $this->_usedProperties['type'] = true;
            $this->type = $config['type'];
            unset($config['type']);
        }

        if (array_key_exists('data', $config)) {
            $this->_usedProperties['data'] = true;
            $this->data = $config['data'];
            unset($config['data']);
        }

        if (array_key_exists('targetSubtype', $config)) {
            $this->_usedProperties['targetSubtype'] = true;
            $this->targetSubtype = $config['targetSubtype'];
            unset($config['targetSubtype']);
        }

        if (array_key_exists('config', $config)) {
            $this->_usedProperties['config'] = true;
            $this->config = $config['config'];
            unset($config['config']);
        }

        if (array_key_exists('inheritable', $config)) {
            $this->_usedProperties['inheritable'] = true;
            $this->inheritable = $config['inheritable'];
            unset($config['inheritable']);
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
        if (isset($this->_usedProperties['description'])) {
            $output['description'] = $this->description;
        }
        if (isset($this->_usedProperties['group'])) {
            $output['group'] = $this->group;
        }
        if (isset($this->_usedProperties['language'])) {
            $output['language'] = $this->language;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['data'])) {
            $output['data'] = $this->data;
        }
        if (isset($this->_usedProperties['targetSubtype'])) {
            $output['targetSubtype'] = $this->targetSubtype;
        }
        if (isset($this->_usedProperties['config'])) {
            $output['config'] = $this->config;
        }
        if (isset($this->_usedProperties['inheritable'])) {
            $output['inheritable'] = $this->inheritable;
        }
        if (isset($this->_usedProperties['creationDate'])) {
            $output['creationDate'] = $this->creationDate;
        }
        if (isset($this->_usedProperties['modificationDate'])) {
            $output['modificationDate'] = $this->modificationDate;
        }

        return $output;
    }

}
