<?php

namespace Symfony\Config\Pimcore\Objects\CustomLayouts;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DefinitionsConfig 
{
    private $id;
    private $name;
    private $description;
    private $creationDate;
    private $modificationDate;
    private $userOwner;
    private $userModification;
    private $classId;
    private $default;
    private $layoutDefinitions;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function id($value): static
    {
        $this->_usedProperties['id'] = true;
        $this->id = $value;

        return $this;
    }

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
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function userOwner($value): static
    {
        $this->_usedProperties['userOwner'] = true;
        $this->userOwner = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function userModification($value): static
    {
        $this->_usedProperties['userModification'] = true;
        $this->userModification = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function classId($value): static
    {
        $this->_usedProperties['classId'] = true;
        $this->classId = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function default($value): static
    {
        $this->_usedProperties['default'] = true;
        $this->default = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function layoutDefinitions(mixed $value): static
    {
        $this->_usedProperties['layoutDefinitions'] = true;
        $this->layoutDefinitions = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('id', $config)) {
            $this->_usedProperties['id'] = true;
            $this->id = $config['id'];
            unset($config['id']);
        }

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

        if (array_key_exists('userOwner', $config)) {
            $this->_usedProperties['userOwner'] = true;
            $this->userOwner = $config['userOwner'];
            unset($config['userOwner']);
        }

        if (array_key_exists('userModification', $config)) {
            $this->_usedProperties['userModification'] = true;
            $this->userModification = $config['userModification'];
            unset($config['userModification']);
        }

        if (array_key_exists('classId', $config)) {
            $this->_usedProperties['classId'] = true;
            $this->classId = $config['classId'];
            unset($config['classId']);
        }

        if (array_key_exists('default', $config)) {
            $this->_usedProperties['default'] = true;
            $this->default = $config['default'];
            unset($config['default']);
        }

        if (array_key_exists('layoutDefinitions', $config)) {
            $this->_usedProperties['layoutDefinitions'] = true;
            $this->layoutDefinitions = $config['layoutDefinitions'];
            unset($config['layoutDefinitions']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['id'])) {
            $output['id'] = $this->id;
        }
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['description'])) {
            $output['description'] = $this->description;
        }
        if (isset($this->_usedProperties['creationDate'])) {
            $output['creationDate'] = $this->creationDate;
        }
        if (isset($this->_usedProperties['modificationDate'])) {
            $output['modificationDate'] = $this->modificationDate;
        }
        if (isset($this->_usedProperties['userOwner'])) {
            $output['userOwner'] = $this->userOwner;
        }
        if (isset($this->_usedProperties['userModification'])) {
            $output['userModification'] = $this->userModification;
        }
        if (isset($this->_usedProperties['classId'])) {
            $output['classId'] = $this->classId;
        }
        if (isset($this->_usedProperties['default'])) {
            $output['default'] = $this->default;
        }
        if (isset($this->_usedProperties['layoutDefinitions'])) {
            $output['layoutDefinitions'] = $this->layoutDefinitions;
        }

        return $output;
    }

}
