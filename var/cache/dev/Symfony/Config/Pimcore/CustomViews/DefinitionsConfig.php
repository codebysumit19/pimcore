<?php

namespace Symfony\Config\Pimcore\CustomViews;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DefinitionsConfig'.\DIRECTORY_SEPARATOR.'JoinsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DefinitionsConfig 
{
    private $id;
    private $treetype;
    private $name;
    private $condition;
    private $icon;
    private $rootfolder;
    private $showroot;
    private $classes;
    private $position;
    private $sort;
    private $expanded;
    private $having;
    private $where;
    private $treeContextMenu;
    private $joins;
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
    public function treetype($value): static
    {
        $this->_usedProperties['treetype'] = true;
        $this->treetype = $value;

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
    public function condition($value): static
    {
        $this->_usedProperties['condition'] = true;
        $this->condition = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function icon($value): static
    {
        $this->_usedProperties['icon'] = true;
        $this->icon = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function rootfolder($value): static
    {
        $this->_usedProperties['rootfolder'] = true;
        $this->rootfolder = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function showroot($value): static
    {
        $this->_usedProperties['showroot'] = true;
        $this->showroot = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function classes(mixed $value): static
    {
        $this->_usedProperties['classes'] = true;
        $this->classes = $value;

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
    public function sort($value): static
    {
        $this->_usedProperties['sort'] = true;
        $this->sort = $value;

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
    public function having($value): static
    {
        $this->_usedProperties['having'] = true;
        $this->having = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function where($value): static
    {
        $this->_usedProperties['where'] = true;
        $this->where = $value;

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

    public function joins(array $value = []): \Symfony\Config\Pimcore\CustomViews\DefinitionsConfig\JoinsConfig
    {
        $this->_usedProperties['joins'] = true;

        return $this->joins[] = new \Symfony\Config\Pimcore\CustomViews\DefinitionsConfig\JoinsConfig($value);
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('id', $config)) {
            $this->_usedProperties['id'] = true;
            $this->id = $config['id'];
            unset($config['id']);
        }

        if (array_key_exists('treetype', $config)) {
            $this->_usedProperties['treetype'] = true;
            $this->treetype = $config['treetype'];
            unset($config['treetype']);
        }

        if (array_key_exists('name', $config)) {
            $this->_usedProperties['name'] = true;
            $this->name = $config['name'];
            unset($config['name']);
        }

        if (array_key_exists('condition', $config)) {
            $this->_usedProperties['condition'] = true;
            $this->condition = $config['condition'];
            unset($config['condition']);
        }

        if (array_key_exists('icon', $config)) {
            $this->_usedProperties['icon'] = true;
            $this->icon = $config['icon'];
            unset($config['icon']);
        }

        if (array_key_exists('rootfolder', $config)) {
            $this->_usedProperties['rootfolder'] = true;
            $this->rootfolder = $config['rootfolder'];
            unset($config['rootfolder']);
        }

        if (array_key_exists('showroot', $config)) {
            $this->_usedProperties['showroot'] = true;
            $this->showroot = $config['showroot'];
            unset($config['showroot']);
        }

        if (array_key_exists('classes', $config)) {
            $this->_usedProperties['classes'] = true;
            $this->classes = $config['classes'];
            unset($config['classes']);
        }

        if (array_key_exists('position', $config)) {
            $this->_usedProperties['position'] = true;
            $this->position = $config['position'];
            unset($config['position']);
        }

        if (array_key_exists('sort', $config)) {
            $this->_usedProperties['sort'] = true;
            $this->sort = $config['sort'];
            unset($config['sort']);
        }

        if (array_key_exists('expanded', $config)) {
            $this->_usedProperties['expanded'] = true;
            $this->expanded = $config['expanded'];
            unset($config['expanded']);
        }

        if (array_key_exists('having', $config)) {
            $this->_usedProperties['having'] = true;
            $this->having = $config['having'];
            unset($config['having']);
        }

        if (array_key_exists('where', $config)) {
            $this->_usedProperties['where'] = true;
            $this->where = $config['where'];
            unset($config['where']);
        }

        if (array_key_exists('treeContextMenu', $config)) {
            $this->_usedProperties['treeContextMenu'] = true;
            $this->treeContextMenu = $config['treeContextMenu'];
            unset($config['treeContextMenu']);
        }

        if (array_key_exists('joins', $config)) {
            $this->_usedProperties['joins'] = true;
            $this->joins = array_map(fn ($v) => new \Symfony\Config\Pimcore\CustomViews\DefinitionsConfig\JoinsConfig($v), $config['joins']);
            unset($config['joins']);
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
        if (isset($this->_usedProperties['treetype'])) {
            $output['treetype'] = $this->treetype;
        }
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['condition'])) {
            $output['condition'] = $this->condition;
        }
        if (isset($this->_usedProperties['icon'])) {
            $output['icon'] = $this->icon;
        }
        if (isset($this->_usedProperties['rootfolder'])) {
            $output['rootfolder'] = $this->rootfolder;
        }
        if (isset($this->_usedProperties['showroot'])) {
            $output['showroot'] = $this->showroot;
        }
        if (isset($this->_usedProperties['classes'])) {
            $output['classes'] = $this->classes;
        }
        if (isset($this->_usedProperties['position'])) {
            $output['position'] = $this->position;
        }
        if (isset($this->_usedProperties['sort'])) {
            $output['sort'] = $this->sort;
        }
        if (isset($this->_usedProperties['expanded'])) {
            $output['expanded'] = $this->expanded;
        }
        if (isset($this->_usedProperties['having'])) {
            $output['having'] = $this->having;
        }
        if (isset($this->_usedProperties['where'])) {
            $output['where'] = $this->where;
        }
        if (isset($this->_usedProperties['treeContextMenu'])) {
            $output['treeContextMenu'] = $this->treeContextMenu;
        }
        if (isset($this->_usedProperties['joins'])) {
            $output['joins'] = array_map(fn ($v) => $v->toArray(), $this->joins);
        }

        return $output;
    }

}
