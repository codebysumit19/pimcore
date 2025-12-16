<?php

namespace Symfony\Config\Pimcore\Documents;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StaticPageRouterConfig 
{
    private $enabled;
    private $routePattern;
    private $_usedProperties = [];

    /**
     * Enable Static Page router for document when using remote storage for generated pages
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * Optionally define route patterns to lookup static pages. Regular Expressions like: /^\/en\/Magazine/
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function routePattern($value): static
    {
        $this->_usedProperties['routePattern'] = true;
        $this->routePattern = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('route_pattern', $config)) {
            $this->_usedProperties['routePattern'] = true;
            $this->routePattern = $config['route_pattern'];
            unset($config['route_pattern']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['routePattern'])) {
            $output['route_pattern'] = $this->routePattern;
        }

        return $output;
    }

}
