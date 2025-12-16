<?php

namespace Symfony\Config\CmfRouting;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ChainConfig 
{
    private $routersById;
    private $replaceSymfonyRouter;
    private $_usedProperties = [];

    /**
     * @return $this
     */
    public function routersById(string $id, mixed $value): static
    {
        $this->_usedProperties['routersById'] = true;
        $this->routersById[$id] = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function replaceSymfonyRouter($value): static
    {
        $this->_usedProperties['replaceSymfonyRouter'] = true;
        $this->replaceSymfonyRouter = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('routers_by_id', $config)) {
            $this->_usedProperties['routersById'] = true;
            $this->routersById = $config['routers_by_id'];
            unset($config['routers_by_id']);
        }

        if (array_key_exists('replace_symfony_router', $config)) {
            $this->_usedProperties['replaceSymfonyRouter'] = true;
            $this->replaceSymfonyRouter = $config['replace_symfony_router'];
            unset($config['replace_symfony_router']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['routersById'])) {
            $output['routers_by_id'] = $this->routersById;
        }
        if (isset($this->_usedProperties['replaceSymfonyRouter'])) {
            $output['replace_symfony_router'] = $this->replaceSymfonyRouter;
        }

        return $output;
    }

}
