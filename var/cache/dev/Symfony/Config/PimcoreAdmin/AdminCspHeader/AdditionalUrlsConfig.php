<?php

namespace Symfony\Config\PimcoreAdmin\AdminCspHeader;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AdditionalUrlsConfig 
{
    private $defaultsrc;
    private $imgsrc;
    private $scriptsrc;
    private $stylesrc;
    private $connectsrc;
    private $fontsrc;
    private $mediasrc;
    private $framesrc;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function defaultsrc(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['defaultsrc'] = true;
        $this->defaultsrc = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function imgsrc(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['imgsrc'] = true;
        $this->imgsrc = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function scriptsrc(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['scriptsrc'] = true;
        $this->scriptsrc = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function stylesrc(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['stylesrc'] = true;
        $this->stylesrc = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function connectsrc(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['connectsrc'] = true;
        $this->connectsrc = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function fontsrc(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['fontsrc'] = true;
        $this->fontsrc = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function mediasrc(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['mediasrc'] = true;
        $this->mediasrc = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function framesrc(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['framesrc'] = true;
        $this->framesrc = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('default-src', $config)) {
            $this->_usedProperties['defaultsrc'] = true;
            $this->defaultsrc = $config['default-src'];
            unset($config['default-src']);
        }

        if (array_key_exists('img-src', $config)) {
            $this->_usedProperties['imgsrc'] = true;
            $this->imgsrc = $config['img-src'];
            unset($config['img-src']);
        }

        if (array_key_exists('script-src', $config)) {
            $this->_usedProperties['scriptsrc'] = true;
            $this->scriptsrc = $config['script-src'];
            unset($config['script-src']);
        }

        if (array_key_exists('style-src', $config)) {
            $this->_usedProperties['stylesrc'] = true;
            $this->stylesrc = $config['style-src'];
            unset($config['style-src']);
        }

        if (array_key_exists('connect-src', $config)) {
            $this->_usedProperties['connectsrc'] = true;
            $this->connectsrc = $config['connect-src'];
            unset($config['connect-src']);
        }

        if (array_key_exists('font-src', $config)) {
            $this->_usedProperties['fontsrc'] = true;
            $this->fontsrc = $config['font-src'];
            unset($config['font-src']);
        }

        if (array_key_exists('media-src', $config)) {
            $this->_usedProperties['mediasrc'] = true;
            $this->mediasrc = $config['media-src'];
            unset($config['media-src']);
        }

        if (array_key_exists('frame-src', $config)) {
            $this->_usedProperties['framesrc'] = true;
            $this->framesrc = $config['frame-src'];
            unset($config['frame-src']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaultsrc'])) {
            $output['default-src'] = $this->defaultsrc;
        }
        if (isset($this->_usedProperties['imgsrc'])) {
            $output['img-src'] = $this->imgsrc;
        }
        if (isset($this->_usedProperties['scriptsrc'])) {
            $output['script-src'] = $this->scriptsrc;
        }
        if (isset($this->_usedProperties['stylesrc'])) {
            $output['style-src'] = $this->stylesrc;
        }
        if (isset($this->_usedProperties['connectsrc'])) {
            $output['connect-src'] = $this->connectsrc;
        }
        if (isset($this->_usedProperties['fontsrc'])) {
            $output['font-src'] = $this->fontsrc;
        }
        if (isset($this->_usedProperties['mediasrc'])) {
            $output['media-src'] = $this->mediasrc;
        }
        if (isset($this->_usedProperties['framesrc'])) {
            $output['frame-src'] = $this->framesrc;
        }

        return $output;
    }

}
