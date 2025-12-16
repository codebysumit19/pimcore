<?php

namespace Symfony\Config\Pimcore;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProductRegistrationConfig 
{
    private $instanceIdentifier;
    private $productKey;
    private $_usedProperties = [];

    /**
     * Unique identifier of that Pimcore instance. Will be generated during install.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function instanceIdentifier($value): static
    {
        $this->_usedProperties['instanceIdentifier'] = true;
        $this->instanceIdentifier = $value;

        return $this;
    }

    /**
     * Product registration key obtained during product registration. It is based on `instance_identifier` and `pimcore.encryption.secret`.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function productKey($value): static
    {
        $this->_usedProperties['productKey'] = true;
        $this->productKey = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('instance_identifier', $config)) {
            $this->_usedProperties['instanceIdentifier'] = true;
            $this->instanceIdentifier = $config['instance_identifier'];
            unset($config['instance_identifier']);
        }

        if (array_key_exists('product_key', $config)) {
            $this->_usedProperties['productKey'] = true;
            $this->productKey = $config['product_key'];
            unset($config['product_key']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['instanceIdentifier'])) {
            $output['instance_identifier'] = $this->instanceIdentifier;
        }
        if (isset($this->_usedProperties['productKey'])) {
            $output['product_key'] = $this->productKey;
        }

        return $output;
    }

}
