<?php

namespace Symfony\Config\Pimcore\Documents;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ErrorPagesConfig 
{
    private $default;
    private $localized;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function default($value): static
    {
        $this->_usedProperties['default'] = true;
        $this->default = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function localized(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['localized'] = true;
        $this->localized = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('default', $config)) {
            $this->_usedProperties['default'] = true;
            $this->default = $config['default'];
            unset($config['default']);
        }

        if (array_key_exists('localized', $config)) {
            $this->_usedProperties['localized'] = true;
            $this->localized = $config['localized'];
            unset($config['localized']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['default'])) {
            $output['default'] = $this->default;
        }
        if (isset($this->_usedProperties['localized'])) {
            $output['localized'] = $this->localized;
        }

        return $output;
    }

}
