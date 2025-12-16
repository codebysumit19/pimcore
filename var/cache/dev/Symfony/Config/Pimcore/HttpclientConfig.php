<?php

namespace Symfony\Config\Pimcore;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HttpclientConfig 
{
    private $adapter;
    private $proxyHost;
    private $proxyPort;
    private $proxyUser;
    private $proxyPass;
    private $_usedProperties = [];

    /**
     * Set to `Proxy` if proxy server should be used
     * @default 'Socket'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adapter($value): static
    {
        $this->_usedProperties['adapter'] = true;
        $this->adapter = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function proxyHost($value): static
    {
        $this->_usedProperties['proxyHost'] = true;
        $this->proxyHost = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function proxyPort($value): static
    {
        $this->_usedProperties['proxyPort'] = true;
        $this->proxyPort = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function proxyUser($value): static
    {
        $this->_usedProperties['proxyUser'] = true;
        $this->proxyUser = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function proxyPass($value): static
    {
        $this->_usedProperties['proxyPass'] = true;
        $this->proxyPass = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('adapter', $config)) {
            $this->_usedProperties['adapter'] = true;
            $this->adapter = $config['adapter'];
            unset($config['adapter']);
        }

        if (array_key_exists('proxy_host', $config)) {
            $this->_usedProperties['proxyHost'] = true;
            $this->proxyHost = $config['proxy_host'];
            unset($config['proxy_host']);
        }

        if (array_key_exists('proxy_port', $config)) {
            $this->_usedProperties['proxyPort'] = true;
            $this->proxyPort = $config['proxy_port'];
            unset($config['proxy_port']);
        }

        if (array_key_exists('proxy_user', $config)) {
            $this->_usedProperties['proxyUser'] = true;
            $this->proxyUser = $config['proxy_user'];
            unset($config['proxy_user']);
        }

        if (array_key_exists('proxy_pass', $config)) {
            $this->_usedProperties['proxyPass'] = true;
            $this->proxyPass = $config['proxy_pass'];
            unset($config['proxy_pass']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['adapter'])) {
            $output['adapter'] = $this->adapter;
        }
        if (isset($this->_usedProperties['proxyHost'])) {
            $output['proxy_host'] = $this->proxyHost;
        }
        if (isset($this->_usedProperties['proxyPort'])) {
            $output['proxy_port'] = $this->proxyPort;
        }
        if (isset($this->_usedProperties['proxyUser'])) {
            $output['proxy_user'] = $this->proxyUser;
        }
        if (isset($this->_usedProperties['proxyPass'])) {
            $output['proxy_pass'] = $this->proxyPass;
        }

        return $output;
    }

}
