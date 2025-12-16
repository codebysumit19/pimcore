<?php

namespace Symfony\Config\Pimcore\Documents;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AreasConfig 
{
    private $autoload;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoload($value): static
    {
        $this->_usedProperties['autoload'] = true;
        $this->autoload = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('autoload', $config)) {
            $this->_usedProperties['autoload'] = true;
            $this->autoload = $config['autoload'];
            unset($config['autoload']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['autoload'])) {
            $output['autoload'] = $this->autoload;
        }

        return $output;
    }

}
