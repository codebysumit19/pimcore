<?php

namespace Symfony\Config\SchebTwoFactor;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class GoogleConfig 
{
    private $enabled;
    private $formRenderer;
    private $issuer;
    private $serverName;
    private $template;
    private $digits;
    private $leeway;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function formRenderer($value): static
    {
        $this->_usedProperties['formRenderer'] = true;
        $this->formRenderer = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function issuer($value): static
    {
        $this->_usedProperties['issuer'] = true;
        $this->issuer = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serverName($value): static
    {
        $this->_usedProperties['serverName'] = true;
        $this->serverName = $value;

        return $this;
    }

    /**
     * @default '@SchebTwoFactor/Authentication/form.html.twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function template($value): static
    {
        $this->_usedProperties['template'] = true;
        $this->template = $value;

        return $this;
    }

    /**
     * @default 6
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function digits($value): static
    {
        $this->_usedProperties['digits'] = true;
        $this->digits = $value;

        return $this;
    }

    /**
     * @default 0
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function leeway($value): static
    {
        $this->_usedProperties['leeway'] = true;
        $this->leeway = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('form_renderer', $config)) {
            $this->_usedProperties['formRenderer'] = true;
            $this->formRenderer = $config['form_renderer'];
            unset($config['form_renderer']);
        }

        if (array_key_exists('issuer', $config)) {
            $this->_usedProperties['issuer'] = true;
            $this->issuer = $config['issuer'];
            unset($config['issuer']);
        }

        if (array_key_exists('server_name', $config)) {
            $this->_usedProperties['serverName'] = true;
            $this->serverName = $config['server_name'];
            unset($config['server_name']);
        }

        if (array_key_exists('template', $config)) {
            $this->_usedProperties['template'] = true;
            $this->template = $config['template'];
            unset($config['template']);
        }

        if (array_key_exists('digits', $config)) {
            $this->_usedProperties['digits'] = true;
            $this->digits = $config['digits'];
            unset($config['digits']);
        }

        if (array_key_exists('leeway', $config)) {
            $this->_usedProperties['leeway'] = true;
            $this->leeway = $config['leeway'];
            unset($config['leeway']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['formRenderer'])) {
            $output['form_renderer'] = $this->formRenderer;
        }
        if (isset($this->_usedProperties['issuer'])) {
            $output['issuer'] = $this->issuer;
        }
        if (isset($this->_usedProperties['serverName'])) {
            $output['server_name'] = $this->serverName;
        }
        if (isset($this->_usedProperties['template'])) {
            $output['template'] = $this->template;
        }
        if (isset($this->_usedProperties['digits'])) {
            $output['digits'] = $this->digits;
        }
        if (isset($this->_usedProperties['leeway'])) {
            $output['leeway'] = $this->leeway;
        }

        return $output;
    }

}
