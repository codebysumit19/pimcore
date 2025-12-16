<?php

namespace Symfony\Config\Pimcore\Perspectives\DefinitionsConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ElementTreeConfig 
{
    private $type;
    private $position;
    private $name;
    private $expanded;
    private $hidden;
    private $sort;
    private $id;
    private $treeContextMenu;
    private $_usedProperties = [];

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
    public function position($value): static
    {
        $this->_usedProperties['position'] = true;
        $this->position = $value;

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
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function expanded($value): static
    {
        $this->_usedProperties['expanded'] = true;
        $this->expanded = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hidden($value): static
    {
        $this->_usedProperties['hidden'] = true;
        $this->hidden = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function sort($value): static
    {
        $this->_usedProperties['sort'] = true;
        $this->sort = $value;

        return $this;
    }

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
     *
     * @return $this
     */
    public function treeContextMenu(mixed $value): static
    {
        $this->_usedProperties['treeContextMenu'] = true;
        $this->treeContextMenu = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('type', $config)) {
            $this->_usedProperties['type'] = true;
            $this->type = $config['type'];
            unset($config['type']);
        }

        if (array_key_exists('position', $config)) {
            $this->_usedProperties['position'] = true;
            $this->position = $config['position'];
            unset($config['position']);
        }

        if (array_key_exists('name', $config)) {
            $this->_usedProperties['name'] = true;
            $this->name = $config['name'];
            unset($config['name']);
        }

        if (array_key_exists('expanded', $config)) {
            $this->_usedProperties['expanded'] = true;
            $this->expanded = $config['expanded'];
            unset($config['expanded']);
        }

        if (array_key_exists('hidden', $config)) {
            $this->_usedProperties['hidden'] = true;
            $this->hidden = $config['hidden'];
            unset($config['hidden']);
        }

        if (array_key_exists('sort', $config)) {
            $this->_usedProperties['sort'] = true;
            $this->sort = $config['sort'];
            unset($config['sort']);
        }

        if (array_key_exists('id', $config)) {
            $this->_usedProperties['id'] = true;
            $this->id = $config['id'];
            unset($config['id']);
        }

        if (array_key_exists('treeContextMenu', $config)) {
            $this->_usedProperties['treeContextMenu'] = true;
            $this->treeContextMenu = $config['treeContextMenu'];
            unset($config['treeContextMenu']);
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
        if (isset($this->_usedProperties['position'])) {
            $output['position'] = $this->position;
        }
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['expanded'])) {
            $output['expanded'] = $this->expanded;
        }
        if (isset($this->_usedProperties['hidden'])) {
            $output['hidden'] = $this->hidden;
        }
        if (isset($this->_usedProperties['sort'])) {
            $output['sort'] = $this->sort;
        }
        if (isset($this->_usedProperties['id'])) {
            $output['id'] = $this->id;
        }
        if (isset($this->_usedProperties['treeContextMenu'])) {
            $output['treeContextMenu'] = $this->treeContextMenu;
        }

        return $output;
    }

}
