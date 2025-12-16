<?php

namespace Symfony\Config\Pimcore;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class GotenbergConfig 
{
    private $baseUrl;
    private $pingCacheTtl;
    private $_usedProperties = [];

    /**
     * @default 'http://gotenberg:3000'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function baseUrl($value): static
    {
        $this->_usedProperties['baseUrl'] = true;
        $this->baseUrl = $value;

        return $this;
    }

    /**
     * @default 60
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pingCacheTtl($value): static
    {
        $this->_usedProperties['pingCacheTtl'] = true;
        $this->pingCacheTtl = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('base_url', $config)) {
            $this->_usedProperties['baseUrl'] = true;
            $this->baseUrl = $config['base_url'];
            unset($config['base_url']);
        }

        if (array_key_exists('ping_cache_ttl', $config)) {
            $this->_usedProperties['pingCacheTtl'] = true;
            $this->pingCacheTtl = $config['ping_cache_ttl'];
            unset($config['ping_cache_ttl']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['baseUrl'])) {
            $output['base_url'] = $this->baseUrl;
        }
        if (isset($this->_usedProperties['pingCacheTtl'])) {
            $output['ping_cache_ttl'] = $this->pingCacheTtl;
        }

        return $output;
    }

}
