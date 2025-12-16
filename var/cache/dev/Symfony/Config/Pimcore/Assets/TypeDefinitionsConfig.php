<?php

namespace Symfony\Config\Pimcore\Assets;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TypeDefinitions'.\DIRECTORY_SEPARATOR.'MapConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TypeDefinitionsConfig 
{
    private $map;
    private $_usedProperties = [];

    public function map(array $value = []): \Symfony\Config\Pimcore\Assets\TypeDefinitions\MapConfig
    {
        $this->_usedProperties['map'] = true;

        return $this->map[] = new \Symfony\Config\Pimcore\Assets\TypeDefinitions\MapConfig($value);
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('map', $config)) {
            $this->_usedProperties['map'] = true;
            $this->map = array_map(fn ($v) => new \Symfony\Config\Pimcore\Assets\TypeDefinitions\MapConfig($v), $config['map']);
            unset($config['map']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['map'])) {
            $output['map'] = array_map(fn ($v) => $v->toArray(), $this->map);
        }

        return $output;
    }

}
