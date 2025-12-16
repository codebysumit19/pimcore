<?php

namespace Symfony\Config\Pimcore;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class GeneralConfig 
{
    private $timezone;
    private $pathVariable;
    private $domain;
    private $redirectToMaindomain;
    private $language;
    private $validLanguages;
    private $requiredLanguages;
    private $fallbackLanguages;
    private $defaultLanguage;
    private $disableUsageStatistics;
    private $debugAdminTranslations;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function timezone($value): static
    {
        $this->_usedProperties['timezone'] = true;
        $this->timezone = $value;

        return $this;
    }

    /**
     * Additional $PATH variable (: separated) (/x/y:/foo/bar):
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pathVariable($value): static
    {
        $this->_usedProperties['pathVariable'] = true;
        $this->pathVariable = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function domain($value): static
    {
        $this->_usedProperties['domain'] = true;
        $this->domain = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function redirectToMaindomain($value): static
    {
        $this->_usedProperties['redirectToMaindomain'] = true;
        $this->redirectToMaindomain = $value;

        return $this;
    }

    /**
     * @default 'en'
     * @param ParamConfigurator|mixed $value
     * @deprecated Since pimcore/pimcore 11.2: The child node "language" at path "pimcore.general" is deprecated.
     * @return $this
     */
    public function language($value): static
    {
        $this->_usedProperties['language'] = true;
        $this->language = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|string $value
     *
     * @return $this
     */
    public function validLanguages(ParamConfigurator|string|array $value): static
    {
        $this->_usedProperties['validLanguages'] = true;
        $this->validLanguages = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|string $value
     *
     * @return $this
     */
    public function requiredLanguages(ParamConfigurator|string|array $value): static
    {
        $this->_usedProperties['requiredLanguages'] = true;
        $this->requiredLanguages = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function fallbackLanguages(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['fallbackLanguages'] = true;
        $this->fallbackLanguages = $value;

        return $this;
    }

    /**
     * @default 'en'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultLanguage($value): static
    {
        $this->_usedProperties['defaultLanguage'] = true;
        $this->defaultLanguage = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function disableUsageStatistics($value): static
    {
        $this->_usedProperties['disableUsageStatistics'] = true;
        $this->disableUsageStatistics = $value;

        return $this;
    }

    /**
     * Debug Admin-Translations (text in UI will be displayed wrapped in +)
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debugAdminTranslations($value): static
    {
        $this->_usedProperties['debugAdminTranslations'] = true;
        $this->debugAdminTranslations = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('timezone', $config)) {
            $this->_usedProperties['timezone'] = true;
            $this->timezone = $config['timezone'];
            unset($config['timezone']);
        }

        if (array_key_exists('path_variable', $config)) {
            $this->_usedProperties['pathVariable'] = true;
            $this->pathVariable = $config['path_variable'];
            unset($config['path_variable']);
        }

        if (array_key_exists('domain', $config)) {
            $this->_usedProperties['domain'] = true;
            $this->domain = $config['domain'];
            unset($config['domain']);
        }

        if (array_key_exists('redirect_to_maindomain', $config)) {
            $this->_usedProperties['redirectToMaindomain'] = true;
            $this->redirectToMaindomain = $config['redirect_to_maindomain'];
            unset($config['redirect_to_maindomain']);
        }

        if (array_key_exists('language', $config)) {
            $this->_usedProperties['language'] = true;
            $this->language = $config['language'];
            unset($config['language']);
        }

        if (array_key_exists('valid_languages', $config)) {
            $this->_usedProperties['validLanguages'] = true;
            $this->validLanguages = $config['valid_languages'];
            unset($config['valid_languages']);
        }

        if (array_key_exists('required_languages', $config)) {
            $this->_usedProperties['requiredLanguages'] = true;
            $this->requiredLanguages = $config['required_languages'];
            unset($config['required_languages']);
        }

        if (array_key_exists('fallback_languages', $config)) {
            $this->_usedProperties['fallbackLanguages'] = true;
            $this->fallbackLanguages = $config['fallback_languages'];
            unset($config['fallback_languages']);
        }

        if (array_key_exists('default_language', $config)) {
            $this->_usedProperties['defaultLanguage'] = true;
            $this->defaultLanguage = $config['default_language'];
            unset($config['default_language']);
        }

        if (array_key_exists('disable_usage_statistics', $config)) {
            $this->_usedProperties['disableUsageStatistics'] = true;
            $this->disableUsageStatistics = $config['disable_usage_statistics'];
            unset($config['disable_usage_statistics']);
        }

        if (array_key_exists('debug_admin_translations', $config)) {
            $this->_usedProperties['debugAdminTranslations'] = true;
            $this->debugAdminTranslations = $config['debug_admin_translations'];
            unset($config['debug_admin_translations']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['timezone'])) {
            $output['timezone'] = $this->timezone;
        }
        if (isset($this->_usedProperties['pathVariable'])) {
            $output['path_variable'] = $this->pathVariable;
        }
        if (isset($this->_usedProperties['domain'])) {
            $output['domain'] = $this->domain;
        }
        if (isset($this->_usedProperties['redirectToMaindomain'])) {
            $output['redirect_to_maindomain'] = $this->redirectToMaindomain;
        }
        if (isset($this->_usedProperties['language'])) {
            $output['language'] = $this->language;
        }
        if (isset($this->_usedProperties['validLanguages'])) {
            $output['valid_languages'] = $this->validLanguages;
        }
        if (isset($this->_usedProperties['requiredLanguages'])) {
            $output['required_languages'] = $this->requiredLanguages;
        }
        if (isset($this->_usedProperties['fallbackLanguages'])) {
            $output['fallback_languages'] = $this->fallbackLanguages;
        }
        if (isset($this->_usedProperties['defaultLanguage'])) {
            $output['default_language'] = $this->defaultLanguage;
        }
        if (isset($this->_usedProperties['disableUsageStatistics'])) {
            $output['disable_usage_statistics'] = $this->disableUsageStatistics;
        }
        if (isset($this->_usedProperties['debugAdminTranslations'])) {
            $output['debug_admin_translations'] = $this->debugAdminTranslations;
        }

        return $output;
    }

}
