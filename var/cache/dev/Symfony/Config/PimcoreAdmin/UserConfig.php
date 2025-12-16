<?php

namespace Symfony\Config\PimcoreAdmin;

require_once __DIR__.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'DefaultKeyBindingsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class UserConfig 
{
    private $defaultKeyBindings;
    private $_usedProperties = [];

    public function defaultKeyBindings(array $value = []): \Symfony\Config\PimcoreAdmin\User\DefaultKeyBindingsConfig
    {
        $this->_usedProperties['defaultKeyBindings'] = true;

        return $this->defaultKeyBindings[] = new \Symfony\Config\PimcoreAdmin\User\DefaultKeyBindingsConfig($value);
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('default_key_bindings', $config)) {
            $this->_usedProperties['defaultKeyBindings'] = true;
            $this->defaultKeyBindings = array_map(fn ($v) => new \Symfony\Config\PimcoreAdmin\User\DefaultKeyBindingsConfig($v), $config['default_key_bindings']);
            unset($config['default_key_bindings']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaultKeyBindings'])) {
            $output['default_key_bindings'] = array_map(fn ($v) => $v->toArray(), $this->defaultKeyBindings);
        }

        return $output;
    }

}
