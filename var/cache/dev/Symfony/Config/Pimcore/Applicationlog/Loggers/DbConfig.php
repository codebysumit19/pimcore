<?php

namespace Symfony\Config\Pimcore\Applicationlog\Loggers;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DbConfig 
{
    private $minLevelOrList;
    private $maxLevel;
    private $_usedProperties = [];

    /**
     * @default 'debug'
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function minLevelOrList(mixed $value = 'debug'): static
    {
        $this->_usedProperties['minLevelOrList'] = true;
        $this->minLevelOrList = $value;

        return $this;
    }

    /**
     * @default 'emergency'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxLevel($value): static
    {
        $this->_usedProperties['maxLevel'] = true;
        $this->maxLevel = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('min_level_or_list', $config)) {
            $this->_usedProperties['minLevelOrList'] = true;
            $this->minLevelOrList = $config['min_level_or_list'];
            unset($config['min_level_or_list']);
        }

        if (array_key_exists('max_level', $config)) {
            $this->_usedProperties['maxLevel'] = true;
            $this->maxLevel = $config['max_level'];
            unset($config['max_level']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['minLevelOrList'])) {
            $output['min_level_or_list'] = $this->minLevelOrList;
        }
        if (isset($this->_usedProperties['maxLevel'])) {
            $output['max_level'] = $this->maxLevel;
        }

        return $output;
    }

}
