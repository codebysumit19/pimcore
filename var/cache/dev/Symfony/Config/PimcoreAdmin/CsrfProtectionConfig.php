<?php

namespace Symfony\Config\PimcoreAdmin;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CsrfProtectionConfig 
{
    private $excludedRoutes;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function excludedRoutes(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['excludedRoutes'] = true;
        $this->excludedRoutes = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('excluded_routes', $config)) {
            $this->_usedProperties['excludedRoutes'] = true;
            $this->excludedRoutes = $config['excluded_routes'];
            unset($config['excluded_routes']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['excludedRoutes'])) {
            $output['excluded_routes'] = $this->excludedRoutes;
        }

        return $output;
    }

}
