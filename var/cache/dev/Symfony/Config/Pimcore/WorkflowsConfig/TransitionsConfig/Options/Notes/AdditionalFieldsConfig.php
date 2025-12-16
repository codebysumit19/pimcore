<?php

namespace Symfony\Config\Pimcore\WorkflowsConfig\TransitionsConfig\Options\Notes;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AdditionalFieldsConfig 
{
    private $name;
    private $fieldType;
    private $title;
    private $required;
    private $setterFn;
    private $fieldTypeSettings;
    private $_usedProperties = [];

    /**
     * The technical name used in the input form.
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
     * The data component name/field type.
     * @default null
     * @param ParamConfigurator|'input'|'numeric'|'textarea'|'select'|'datetime'|'date'|'user'|'checkbox' $value
     * @return $this
     */
    public function fieldType($value): static
    {
        $this->_usedProperties['fieldType'] = true;
        $this->fieldType = $value;

        return $this;
    }

    /**
     * The label used by the field
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function title($value): static
    {
        $this->_usedProperties['title'] = true;
        $this->title = $value;

        return $this;
    }

    /**
     * Whether or not the field is required.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function required($value): static
    {
        $this->_usedProperties['required'] = true;
        $this->required = $value;

        return $this;
    }

    /**
     * Optional setter function (available in the element, for example in the updated object), if not specified, data will be added to notes. The Workflow manager will call the function with the whole field data.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function setterFn($value): static
    {
        $this->_usedProperties['setterFn'] = true;
        $this->setterFn = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function fieldTypeSettings(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['fieldTypeSettings'] = true;
        $this->fieldTypeSettings = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('name', $config)) {
            $this->_usedProperties['name'] = true;
            $this->name = $config['name'];
            unset($config['name']);
        }

        if (array_key_exists('fieldType', $config)) {
            $this->_usedProperties['fieldType'] = true;
            $this->fieldType = $config['fieldType'];
            unset($config['fieldType']);
        }

        if (array_key_exists('title', $config)) {
            $this->_usedProperties['title'] = true;
            $this->title = $config['title'];
            unset($config['title']);
        }

        if (array_key_exists('required', $config)) {
            $this->_usedProperties['required'] = true;
            $this->required = $config['required'];
            unset($config['required']);
        }

        if (array_key_exists('setterFn', $config)) {
            $this->_usedProperties['setterFn'] = true;
            $this->setterFn = $config['setterFn'];
            unset($config['setterFn']);
        }

        if (array_key_exists('fieldTypeSettings', $config)) {
            $this->_usedProperties['fieldTypeSettings'] = true;
            $this->fieldTypeSettings = $config['fieldTypeSettings'];
            unset($config['fieldTypeSettings']);
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
        if (isset($this->_usedProperties['fieldType'])) {
            $output['fieldType'] = $this->fieldType;
        }
        if (isset($this->_usedProperties['title'])) {
            $output['title'] = $this->title;
        }
        if (isset($this->_usedProperties['required'])) {
            $output['required'] = $this->required;
        }
        if (isset($this->_usedProperties['setterFn'])) {
            $output['setterFn'] = $this->setterFn;
        }
        if (isset($this->_usedProperties['fieldTypeSettings'])) {
            $output['fieldTypeSettings'] = $this->fieldTypeSettings;
        }

        return $output;
    }

}
