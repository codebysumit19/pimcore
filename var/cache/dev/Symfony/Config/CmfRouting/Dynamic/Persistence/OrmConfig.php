<?php

namespace Symfony\Config\CmfRouting\Dynamic\Persistence;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OrmConfig 
{
    private $enabled;
    private $managerName;
    private $routeClass;
    private $_usedProperties = [];

    /**
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
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function managerName($value): static
    {
        $this->_usedProperties['managerName'] = true;
        $this->managerName = $value;

        return $this;
    }

    /**
     * @default 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Doctrine\\Orm\\Route'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function routeClass($value): static
    {
        $this->_usedProperties['routeClass'] = true;
        $this->routeClass = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('manager_name', $config)) {
            $this->_usedProperties['managerName'] = true;
            $this->managerName = $config['manager_name'];
            unset($config['manager_name']);
        }

        if (array_key_exists('route_class', $config)) {
            $this->_usedProperties['routeClass'] = true;
            $this->routeClass = $config['route_class'];
            unset($config['route_class']);
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
        if (isset($this->_usedProperties['managerName'])) {
            $output['manager_name'] = $this->managerName;
        }
        if (isset($this->_usedProperties['routeClass'])) {
            $output['route_class'] = $this->routeClass;
        }

        return $output;
    }

}
