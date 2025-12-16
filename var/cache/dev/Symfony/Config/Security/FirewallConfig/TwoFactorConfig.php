<?php

namespace Symfony\Config\Security\FirewallConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TwoFactorConfig 
{
    private $checkPath;
    private $postOnly;
    private $authFormPath;
    private $alwaysUseDefaultTargetPath;
    private $defaultTargetPath;
    private $successHandler;
    private $failureHandler;
    private $authenticationRequiredHandler;
    private $authCodeParameterName;
    private $trustedParameterName;
    private $rememberMeSetsTrusted;
    private $multiFactor;
    private $prepareOnLogin;
    private $prepareOnAccessDenied;
    private $enableCsrf;
    private $csrfParameter;
    private $csrfTokenId;
    private $csrfHeader;
    private $csrfTokenManager;
    private $provider;
    private $_usedProperties = [];

    /**
     * @default '/2fa_check'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function checkPath($value): static
    {
        $this->_usedProperties['checkPath'] = true;
        $this->checkPath = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function postOnly($value): static
    {
        $this->_usedProperties['postOnly'] = true;
        $this->postOnly = $value;

        return $this;
    }

    /**
     * @default '/2fa'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function authFormPath($value): static
    {
        $this->_usedProperties['authFormPath'] = true;
        $this->authFormPath = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function alwaysUseDefaultTargetPath($value): static
    {
        $this->_usedProperties['alwaysUseDefaultTargetPath'] = true;
        $this->alwaysUseDefaultTargetPath = $value;

        return $this;
    }

    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultTargetPath($value): static
    {
        $this->_usedProperties['defaultTargetPath'] = true;
        $this->defaultTargetPath = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function successHandler($value): static
    {
        $this->_usedProperties['successHandler'] = true;
        $this->successHandler = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function failureHandler($value): static
    {
        $this->_usedProperties['failureHandler'] = true;
        $this->failureHandler = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function authenticationRequiredHandler($value): static
    {
        $this->_usedProperties['authenticationRequiredHandler'] = true;
        $this->authenticationRequiredHandler = $value;

        return $this;
    }

    /**
     * @default '_auth_code'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function authCodeParameterName($value): static
    {
        $this->_usedProperties['authCodeParameterName'] = true;
        $this->authCodeParameterName = $value;

        return $this;
    }

    /**
     * @default '_trusted'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function trustedParameterName($value): static
    {
        $this->_usedProperties['trustedParameterName'] = true;
        $this->trustedParameterName = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function rememberMeSetsTrusted($value): static
    {
        $this->_usedProperties['rememberMeSetsTrusted'] = true;
        $this->rememberMeSetsTrusted = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function multiFactor($value): static
    {
        $this->_usedProperties['multiFactor'] = true;
        $this->multiFactor = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function prepareOnLogin($value): static
    {
        $this->_usedProperties['prepareOnLogin'] = true;
        $this->prepareOnLogin = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function prepareOnAccessDenied($value): static
    {
        $this->_usedProperties['prepareOnAccessDenied'] = true;
        $this->prepareOnAccessDenied = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enableCsrf($value): static
    {
        $this->_usedProperties['enableCsrf'] = true;
        $this->enableCsrf = $value;

        return $this;
    }

    /**
     * @default '_csrf_token'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function csrfParameter($value): static
    {
        $this->_usedProperties['csrfParameter'] = true;
        $this->csrfParameter = $value;

        return $this;
    }

    /**
     * @default 'two_factor'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function csrfTokenId($value): static
    {
        $this->_usedProperties['csrfTokenId'] = true;
        $this->csrfTokenId = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function csrfHeader($value): static
    {
        $this->_usedProperties['csrfHeader'] = true;
        $this->csrfHeader = $value;

        return $this;
    }

    /**
     * @default 'scheb_two_factor.csrf_token_manager'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function csrfTokenManager($value): static
    {
        $this->_usedProperties['csrfTokenManager'] = true;
        $this->csrfTokenManager = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function provider($value): static
    {
        $this->_usedProperties['provider'] = true;
        $this->provider = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('check_path', $config)) {
            $this->_usedProperties['checkPath'] = true;
            $this->checkPath = $config['check_path'];
            unset($config['check_path']);
        }

        if (array_key_exists('post_only', $config)) {
            $this->_usedProperties['postOnly'] = true;
            $this->postOnly = $config['post_only'];
            unset($config['post_only']);
        }

        if (array_key_exists('auth_form_path', $config)) {
            $this->_usedProperties['authFormPath'] = true;
            $this->authFormPath = $config['auth_form_path'];
            unset($config['auth_form_path']);
        }

        if (array_key_exists('always_use_default_target_path', $config)) {
            $this->_usedProperties['alwaysUseDefaultTargetPath'] = true;
            $this->alwaysUseDefaultTargetPath = $config['always_use_default_target_path'];
            unset($config['always_use_default_target_path']);
        }

        if (array_key_exists('default_target_path', $config)) {
            $this->_usedProperties['defaultTargetPath'] = true;
            $this->defaultTargetPath = $config['default_target_path'];
            unset($config['default_target_path']);
        }

        if (array_key_exists('success_handler', $config)) {
            $this->_usedProperties['successHandler'] = true;
            $this->successHandler = $config['success_handler'];
            unset($config['success_handler']);
        }

        if (array_key_exists('failure_handler', $config)) {
            $this->_usedProperties['failureHandler'] = true;
            $this->failureHandler = $config['failure_handler'];
            unset($config['failure_handler']);
        }

        if (array_key_exists('authentication_required_handler', $config)) {
            $this->_usedProperties['authenticationRequiredHandler'] = true;
            $this->authenticationRequiredHandler = $config['authentication_required_handler'];
            unset($config['authentication_required_handler']);
        }

        if (array_key_exists('auth_code_parameter_name', $config)) {
            $this->_usedProperties['authCodeParameterName'] = true;
            $this->authCodeParameterName = $config['auth_code_parameter_name'];
            unset($config['auth_code_parameter_name']);
        }

        if (array_key_exists('trusted_parameter_name', $config)) {
            $this->_usedProperties['trustedParameterName'] = true;
            $this->trustedParameterName = $config['trusted_parameter_name'];
            unset($config['trusted_parameter_name']);
        }

        if (array_key_exists('remember_me_sets_trusted', $config)) {
            $this->_usedProperties['rememberMeSetsTrusted'] = true;
            $this->rememberMeSetsTrusted = $config['remember_me_sets_trusted'];
            unset($config['remember_me_sets_trusted']);
        }

        if (array_key_exists('multi_factor', $config)) {
            $this->_usedProperties['multiFactor'] = true;
            $this->multiFactor = $config['multi_factor'];
            unset($config['multi_factor']);
        }

        if (array_key_exists('prepare_on_login', $config)) {
            $this->_usedProperties['prepareOnLogin'] = true;
            $this->prepareOnLogin = $config['prepare_on_login'];
            unset($config['prepare_on_login']);
        }

        if (array_key_exists('prepare_on_access_denied', $config)) {
            $this->_usedProperties['prepareOnAccessDenied'] = true;
            $this->prepareOnAccessDenied = $config['prepare_on_access_denied'];
            unset($config['prepare_on_access_denied']);
        }

        if (array_key_exists('enable_csrf', $config)) {
            $this->_usedProperties['enableCsrf'] = true;
            $this->enableCsrf = $config['enable_csrf'];
            unset($config['enable_csrf']);
        }

        if (array_key_exists('csrf_parameter', $config)) {
            $this->_usedProperties['csrfParameter'] = true;
            $this->csrfParameter = $config['csrf_parameter'];
            unset($config['csrf_parameter']);
        }

        if (array_key_exists('csrf_token_id', $config)) {
            $this->_usedProperties['csrfTokenId'] = true;
            $this->csrfTokenId = $config['csrf_token_id'];
            unset($config['csrf_token_id']);
        }

        if (array_key_exists('csrf_header', $config)) {
            $this->_usedProperties['csrfHeader'] = true;
            $this->csrfHeader = $config['csrf_header'];
            unset($config['csrf_header']);
        }

        if (array_key_exists('csrf_token_manager', $config)) {
            $this->_usedProperties['csrfTokenManager'] = true;
            $this->csrfTokenManager = $config['csrf_token_manager'];
            unset($config['csrf_token_manager']);
        }

        if (array_key_exists('provider', $config)) {
            $this->_usedProperties['provider'] = true;
            $this->provider = $config['provider'];
            unset($config['provider']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['checkPath'])) {
            $output['check_path'] = $this->checkPath;
        }
        if (isset($this->_usedProperties['postOnly'])) {
            $output['post_only'] = $this->postOnly;
        }
        if (isset($this->_usedProperties['authFormPath'])) {
            $output['auth_form_path'] = $this->authFormPath;
        }
        if (isset($this->_usedProperties['alwaysUseDefaultTargetPath'])) {
            $output['always_use_default_target_path'] = $this->alwaysUseDefaultTargetPath;
        }
        if (isset($this->_usedProperties['defaultTargetPath'])) {
            $output['default_target_path'] = $this->defaultTargetPath;
        }
        if (isset($this->_usedProperties['successHandler'])) {
            $output['success_handler'] = $this->successHandler;
        }
        if (isset($this->_usedProperties['failureHandler'])) {
            $output['failure_handler'] = $this->failureHandler;
        }
        if (isset($this->_usedProperties['authenticationRequiredHandler'])) {
            $output['authentication_required_handler'] = $this->authenticationRequiredHandler;
        }
        if (isset($this->_usedProperties['authCodeParameterName'])) {
            $output['auth_code_parameter_name'] = $this->authCodeParameterName;
        }
        if (isset($this->_usedProperties['trustedParameterName'])) {
            $output['trusted_parameter_name'] = $this->trustedParameterName;
        }
        if (isset($this->_usedProperties['rememberMeSetsTrusted'])) {
            $output['remember_me_sets_trusted'] = $this->rememberMeSetsTrusted;
        }
        if (isset($this->_usedProperties['multiFactor'])) {
            $output['multi_factor'] = $this->multiFactor;
        }
        if (isset($this->_usedProperties['prepareOnLogin'])) {
            $output['prepare_on_login'] = $this->prepareOnLogin;
        }
        if (isset($this->_usedProperties['prepareOnAccessDenied'])) {
            $output['prepare_on_access_denied'] = $this->prepareOnAccessDenied;
        }
        if (isset($this->_usedProperties['enableCsrf'])) {
            $output['enable_csrf'] = $this->enableCsrf;
        }
        if (isset($this->_usedProperties['csrfParameter'])) {
            $output['csrf_parameter'] = $this->csrfParameter;
        }
        if (isset($this->_usedProperties['csrfTokenId'])) {
            $output['csrf_token_id'] = $this->csrfTokenId;
        }
        if (isset($this->_usedProperties['csrfHeader'])) {
            $output['csrf_header'] = $this->csrfHeader;
        }
        if (isset($this->_usedProperties['csrfTokenManager'])) {
            $output['csrf_token_manager'] = $this->csrfTokenManager;
        }
        if (isset($this->_usedProperties['provider'])) {
            $output['provider'] = $this->provider;
        }

        return $output;
    }

}
