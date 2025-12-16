<?php

namespace Symfony\Config\PimcoreAdmin;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'AttributeBagsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SessionConfig 
{
    private $attributeBags;
    private $_usedProperties = [];

    /**
     * @example ["foo","bar"]
     * @example {"foo":"_foo","bar":"_bar"}
     * @example {"foo":{"storage_key":"_foo"},"bar":{"storage_key":"_bar"}}
     */
    public function attributeBags(string $name, array $value = []): \Symfony\Config\PimcoreAdmin\Session\AttributeBagsConfig
    {
        if (!isset($this->attributeBags[$name])) {
            $this->_usedProperties['attributeBags'] = true;
            $this->attributeBags[$name] = new \Symfony\Config\PimcoreAdmin\Session\AttributeBagsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "attributeBags()" has already been initialized. You cannot pass values the second time you call attributeBags().');
        }

        return $this->attributeBags[$name];
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('attribute_bags', $config)) {
            $this->_usedProperties['attributeBags'] = true;
            $this->attributeBags = array_map(fn ($v) => new \Symfony\Config\PimcoreAdmin\Session\AttributeBagsConfig($v), $config['attribute_bags']);
            unset($config['attribute_bags']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['attributeBags'])) {
            $output['attribute_bags'] = array_map(fn ($v) => $v->toArray(), $this->attributeBags);
        }

        return $output;
    }

}
