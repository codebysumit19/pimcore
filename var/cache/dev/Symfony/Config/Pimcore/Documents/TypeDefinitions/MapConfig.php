<?php

namespace Symfony\Config\Pimcore\Documents\TypeDefinitions;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MapConfig 
{
    private $class;
    private $translatable;
    private $validTable;
    private $directRoute;
    private $translatableInheritance;
    private $childrenSupported;
    private $onlyPrintableChildrens;
    private $predefinedDocumentTypes;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function class($value): static
    {
        $this->_usedProperties['class'] = true;
        $this->class = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function translatable($value): static
    {
        $this->_usedProperties['translatable'] = true;
        $this->translatable = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function validTable($value): static
    {
        $this->_usedProperties['validTable'] = true;
        $this->validTable = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function directRoute($value): static
    {
        $this->_usedProperties['directRoute'] = true;
        $this->directRoute = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function translatableInheritance($value): static
    {
        $this->_usedProperties['translatableInheritance'] = true;
        $this->translatableInheritance = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function childrenSupported($value): static
    {
        $this->_usedProperties['childrenSupported'] = true;
        $this->childrenSupported = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function onlyPrintableChildrens($value): static
    {
        $this->_usedProperties['onlyPrintableChildrens'] = true;
        $this->onlyPrintableChildrens = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function predefinedDocumentTypes($value): static
    {
        $this->_usedProperties['predefinedDocumentTypes'] = true;
        $this->predefinedDocumentTypes = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('class', $config)) {
            $this->_usedProperties['class'] = true;
            $this->class = $config['class'];
            unset($config['class']);
        }

        if (array_key_exists('translatable', $config)) {
            $this->_usedProperties['translatable'] = true;
            $this->translatable = $config['translatable'];
            unset($config['translatable']);
        }

        if (array_key_exists('valid_table', $config)) {
            $this->_usedProperties['validTable'] = true;
            $this->validTable = $config['valid_table'];
            unset($config['valid_table']);
        }

        if (array_key_exists('direct_route', $config)) {
            $this->_usedProperties['directRoute'] = true;
            $this->directRoute = $config['direct_route'];
            unset($config['direct_route']);
        }

        if (array_key_exists('translatable_inheritance', $config)) {
            $this->_usedProperties['translatableInheritance'] = true;
            $this->translatableInheritance = $config['translatable_inheritance'];
            unset($config['translatable_inheritance']);
        }

        if (array_key_exists('children_supported', $config)) {
            $this->_usedProperties['childrenSupported'] = true;
            $this->childrenSupported = $config['children_supported'];
            unset($config['children_supported']);
        }

        if (array_key_exists('only_printable_childrens', $config)) {
            $this->_usedProperties['onlyPrintableChildrens'] = true;
            $this->onlyPrintableChildrens = $config['only_printable_childrens'];
            unset($config['only_printable_childrens']);
        }

        if (array_key_exists('predefined_document_types', $config)) {
            $this->_usedProperties['predefinedDocumentTypes'] = true;
            $this->predefinedDocumentTypes = $config['predefined_document_types'];
            unset($config['predefined_document_types']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['class'])) {
            $output['class'] = $this->class;
        }
        if (isset($this->_usedProperties['translatable'])) {
            $output['translatable'] = $this->translatable;
        }
        if (isset($this->_usedProperties['validTable'])) {
            $output['valid_table'] = $this->validTable;
        }
        if (isset($this->_usedProperties['directRoute'])) {
            $output['direct_route'] = $this->directRoute;
        }
        if (isset($this->_usedProperties['translatableInheritance'])) {
            $output['translatable_inheritance'] = $this->translatableInheritance;
        }
        if (isset($this->_usedProperties['childrenSupported'])) {
            $output['children_supported'] = $this->childrenSupported;
        }
        if (isset($this->_usedProperties['onlyPrintableChildrens'])) {
            $output['only_printable_childrens'] = $this->onlyPrintableChildrens;
        }
        if (isset($this->_usedProperties['predefinedDocumentTypes'])) {
            $output['predefined_document_types'] = $this->predefinedDocumentTypes;
        }

        return $output;
    }

}
