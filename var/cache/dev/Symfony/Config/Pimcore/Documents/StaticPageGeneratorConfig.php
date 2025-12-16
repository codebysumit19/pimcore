<?php

namespace Symfony\Config\Pimcore\Documents;

require_once __DIR__.\DIRECTORY_SEPARATOR.'StaticPageGenerator'.\DIRECTORY_SEPARATOR.'HeadersConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StaticPageGeneratorConfig 
{
    private $useMainDomain;
    private $headers;
    private $_usedProperties = [];

    /**
     * Use main domain for static pages folder in tmp/pages
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useMainDomain($value): static
    {
        $this->_usedProperties['useMainDomain'] = true;
        $this->useMainDomain = $value;

        return $this;
    }

    public function headers(array $value = []): \Symfony\Config\Pimcore\Documents\StaticPageGenerator\HeadersConfig
    {
        $this->_usedProperties['headers'] = true;

        return $this->headers[] = new \Symfony\Config\Pimcore\Documents\StaticPageGenerator\HeadersConfig($value);
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('use_main_domain', $config)) {
            $this->_usedProperties['useMainDomain'] = true;
            $this->useMainDomain = $config['use_main_domain'];
            unset($config['use_main_domain']);
        }

        if (array_key_exists('headers', $config)) {
            $this->_usedProperties['headers'] = true;
            $this->headers = array_map(fn ($v) => new \Symfony\Config\Pimcore\Documents\StaticPageGenerator\HeadersConfig($v), $config['headers']);
            unset($config['headers']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['useMainDomain'])) {
            $output['use_main_domain'] = $this->useMainDomain;
        }
        if (isset($this->_usedProperties['headers'])) {
            $output['headers'] = array_map(fn ($v) => $v->toArray(), $this->headers);
        }

        return $output;
    }

}
