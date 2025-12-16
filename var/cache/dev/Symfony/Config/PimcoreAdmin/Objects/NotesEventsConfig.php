<?php

namespace Symfony\Config\PimcoreAdmin\Objects;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class NotesEventsConfig 
{
    private $types;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function types(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['types'] = true;
        $this->types = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('types', $config)) {
            $this->_usedProperties['types'] = true;
            $this->types = $config['types'];
            unset($config['types']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['types'])) {
            $output['types'] = $this->types;
        }

        return $output;
    }

}
