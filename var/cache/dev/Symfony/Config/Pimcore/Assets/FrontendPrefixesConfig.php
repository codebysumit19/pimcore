<?php

namespace Symfony\Config\Pimcore\Assets;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FrontendPrefixesConfig 
{
    private $source;
    private $thumbnail;
    private $thumbnailDeferred;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function source($value): static
    {
        $this->_usedProperties['source'] = true;
        $this->source = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function thumbnail($value): static
    {
        $this->_usedProperties['thumbnail'] = true;
        $this->thumbnail = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function thumbnailDeferred($value): static
    {
        $this->_usedProperties['thumbnailDeferred'] = true;
        $this->thumbnailDeferred = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('source', $config)) {
            $this->_usedProperties['source'] = true;
            $this->source = $config['source'];
            unset($config['source']);
        }

        if (array_key_exists('thumbnail', $config)) {
            $this->_usedProperties['thumbnail'] = true;
            $this->thumbnail = $config['thumbnail'];
            unset($config['thumbnail']);
        }

        if (array_key_exists('thumbnail_deferred', $config)) {
            $this->_usedProperties['thumbnailDeferred'] = true;
            $this->thumbnailDeferred = $config['thumbnail_deferred'];
            unset($config['thumbnail_deferred']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['source'])) {
            $output['source'] = $this->source;
        }
        if (isset($this->_usedProperties['thumbnail'])) {
            $output['thumbnail'] = $this->thumbnail;
        }
        if (isset($this->_usedProperties['thumbnailDeferred'])) {
            $output['thumbnail_deferred'] = $this->thumbnailDeferred;
        }

        return $output;
    }

}
