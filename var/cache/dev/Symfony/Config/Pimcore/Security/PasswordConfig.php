<?php

namespace Symfony\Config\Pimcore\Security;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PasswordConfig 
{
    private $algorithm;
    private $options;
    private $_usedProperties = [];

    /**
     * The hashing algorithm to use for backend users and objects containing a "password" field.
     * @example !php/const PASSWORD_BCRYPT
     * @default '2y'
     * @param ParamConfigurator|'2y'|'argon2i'|'argon2id' $value
     * @return $this
     */
    public function algorithm($value): static
    {
        $this->_usedProperties['algorithm'] = true;
        $this->algorithm = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function options(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['options'] = true;
        $this->options = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('algorithm', $config)) {
            $this->_usedProperties['algorithm'] = true;
            $this->algorithm = $config['algorithm'];
            unset($config['algorithm']);
        }

        if (array_key_exists('options', $config)) {
            $this->_usedProperties['options'] = true;
            $this->options = $config['options'];
            unset($config['options']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['algorithm'])) {
            $output['algorithm'] = $this->algorithm;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options;
        }

        return $output;
    }

}
