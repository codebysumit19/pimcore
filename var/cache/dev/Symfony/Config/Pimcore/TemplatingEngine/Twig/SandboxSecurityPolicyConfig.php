<?php

namespace Symfony\Config\Pimcore\TemplatingEngine\Twig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SandboxSecurityPolicyConfig 
{
    private $tags;
    private $filters;
    private $functions;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function tags(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['tags'] = true;
        $this->tags = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function filters(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['filters'] = true;
        $this->filters = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function functions(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['functions'] = true;
        $this->functions = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('tags', $config)) {
            $this->_usedProperties['tags'] = true;
            $this->tags = $config['tags'];
            unset($config['tags']);
        }

        if (array_key_exists('filters', $config)) {
            $this->_usedProperties['filters'] = true;
            $this->filters = $config['filters'];
            unset($config['filters']);
        }

        if (array_key_exists('functions', $config)) {
            $this->_usedProperties['functions'] = true;
            $this->functions = $config['functions'];
            unset($config['functions']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['tags'])) {
            $output['tags'] = $this->tags;
        }
        if (isset($this->_usedProperties['filters'])) {
            $output['filters'] = $this->filters;
        }
        if (isset($this->_usedProperties['functions'])) {
            $output['functions'] = $this->functions;
        }

        return $output;
    }

}
