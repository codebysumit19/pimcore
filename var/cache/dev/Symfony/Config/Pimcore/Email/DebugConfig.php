<?php

namespace Symfony\Config\Pimcore\Email;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DebugConfig 
{
    private $emailAddresses;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function emailAddresses($value): static
    {
        $this->_usedProperties['emailAddresses'] = true;
        $this->emailAddresses = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('email_addresses', $config)) {
            $this->_usedProperties['emailAddresses'] = true;
            $this->emailAddresses = $config['email_addresses'];
            unset($config['email_addresses']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['emailAddresses'])) {
            $output['email_addresses'] = $this->emailAddresses;
        }

        return $output;
    }

}
