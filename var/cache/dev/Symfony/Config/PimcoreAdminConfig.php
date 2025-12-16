<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'GdprDataExtractorConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'ObjectsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'AssetsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'DocumentsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'NotificationsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'UserConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'ExportConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'CsrfProtectionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'AdminCspHeaderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'BrandingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'SessionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'TranslationsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'PimcoreAdmin'.\DIRECTORY_SEPARATOR.'ConfigLocationConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class PimcoreAdminConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $gdprDataExtractor;
    private $objects;
    private $assets;
    private $documents;
    private $notifications;
    private $user;
    private $adminLanguages;
    private $export;
    private $csrfProtection;
    private $adminCspHeader;
    private $customAdminPathIdentifier;
    private $customAdminRouteName;
    private $branding;
    private $session;
    private $translations;
    private $securityFirewall;
    private $configLocation;
    private $_usedProperties = [];
    private $_hasDeprecatedCalls = false;

    /**
     * @default {"dataObjects":{"classes":[]},"assets":{"types":[]}}
     * @deprecated since Symfony 7.4
     */
    public function gdprDataExtractor(array $value = []): \Symfony\Config\PimcoreAdmin\GdprDataExtractorConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->gdprDataExtractor) {
            $this->_usedProperties['gdprDataExtractor'] = true;
            $this->gdprDataExtractor = new \Symfony\Config\PimcoreAdmin\GdprDataExtractorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "gdprDataExtractor()" has already been initialized. You cannot pass values the second time you call gdprDataExtractor().');
        }

        return $this->gdprDataExtractor;
    }

    /**
     * @default {"notes_events":{"types":["","content","seo","warning","notice"]}}
     * @deprecated since Symfony 7.4
     */
    public function objects(array $value = []): \Symfony\Config\PimcoreAdmin\ObjectsConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->objects) {
            $this->_usedProperties['objects'] = true;
            $this->objects = new \Symfony\Config\PimcoreAdmin\ObjectsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "objects()" has already been initialized. You cannot pass values the second time you call objects().');
        }

        return $this->objects;
    }

    /**
     * @default {"notes_events":{"types":["","content","seo","warning","notice"]},"hide_edit_image":false,"disable_tree_preview":true}
     * @deprecated since Symfony 7.4
     */
    public function assets(array $value = []): \Symfony\Config\PimcoreAdmin\AssetsConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->assets) {
            $this->_usedProperties['assets'] = true;
            $this->assets = new \Symfony\Config\PimcoreAdmin\AssetsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "assets()" has already been initialized. You cannot pass values the second time you call assets().');
        }

        return $this->assets;
    }

    /**
     * @default {"notes_events":{"types":["","content","seo","warning","notice"]},"email_search":[]}
     * @deprecated since Symfony 7.4
     */
    public function documents(array $value = []): \Symfony\Config\PimcoreAdmin\DocumentsConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->documents) {
            $this->_usedProperties['documents'] = true;
            $this->documents = new \Symfony\Config\PimcoreAdmin\DocumentsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "documents()" has already been initialized. You cannot pass values the second time you call documents().');
        }

        return $this->documents;
    }

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * @default {"enabled":true,"check_new_notification":{"enabled":true,"interval":30}}
     * @return \Symfony\Config\PimcoreAdmin\NotificationsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\PimcoreAdmin\NotificationsConfig : static)
     * @deprecated since Symfony 7.4
     */
    public function notifications(array|bool $value = []): \Symfony\Config\PimcoreAdmin\NotificationsConfig|static
    {
        $this->_hasDeprecatedCalls = true;
        if (!\is_array($value)) {
            $this->_usedProperties['notifications'] = true;
            $this->notifications = $value;

            return $this;
        }

        if (!$this->notifications instanceof \Symfony\Config\PimcoreAdmin\NotificationsConfig) {
            $this->_usedProperties['notifications'] = true;
            $this->notifications = new \Symfony\Config\PimcoreAdmin\NotificationsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "notifications()" has already been initialized. You cannot pass values the second time you call notifications().');
        }

        return $this->notifications;
    }

    /**
     * @default {"default_key_bindings":[]}
     * @deprecated since Symfony 7.4
     */
    public function user(array $value = []): \Symfony\Config\PimcoreAdmin\UserConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->user) {
            $this->_usedProperties['user'] = true;
            $this->user = new \Symfony\Config\PimcoreAdmin\UserConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "user()" has already been initialized. You cannot pass values the second time you call user().');
        }

        return $this->user;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function adminLanguages(ParamConfigurator|array $value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['adminLanguages'] = true;
        $this->adminLanguages = $value;

        return $this;
    }

    /**
     * @deprecated since Symfony 7.4
     */
    public function export(array $value = []): \Symfony\Config\PimcoreAdmin\ExportConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->export) {
            $this->_usedProperties['export'] = true;
            $this->export = new \Symfony\Config\PimcoreAdmin\ExportConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "export()" has already been initialized. You cannot pass values the second time you call export().');
        }

        return $this->export;
    }

    /**
     * @default {"excluded_routes":[]}
     * @deprecated since Symfony 7.4
     */
    public function csrfProtection(array $value = []): \Symfony\Config\PimcoreAdmin\CsrfProtectionConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->csrfProtection) {
            $this->_usedProperties['csrfProtection'] = true;
            $this->csrfProtection = new \Symfony\Config\PimcoreAdmin\CsrfProtectionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "csrfProtection()" has already been initialized. You cannot pass values the second time you call csrfProtection().');
        }

        return $this->csrfProtection;
    }

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * Can be used to enable or disable the Content Security Policy headers.
     * @default {"enabled":true,"exclude_paths":[],"additional_urls":{"default-src":[],"img-src":[],"script-src":[],"style-src":[],"connect-src":[],"font-src":[],"media-src":[],"frame-src":[]}}
     * @return \Symfony\Config\PimcoreAdmin\AdminCspHeaderConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\PimcoreAdmin\AdminCspHeaderConfig : static)
     * @deprecated since Symfony 7.4
     */
    public function adminCspHeader(array|bool $value = []): \Symfony\Config\PimcoreAdmin\AdminCspHeaderConfig|static
    {
        $this->_hasDeprecatedCalls = true;
        if (!\is_array($value)) {
            $this->_usedProperties['adminCspHeader'] = true;
            $this->adminCspHeader = $value;

            return $this;
        }

        if (!$this->adminCspHeader instanceof \Symfony\Config\PimcoreAdmin\AdminCspHeaderConfig) {
            $this->_usedProperties['adminCspHeader'] = true;
            $this->adminCspHeader = new \Symfony\Config\PimcoreAdmin\AdminCspHeaderConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "adminCspHeader()" has already been initialized. You cannot pass values the second time you call adminCspHeader().');
        }

        return $this->adminCspHeader;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function customAdminPathIdentifier($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['customAdminPathIdentifier'] = true;
        $this->customAdminPathIdentifier = $value;

        return $this;
    }

    /**
     * @default 'my_custom_admin_entry_point'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function customAdminRouteName($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['customAdminRouteName'] = true;
        $this->customAdminRouteName = $value;

        return $this;
    }

    /**
     * @default {"login_screen_invert_colors":false,"color_login_screen":null,"color_admin_interface":null,"color_admin_interface_background":null,"login_screen_custom_image":""}
     * @deprecated since Symfony 7.4
     */
    public function branding(array $value = []): \Symfony\Config\PimcoreAdmin\BrandingConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->branding) {
            $this->_usedProperties['branding'] = true;
            $this->branding = new \Symfony\Config\PimcoreAdmin\BrandingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "branding()" has already been initialized. You cannot pass values the second time you call branding().');
        }

        return $this->branding;
    }

    /**
     * @default {"attribute_bags":[]}
     * @deprecated since Symfony 7.4
     */
    public function session(array $value = []): \Symfony\Config\PimcoreAdmin\SessionConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->session) {
            $this->_usedProperties['session'] = true;
            $this->session = new \Symfony\Config\PimcoreAdmin\SessionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "session()" has already been initialized. You cannot pass values the second time you call session().');
        }

        return $this->session;
    }

    /**
     * @default {"path":null}
     * @deprecated since Symfony 7.4
     */
    public function translations(array $value = []): \Symfony\Config\PimcoreAdmin\TranslationsConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->translations) {
            $this->_usedProperties['translations'] = true;
            $this->translations = new \Symfony\Config\PimcoreAdmin\TranslationsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "translations()" has already been initialized. You cannot pass values the second time you call translations().');
        }

        return $this->translations;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function securityFirewall(mixed $value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['securityFirewall'] = true;
        $this->securityFirewall = $value;

        return $this;
    }

    /**
     * @default {"admin_system_settings":{"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/admin_system_settings"}},"read_target":{"type":null,"options":{"directory":null}}}}
     * @deprecated since Symfony 7.4
     */
    public function configLocation(array $value = []): \Symfony\Config\PimcoreAdmin\ConfigLocationConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->configLocation) {
            $this->_usedProperties['configLocation'] = true;
            $this->configLocation = new \Symfony\Config\PimcoreAdmin\ConfigLocationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "configLocation()" has already been initialized. You cannot pass values the second time you call configLocation().');
        }

        return $this->configLocation;
    }

    public function getExtensionAlias(): string
    {
        return 'pimcore_admin';
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('gdpr_data_extractor', $config)) {
            $this->_usedProperties['gdprDataExtractor'] = true;
            $this->gdprDataExtractor = new \Symfony\Config\PimcoreAdmin\GdprDataExtractorConfig($config['gdpr_data_extractor']);
            unset($config['gdpr_data_extractor']);
        }

        if (array_key_exists('objects', $config)) {
            $this->_usedProperties['objects'] = true;
            $this->objects = new \Symfony\Config\PimcoreAdmin\ObjectsConfig($config['objects']);
            unset($config['objects']);
        }

        if (array_key_exists('assets', $config)) {
            $this->_usedProperties['assets'] = true;
            $this->assets = new \Symfony\Config\PimcoreAdmin\AssetsConfig($config['assets']);
            unset($config['assets']);
        }

        if (array_key_exists('documents', $config)) {
            $this->_usedProperties['documents'] = true;
            $this->documents = new \Symfony\Config\PimcoreAdmin\DocumentsConfig($config['documents']);
            unset($config['documents']);
        }

        if (array_key_exists('notifications', $config)) {
            $this->_usedProperties['notifications'] = true;
            $this->notifications = \is_array($config['notifications']) ? new \Symfony\Config\PimcoreAdmin\NotificationsConfig($config['notifications']) : $config['notifications'];
            unset($config['notifications']);
        }

        if (array_key_exists('user', $config)) {
            $this->_usedProperties['user'] = true;
            $this->user = new \Symfony\Config\PimcoreAdmin\UserConfig($config['user']);
            unset($config['user']);
        }

        if (array_key_exists('admin_languages', $config)) {
            $this->_usedProperties['adminLanguages'] = true;
            $this->adminLanguages = $config['admin_languages'];
            unset($config['admin_languages']);
        }

        if (array_key_exists('export', $config)) {
            $this->_usedProperties['export'] = true;
            $this->export = new \Symfony\Config\PimcoreAdmin\ExportConfig($config['export']);
            unset($config['export']);
        }

        if (array_key_exists('csrf_protection', $config)) {
            $this->_usedProperties['csrfProtection'] = true;
            $this->csrfProtection = new \Symfony\Config\PimcoreAdmin\CsrfProtectionConfig($config['csrf_protection']);
            unset($config['csrf_protection']);
        }

        if (array_key_exists('admin_csp_header', $config)) {
            $this->_usedProperties['adminCspHeader'] = true;
            $this->adminCspHeader = \is_array($config['admin_csp_header']) ? new \Symfony\Config\PimcoreAdmin\AdminCspHeaderConfig($config['admin_csp_header']) : $config['admin_csp_header'];
            unset($config['admin_csp_header']);
        }

        if (array_key_exists('custom_admin_path_identifier', $config)) {
            $this->_usedProperties['customAdminPathIdentifier'] = true;
            $this->customAdminPathIdentifier = $config['custom_admin_path_identifier'];
            unset($config['custom_admin_path_identifier']);
        }

        if (array_key_exists('custom_admin_route_name', $config)) {
            $this->_usedProperties['customAdminRouteName'] = true;
            $this->customAdminRouteName = $config['custom_admin_route_name'];
            unset($config['custom_admin_route_name']);
        }

        if (array_key_exists('branding', $config)) {
            $this->_usedProperties['branding'] = true;
            $this->branding = new \Symfony\Config\PimcoreAdmin\BrandingConfig($config['branding']);
            unset($config['branding']);
        }

        if (array_key_exists('session', $config)) {
            $this->_usedProperties['session'] = true;
            $this->session = new \Symfony\Config\PimcoreAdmin\SessionConfig($config['session']);
            unset($config['session']);
        }

        if (array_key_exists('translations', $config)) {
            $this->_usedProperties['translations'] = true;
            $this->translations = new \Symfony\Config\PimcoreAdmin\TranslationsConfig($config['translations']);
            unset($config['translations']);
        }

        if (array_key_exists('security_firewall', $config)) {
            $this->_usedProperties['securityFirewall'] = true;
            $this->securityFirewall = $config['security_firewall'];
            unset($config['security_firewall']);
        }

        if (array_key_exists('config_location', $config)) {
            $this->_usedProperties['configLocation'] = true;
            $this->configLocation = new \Symfony\Config\PimcoreAdmin\ConfigLocationConfig($config['config_location']);
            unset($config['config_location']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['gdprDataExtractor'])) {
            $output['gdpr_data_extractor'] = $this->gdprDataExtractor->toArray();
        }
        if (isset($this->_usedProperties['objects'])) {
            $output['objects'] = $this->objects->toArray();
        }
        if (isset($this->_usedProperties['assets'])) {
            $output['assets'] = $this->assets->toArray();
        }
        if (isset($this->_usedProperties['documents'])) {
            $output['documents'] = $this->documents->toArray();
        }
        if (isset($this->_usedProperties['notifications'])) {
            $output['notifications'] = $this->notifications instanceof \Symfony\Config\PimcoreAdmin\NotificationsConfig ? $this->notifications->toArray() : $this->notifications;
        }
        if (isset($this->_usedProperties['user'])) {
            $output['user'] = $this->user->toArray();
        }
        if (isset($this->_usedProperties['adminLanguages'])) {
            $output['admin_languages'] = $this->adminLanguages;
        }
        if (isset($this->_usedProperties['export'])) {
            $output['export'] = $this->export->toArray();
        }
        if (isset($this->_usedProperties['csrfProtection'])) {
            $output['csrf_protection'] = $this->csrfProtection->toArray();
        }
        if (isset($this->_usedProperties['adminCspHeader'])) {
            $output['admin_csp_header'] = $this->adminCspHeader instanceof \Symfony\Config\PimcoreAdmin\AdminCspHeaderConfig ? $this->adminCspHeader->toArray() : $this->adminCspHeader;
        }
        if (isset($this->_usedProperties['customAdminPathIdentifier'])) {
            $output['custom_admin_path_identifier'] = $this->customAdminPathIdentifier;
        }
        if (isset($this->_usedProperties['customAdminRouteName'])) {
            $output['custom_admin_route_name'] = $this->customAdminRouteName;
        }
        if (isset($this->_usedProperties['branding'])) {
            $output['branding'] = $this->branding->toArray();
        }
        if (isset($this->_usedProperties['session'])) {
            $output['session'] = $this->session->toArray();
        }
        if (isset($this->_usedProperties['translations'])) {
            $output['translations'] = $this->translations->toArray();
        }
        if (isset($this->_usedProperties['securityFirewall'])) {
            $output['security_firewall'] = $this->securityFirewall;
        }
        if (isset($this->_usedProperties['configLocation'])) {
            $output['config_location'] = $this->configLocation->toArray();
        }
        if ($this->_hasDeprecatedCalls) {
            trigger_deprecation('symfony/config', '7.4', 'Calling any fluent method on "%s" is deprecated; pass the configuration to the constructor instead.', $this::class);
        }

        return $output;
    }

}
