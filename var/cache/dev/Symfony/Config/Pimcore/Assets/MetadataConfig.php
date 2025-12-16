<?php

namespace Symfony\Config\Pimcore\Assets;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'PredefinedConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'ClassDefinitionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MetadataConfig 
{
    private $alt;
    private $copyright;
    private $title;
    private $predefined;
    private $classDefinitions;
    private $_usedProperties = [];

    /**
     * Set to replace the default metadata used for auto alt functionality in frontend
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
     * Set to replace the default metadata used for copyright in frontend
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function copyright($value): static
    {
        $this->_usedProperties['copyright'] = true;
        $this->copyright = $value;

        return $this;
    }

    /**
     * Set to replace the default metadata used for title in frontend
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
     * @default {"definitions":[]}
     */
    public function predefined(array $value = []): \Symfony\Config\Pimcore\Assets\Metadata\PredefinedConfig
    {
        if (null === $this->predefined) {
            $this->_usedProperties['predefined'] = true;
            $this->predefined = new \Symfony\Config\Pimcore\Assets\Metadata\PredefinedConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "predefined()" has already been initialized. You cannot pass values the second time you call predefined().');
        }

        return $this->predefined;
    }

    public function classDefinitions(array $value = []): \Symfony\Config\Pimcore\Assets\Metadata\ClassDefinitionsConfig
    {
        if (null === $this->classDefinitions) {
            $this->_usedProperties['classDefinitions'] = true;
            $this->classDefinitions = new \Symfony\Config\Pimcore\Assets\Metadata\ClassDefinitionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "classDefinitions()" has already been initialized. You cannot pass values the second time you call classDefinitions().');
        }

        return $this->classDefinitions;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('alt', $config)) {
            $this->_usedProperties['alt'] = true;
            $this->alt = $config['alt'];
            unset($config['alt']);
        }

        if (array_key_exists('copyright', $config)) {
            $this->_usedProperties['copyright'] = true;
            $this->copyright = $config['copyright'];
            unset($config['copyright']);
        }

        if (array_key_exists('title', $config)) {
            $this->_usedProperties['title'] = true;
            $this->title = $config['title'];
            unset($config['title']);
        }

        if (array_key_exists('predefined', $config)) {
            $this->_usedProperties['predefined'] = true;
            $this->predefined = new \Symfony\Config\Pimcore\Assets\Metadata\PredefinedConfig($config['predefined']);
            unset($config['predefined']);
        }

        if (array_key_exists('class_definitions', $config)) {
            $this->_usedProperties['classDefinitions'] = true;
            $this->classDefinitions = new \Symfony\Config\Pimcore\Assets\Metadata\ClassDefinitionsConfig($config['class_definitions']);
            unset($config['class_definitions']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['alt'])) {
            $output['alt'] = $this->alt;
        }
        if (isset($this->_usedProperties['copyright'])) {
            $output['copyright'] = $this->copyright;
        }
        if (isset($this->_usedProperties['title'])) {
            $output['title'] = $this->title;
        }
        if (isset($this->_usedProperties['predefined'])) {
            $output['predefined'] = $this->predefined->toArray();
        }
        if (isset($this->_usedProperties['classDefinitions'])) {
            $output['class_definitions'] = $this->classDefinitions->toArray();
        }

        return $output;
    }

}
