<?php

namespace Symfony\Config\PimcoreAdmin\GdprDataExtractor\DataObjects;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ClassesConfig 
{
    private $include;
    private $allowDelete;
    private $includedRelations;
    private $_usedProperties = [];

    /**
     * Set if class should be considered in export.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function include($value): static
    {
        $this->_usedProperties['include'] = true;
        $this->include = $value;

        return $this;
    }

    /**
     * Allow delete of objects directly in preview grid.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowDelete($value): static
    {
        $this->_usedProperties['allowDelete'] = true;
        $this->allowDelete = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function includedRelations(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['includedRelations'] = true;
        $this->includedRelations = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('include', $config)) {
            $this->_usedProperties['include'] = true;
            $this->include = $config['include'];
            unset($config['include']);
        }

        if (array_key_exists('allowDelete', $config)) {
            $this->_usedProperties['allowDelete'] = true;
            $this->allowDelete = $config['allowDelete'];
            unset($config['allowDelete']);
        }

        if (array_key_exists('includedRelations', $config)) {
            $this->_usedProperties['includedRelations'] = true;
            $this->includedRelations = $config['includedRelations'];
            unset($config['includedRelations']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['include'])) {
            $output['include'] = $this->include;
        }
        if (isset($this->_usedProperties['allowDelete'])) {
            $output['allowDelete'] = $this->allowDelete;
        }
        if (isset($this->_usedProperties['includedRelations'])) {
            $output['includedRelations'] = $this->includedRelations;
        }

        return $output;
    }

}
