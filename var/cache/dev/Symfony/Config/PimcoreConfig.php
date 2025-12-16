<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'BundlesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'TranslationsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'MapsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'GeneralConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'MaintenanceConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'ObjectsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'AssetsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'DocumentsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'EncryptionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'ModelsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'RoutingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'FullPageCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'ContextConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'WebProfilerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'SecurityConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'EmailConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'WorkflowsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'HttpclientConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'ApplicationlogConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'PropertiesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'PerspectivesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'CustomViewsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'TemplatingEngineConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'GotenbergConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'DependencyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'ProductRegistrationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Pimcore'.\DIRECTORY_SEPARATOR.'ConfigLocationConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class PimcoreConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $bundles;
    private $flags;
    private $translations;
    private $maps;
    private $general;
    private $maintenance;
    private $objects;
    private $assets;
    private $documents;
    private $encryption;
    private $models;
    private $routing;
    private $fullPageCache;
    private $context;
    private $webProfiler;
    private $security;
    private $email;
    private $workflows;
    private $httpclient;
    private $applicationlog;
    private $properties;
    private $perspectives;
    private $customViews;
    private $templatingEngine;
    private $gotenberg;
    private $dependency;
    private $productRegistration;
    private $configLocation;
    private $_usedProperties = [];
    private $_hasDeprecatedCalls = false;

    /**
     * Define parameters for Pimcore Bundle Locator
     * @default {"search_paths":[],"handle_composer":true}
     * @deprecated since Symfony 7.4
     */
    public function bundles(array $value = []): \Symfony\Config\Pimcore\BundlesConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->bundles) {
            $this->_usedProperties['bundles'] = true;
            $this->bundles = new \Symfony\Config\Pimcore\BundlesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "bundles()" has already been initialized. You cannot pass values the second time you call bundles().');
        }

        return $this->bundles;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function flags(ParamConfigurator|array $value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['flags'] = true;
        $this->flags = $value;

        return $this;
    }

    /**
     * @default {"domains":[],"admin_translation_mapping":[],"debugging":{"enabled":true,"parameter":"pimcore_debug_translations"}}
     * @deprecated since Symfony 7.4
     */
    public function translations(array $value = []): \Symfony\Config\Pimcore\TranslationsConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->translations) {
            $this->_usedProperties['translations'] = true;
            $this->translations = new \Symfony\Config\Pimcore\TranslationsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "translations()" has already been initialized. You cannot pass values the second time you call translations().');
        }

        return $this->translations;
    }

    /**
     * @default {"tile_layer_url_template":"https:\/\/a.tile.openstreetmap.org\/{z}\/{x}\/{y}.png","geocoding_url_template":"https:\/\/nominatim.openstreetmap.org\/search?q={q}&addressdetails=1&format=json&limit=1","reverse_geocoding_url_template":"https:\/\/nominatim.openstreetmap.org\/reverse?format=json&lat={lat}&lon={lon}&addressdetails=1"}
     * @deprecated since Symfony 7.4
     */
    public function maps(array $value = []): \Symfony\Config\Pimcore\MapsConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->maps) {
            $this->_usedProperties['maps'] = true;
            $this->maps = new \Symfony\Config\Pimcore\MapsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "maps()" has already been initialized. You cannot pass values the second time you call maps().');
        }

        return $this->maps;
    }

    /**
     * @default {"timezone":"","path_variable":null,"domain":"","redirect_to_maindomain":false,"language":"en","valid_languages":["en","de","fr"],"required_languages":[],"fallback_languages":[],"default_language":"en","disable_usage_statistics":false,"debug_admin_translations":false}
     * @deprecated since Symfony 7.4
     */
    public function general(array $value = []): \Symfony\Config\Pimcore\GeneralConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->general) {
            $this->_usedProperties['general'] = true;
            $this->general = new \Symfony\Config\Pimcore\GeneralConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "general()" has already been initialized. You cannot pass values the second time you call general().');
        }

        return $this->general;
    }

    /**
     * @default {"housekeeping":{"cleanup_tmp_files_atime_older_than":86400,"cleanup_profiler_files_atime_older_than":1800}}
     * @deprecated since Symfony 7.4
     */
    public function maintenance(array $value = []): \Symfony\Config\Pimcore\MaintenanceConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->maintenance) {
            $this->_usedProperties['maintenance'] = true;
            $this->maintenance = new \Symfony\Config\Pimcore\MaintenanceConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "maintenance()" has already been initialized. You cannot pass values the second time you call maintenance().');
        }

        return $this->maintenance;
    }

    /**
     * @default {"ignore_localized_query_fallback":false,"tree_paging_limit":30,"auto_save_interval":60,"custom_layouts":{"definitions":[]},"select_options":{"definitions":[]},"class_definitions":{"data":{"map":[],"prefixes":[]},"layout":{"map":[],"prefixes":[]}}}
     * @deprecated since Symfony 7.4
     */
    public function objects(array $value = []): \Symfony\Config\Pimcore\ObjectsConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->objects) {
            $this->_usedProperties['objects'] = true;
            $this->objects = new \Symfony\Config\Pimcore\ObjectsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "objects()" has already been initialized. You cannot pass values the second time you call objects().');
        }

        return $this->objects;
    }

    /**
     * @default {"thumbnails":{"allowed_formats":["avif","eps","gif","jpeg","jpg","pjpeg","png","svg","tiff","webm","webp","print"],"max_scaling_factor":5},"frontend_prefixes":{"source":"","thumbnail":"","thumbnail_deferred":""},"preview_image_thumbnail":null,"default_upload_path":"_default_upload_bucket","tree_paging_limit":100,"image":{"max_pixels":40000000,"low_quality_image_preview":{"enabled":true},"thumbnails":{"definitions":[],"clip_auto_support":true,"max_srcset_dpi_factor":2,"image_optimizers":{"enabled":true},"auto_formats":{"avif":{"enabled":true,"quality":50},"webp":{"enabled":true,"quality":null}},"status_cache":true,"auto_clear_temp_files":true}},"video":{"thumbnails":{"definitions":[],"auto_clear_temp_files":true}},"document":{"thumbnails":{"enabled":true},"process_page_count":true,"process_text":true,"scan_pdf":true,"open_pdf_in_new_tab":"only-unsafe"},"versions":{"days":null,"steps":null,"disable_events":false,"use_hardlinks":true,"disable_stack_trace":false},"icc_rgb_profile":null,"icc_cmyk_profile":null,"metadata":{"alt":"","copyright":"","title":"","predefined":{"definitions":[]}},"type_definitions":{"map":[]}}
     * @deprecated since Symfony 7.4
     */
    public function assets(array $value = []): \Symfony\Config\Pimcore\AssetsConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->assets) {
            $this->_usedProperties['assets'] = true;
            $this->assets = new \Symfony\Config\Pimcore\AssetsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "assets()" has already been initialized. You cannot pass values the second time you call assets().');
        }

        return $this->assets;
    }

    /**
     * @default {"doc_types":{"definitions":[]},"default_controller":"App\\Controller\\DefaultController::defaultAction","allow_trailing_slash":"no","generate_preview":false,"preview_url_prefix":"","tree_paging_limit":50,"editables":{"map":[],"prefixes":[]},"areas":{"autoload":true},"auto_save_interval":60,"static_page_router":{"enabled":false,"route_pattern":null},"static_page_generator":{"use_main_domain":false,"headers":[]},"type_definitions":{"map":[]}}
     * @deprecated since Symfony 7.4
     */
    public function documents(array $value = []): \Symfony\Config\Pimcore\DocumentsConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->documents) {
            $this->_usedProperties['documents'] = true;
            $this->documents = new \Symfony\Config\Pimcore\DocumentsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "documents()" has already been initialized. You cannot pass values the second time you call documents().');
        }

        return $this->documents;
    }

    /**
     * @default {"secret":null}
     * @deprecated since Symfony 7.4
     */
    public function encryption(array $value = []): \Symfony\Config\Pimcore\EncryptionConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->encryption) {
            $this->_usedProperties['encryption'] = true;
            $this->encryption = new \Symfony\Config\Pimcore\EncryptionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "encryption()" has already been initialized. You cannot pass values the second time you call encryption().');
        }

        return $this->encryption;
    }

    /**
     * @default {"class_overrides":[]}
     * @deprecated since Symfony 7.4
     */
    public function models(array $value = []): \Symfony\Config\Pimcore\ModelsConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->models) {
            $this->_usedProperties['models'] = true;
            $this->models = new \Symfony\Config\Pimcore\ModelsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "models()" has already been initialized. You cannot pass values the second time you call models().');
        }

        return $this->models;
    }

    /**
     * @default {"static":{"locale_params":[]}}
     * @deprecated since Symfony 7.4
     */
    public function routing(array $value = []): \Symfony\Config\Pimcore\RoutingConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->routing) {
            $this->_usedProperties['routing'] = true;
            $this->routing = new \Symfony\Config\Pimcore\RoutingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "routing()" has already been initialized. You cannot pass values the second time you call routing().');
        }

        return $this->routing;
    }

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * @default {"enabled":true,"lifetime":null}
     * @return \Symfony\Config\Pimcore\FullPageCacheConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pimcore\FullPageCacheConfig : static)
     * @deprecated since Symfony 7.4
     */
    public function fullPageCache(array|bool $value = []): \Symfony\Config\Pimcore\FullPageCacheConfig|static
    {
        $this->_hasDeprecatedCalls = true;
        if (!\is_array($value)) {
            $this->_usedProperties['fullPageCache'] = true;
            $this->fullPageCache = $value;

            return $this;
        }

        if (!$this->fullPageCache instanceof \Symfony\Config\Pimcore\FullPageCacheConfig) {
            $this->_usedProperties['fullPageCache'] = true;
            $this->fullPageCache = new \Symfony\Config\Pimcore\FullPageCacheConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "fullPageCache()" has already been initialized. You cannot pass values the second time you call fullPageCache().');
        }

        return $this->fullPageCache;
    }

    /**
     * @deprecated since Symfony 7.4
     */
    public function context(string $name, array $value = []): \Symfony\Config\Pimcore\ContextConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (!isset($this->context[$name])) {
            $this->_usedProperties['context'] = true;
            $this->context[$name] = new \Symfony\Config\Pimcore\ContextConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "context()" has already been initialized. You cannot pass values the second time you call context().');
        }

        return $this->context[$name];
    }

    /**
     * @example {"excluded_routes":[{"path":"^\/test\/path"}]}
     * @default {"toolbar":{"excluded_routes":[]}}
     * @deprecated since Symfony 7.4
     */
    public function webProfiler(array $value = []): \Symfony\Config\Pimcore\WebProfilerConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->webProfiler) {
            $this->_usedProperties['webProfiler'] = true;
            $this->webProfiler = new \Symfony\Config\Pimcore\WebProfilerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "webProfiler()" has already been initialized. You cannot pass values the second time you call webProfiler().');
        }

        return $this->webProfiler;
    }

    /**
     * @default {"password":{"algorithm":"2y","options":[]},"factory_type":"encoder","encoder_factories":[],"password_hasher_factories":[]}
     * @deprecated since Symfony 7.4
     */
    public function security(array $value = []): \Symfony\Config\Pimcore\SecurityConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->security) {
            $this->_usedProperties['security'] = true;
            $this->security = new \Symfony\Config\Pimcore\SecurityConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "security()" has already been initialized. You cannot pass values the second time you call security().');
        }

        return $this->security;
    }

    /**
     * @default {"sender":{"name":"","email":""},"return":{"name":"","email":""},"debug":{"email_addresses":""},"usespecific":false}
     * @deprecated since Symfony 7.4
     */
    public function email(array $value = []): \Symfony\Config\Pimcore\EmailConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->email) {
            $this->_usedProperties['email'] = true;
            $this->email = new \Symfony\Config\Pimcore\EmailConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "email()" has already been initialized. You cannot pass values the second time you call email().');
        }

        return $this->email;
    }

    /**
     * @deprecated since Symfony 7.4
     */
    public function workflows(string $name, array $value = []): \Symfony\Config\Pimcore\WorkflowsConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (!isset($this->workflows[$name])) {
            $this->_usedProperties['workflows'] = true;
            $this->workflows[$name] = new \Symfony\Config\Pimcore\WorkflowsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "workflows()" has already been initialized. You cannot pass values the second time you call workflows().');
        }

        return $this->workflows[$name];
    }

    /**
     * @default {"adapter":"Socket","proxy_host":null,"proxy_port":null,"proxy_user":null,"proxy_pass":null}
     * @deprecated since Symfony 7.4
     */
    public function httpclient(array $value = []): \Symfony\Config\Pimcore\HttpclientConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->httpclient) {
            $this->_usedProperties['httpclient'] = true;
            $this->httpclient = new \Symfony\Config\Pimcore\HttpclientConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "httpclient()" has already been initialized. You cannot pass values the second time you call httpclient().');
        }

        return $this->httpclient;
    }

    /**
     * @default {"loggers":[],"archive_treshold":30,"archive_alternative_database":"","archive_db_table_storage_engine":"archive","delete_archive_threshold":"6"}
     * @deprecated since Symfony 7.4
     */
    public function applicationlog(array $value = []): \Symfony\Config\Pimcore\ApplicationlogConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->applicationlog) {
            $this->_usedProperties['applicationlog'] = true;
            $this->applicationlog = new \Symfony\Config\Pimcore\ApplicationlogConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "applicationlog()" has already been initialized. You cannot pass values the second time you call applicationlog().');
        }

        return $this->applicationlog;
    }

    /**
     * @default {"predefined":{"definitions":[]}}
     * @deprecated since Symfony 7.4
     */
    public function properties(array $value = []): \Symfony\Config\Pimcore\PropertiesConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->properties) {
            $this->_usedProperties['properties'] = true;
            $this->properties = new \Symfony\Config\Pimcore\PropertiesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "properties()" has already been initialized. You cannot pass values the second time you call properties().');
        }

        return $this->properties;
    }

    /**
     * @default {"definitions":[]}
     * @deprecated since Symfony 7.4
     */
    public function perspectives(array $value = []): \Symfony\Config\Pimcore\PerspectivesConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->perspectives) {
            $this->_usedProperties['perspectives'] = true;
            $this->perspectives = new \Symfony\Config\Pimcore\PerspectivesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "perspectives()" has already been initialized. You cannot pass values the second time you call perspectives().');
        }

        return $this->perspectives;
    }

    /**
     * @default {"definitions":[]}
     * @deprecated since Symfony 7.4
     */
    public function customViews(array $value = []): \Symfony\Config\Pimcore\CustomViewsConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->customViews) {
            $this->_usedProperties['customViews'] = true;
            $this->customViews = new \Symfony\Config\Pimcore\CustomViewsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "customViews()" has already been initialized. You cannot pass values the second time you call customViews().');
        }

        return $this->customViews;
    }

    /**
     * @default {"twig":[]}
     * @deprecated since Symfony 7.4
     */
    public function templatingEngine(array $value = []): \Symfony\Config\Pimcore\TemplatingEngineConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->templatingEngine) {
            $this->_usedProperties['templatingEngine'] = true;
            $this->templatingEngine = new \Symfony\Config\Pimcore\TemplatingEngineConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "templatingEngine()" has already been initialized. You cannot pass values the second time you call templatingEngine().');
        }

        return $this->templatingEngine;
    }

    /**
     * @default {"base_url":"http:\/\/gotenberg:3000","ping_cache_ttl":60}
     * @deprecated since Symfony 7.4
     */
    public function gotenberg(array $value = []): \Symfony\Config\Pimcore\GotenbergConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->gotenberg) {
            $this->_usedProperties['gotenberg'] = true;
            $this->gotenberg = new \Symfony\Config\Pimcore\GotenbergConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "gotenberg()" has already been initialized. You cannot pass values the second time you call gotenberg().');
        }

        return $this->gotenberg;
    }

    /**
     * @default {"enabled":true}
     * @deprecated since Symfony 7.4
     */
    public function dependency(array $value = []): \Symfony\Config\Pimcore\DependencyConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->dependency) {
            $this->_usedProperties['dependency'] = true;
            $this->dependency = new \Symfony\Config\Pimcore\DependencyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "dependency()" has already been initialized. You cannot pass values the second time you call dependency().');
        }

        return $this->dependency;
    }

    /**
     * @deprecated since Symfony 7.4
     */
    public function productRegistration(array $value = []): \Symfony\Config\Pimcore\ProductRegistrationConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->productRegistration) {
            $this->_usedProperties['productRegistration'] = true;
            $this->productRegistration = new \Symfony\Config\Pimcore\ProductRegistrationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "productRegistration()" has already been initialized. You cannot pass values the second time you call productRegistration().');
        }

        return $this->productRegistration;
    }

    /**
     * @default {"image_thumbnails":{"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/image_thumbnails"}}},"video_thumbnails":{"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/video_thumbnails"}}},"document_types":{"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/document_types"}}},"predefined_properties":{"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/predefined_properties"}}},"predefined_asset_metadata":{"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/predefined_asset_metadata"}}},"perspectives":{"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/perspectives"}}},"custom_views":{"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/custom_views"}}},"object_custom_layouts":{"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/object_custom_layouts"}}},"system_settings":{"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/system_settings"}},"read_target":{"type":null,"options":{"directory":null}}},"select_options":{"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/select_options"}},"read_target":{"type":null,"options":{"directory":null}}}}
     * @deprecated since Symfony 7.4
     */
    public function configLocation(array $value = []): \Symfony\Config\Pimcore\ConfigLocationConfig
    {
        $this->_hasDeprecatedCalls = true;
        if (null === $this->configLocation) {
            $this->_usedProperties['configLocation'] = true;
            $this->configLocation = new \Symfony\Config\Pimcore\ConfigLocationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "configLocation()" has already been initialized. You cannot pass values the second time you call configLocation().');
        }

        return $this->configLocation;
    }

    public function getExtensionAlias(): string
    {
        return 'pimcore';
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('bundles', $config)) {
            $this->_usedProperties['bundles'] = true;
            $this->bundles = new \Symfony\Config\Pimcore\BundlesConfig($config['bundles']);
            unset($config['bundles']);
        }

        if (array_key_exists('flags', $config)) {
            $this->_usedProperties['flags'] = true;
            $this->flags = $config['flags'];
            unset($config['flags']);
        }

        if (array_key_exists('translations', $config)) {
            $this->_usedProperties['translations'] = true;
            $this->translations = new \Symfony\Config\Pimcore\TranslationsConfig($config['translations']);
            unset($config['translations']);
        }

        if (array_key_exists('maps', $config)) {
            $this->_usedProperties['maps'] = true;
            $this->maps = new \Symfony\Config\Pimcore\MapsConfig($config['maps']);
            unset($config['maps']);
        }

        if (array_key_exists('general', $config)) {
            $this->_usedProperties['general'] = true;
            $this->general = new \Symfony\Config\Pimcore\GeneralConfig($config['general']);
            unset($config['general']);
        }

        if (array_key_exists('maintenance', $config)) {
            $this->_usedProperties['maintenance'] = true;
            $this->maintenance = new \Symfony\Config\Pimcore\MaintenanceConfig($config['maintenance']);
            unset($config['maintenance']);
        }

        if (array_key_exists('objects', $config)) {
            $this->_usedProperties['objects'] = true;
            $this->objects = new \Symfony\Config\Pimcore\ObjectsConfig($config['objects']);
            unset($config['objects']);
        }

        if (array_key_exists('assets', $config)) {
            $this->_usedProperties['assets'] = true;
            $this->assets = new \Symfony\Config\Pimcore\AssetsConfig($config['assets']);
            unset($config['assets']);
        }

        if (array_key_exists('documents', $config)) {
            $this->_usedProperties['documents'] = true;
            $this->documents = new \Symfony\Config\Pimcore\DocumentsConfig($config['documents']);
            unset($config['documents']);
        }

        if (array_key_exists('encryption', $config)) {
            $this->_usedProperties['encryption'] = true;
            $this->encryption = new \Symfony\Config\Pimcore\EncryptionConfig($config['encryption']);
            unset($config['encryption']);
        }

        if (array_key_exists('models', $config)) {
            $this->_usedProperties['models'] = true;
            $this->models = new \Symfony\Config\Pimcore\ModelsConfig($config['models']);
            unset($config['models']);
        }

        if (array_key_exists('routing', $config)) {
            $this->_usedProperties['routing'] = true;
            $this->routing = new \Symfony\Config\Pimcore\RoutingConfig($config['routing']);
            unset($config['routing']);
        }

        if (array_key_exists('full_page_cache', $config)) {
            $this->_usedProperties['fullPageCache'] = true;
            $this->fullPageCache = \is_array($config['full_page_cache']) ? new \Symfony\Config\Pimcore\FullPageCacheConfig($config['full_page_cache']) : $config['full_page_cache'];
            unset($config['full_page_cache']);
        }

        if (array_key_exists('context', $config)) {
            $this->_usedProperties['context'] = true;
            $this->context = array_map(fn ($v) => new \Symfony\Config\Pimcore\ContextConfig($v), $config['context']);
            unset($config['context']);
        }

        if (array_key_exists('web_profiler', $config)) {
            $this->_usedProperties['webProfiler'] = true;
            $this->webProfiler = new \Symfony\Config\Pimcore\WebProfilerConfig($config['web_profiler']);
            unset($config['web_profiler']);
        }

        if (array_key_exists('security', $config)) {
            $this->_usedProperties['security'] = true;
            $this->security = new \Symfony\Config\Pimcore\SecurityConfig($config['security']);
            unset($config['security']);
        }

        if (array_key_exists('email', $config)) {
            $this->_usedProperties['email'] = true;
            $this->email = new \Symfony\Config\Pimcore\EmailConfig($config['email']);
            unset($config['email']);
        }

        if (array_key_exists('workflows', $config)) {
            $this->_usedProperties['workflows'] = true;
            $this->workflows = array_map(fn ($v) => new \Symfony\Config\Pimcore\WorkflowsConfig($v), $config['workflows']);
            unset($config['workflows']);
        }

        if (array_key_exists('httpclient', $config)) {
            $this->_usedProperties['httpclient'] = true;
            $this->httpclient = new \Symfony\Config\Pimcore\HttpclientConfig($config['httpclient']);
            unset($config['httpclient']);
        }

        if (array_key_exists('applicationlog', $config)) {
            $this->_usedProperties['applicationlog'] = true;
            $this->applicationlog = new \Symfony\Config\Pimcore\ApplicationlogConfig($config['applicationlog']);
            unset($config['applicationlog']);
        }

        if (array_key_exists('properties', $config)) {
            $this->_usedProperties['properties'] = true;
            $this->properties = new \Symfony\Config\Pimcore\PropertiesConfig($config['properties']);
            unset($config['properties']);
        }

        if (array_key_exists('perspectives', $config)) {
            $this->_usedProperties['perspectives'] = true;
            $this->perspectives = new \Symfony\Config\Pimcore\PerspectivesConfig($config['perspectives']);
            unset($config['perspectives']);
        }

        if (array_key_exists('custom_views', $config)) {
            $this->_usedProperties['customViews'] = true;
            $this->customViews = new \Symfony\Config\Pimcore\CustomViewsConfig($config['custom_views']);
            unset($config['custom_views']);
        }

        if (array_key_exists('templating_engine', $config)) {
            $this->_usedProperties['templatingEngine'] = true;
            $this->templatingEngine = new \Symfony\Config\Pimcore\TemplatingEngineConfig($config['templating_engine']);
            unset($config['templating_engine']);
        }

        if (array_key_exists('gotenberg', $config)) {
            $this->_usedProperties['gotenberg'] = true;
            $this->gotenberg = new \Symfony\Config\Pimcore\GotenbergConfig($config['gotenberg']);
            unset($config['gotenberg']);
        }

        if (array_key_exists('dependency', $config)) {
            $this->_usedProperties['dependency'] = true;
            $this->dependency = new \Symfony\Config\Pimcore\DependencyConfig($config['dependency']);
            unset($config['dependency']);
        }

        if (array_key_exists('product_registration', $config)) {
            $this->_usedProperties['productRegistration'] = true;
            $this->productRegistration = new \Symfony\Config\Pimcore\ProductRegistrationConfig($config['product_registration']);
            unset($config['product_registration']);
        }

        if (array_key_exists('config_location', $config)) {
            $this->_usedProperties['configLocation'] = true;
            $this->configLocation = new \Symfony\Config\Pimcore\ConfigLocationConfig($config['config_location']);
            unset($config['config_location']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['bundles'])) {
            $output['bundles'] = $this->bundles->toArray();
        }
        if (isset($this->_usedProperties['flags'])) {
            $output['flags'] = $this->flags;
        }
        if (isset($this->_usedProperties['translations'])) {
            $output['translations'] = $this->translations->toArray();
        }
        if (isset($this->_usedProperties['maps'])) {
            $output['maps'] = $this->maps->toArray();
        }
        if (isset($this->_usedProperties['general'])) {
            $output['general'] = $this->general->toArray();
        }
        if (isset($this->_usedProperties['maintenance'])) {
            $output['maintenance'] = $this->maintenance->toArray();
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
        if (isset($this->_usedProperties['encryption'])) {
            $output['encryption'] = $this->encryption->toArray();
        }
        if (isset($this->_usedProperties['models'])) {
            $output['models'] = $this->models->toArray();
        }
        if (isset($this->_usedProperties['routing'])) {
            $output['routing'] = $this->routing->toArray();
        }
        if (isset($this->_usedProperties['fullPageCache'])) {
            $output['full_page_cache'] = $this->fullPageCache instanceof \Symfony\Config\Pimcore\FullPageCacheConfig ? $this->fullPageCache->toArray() : $this->fullPageCache;
        }
        if (isset($this->_usedProperties['context'])) {
            $output['context'] = array_map(fn ($v) => $v->toArray(), $this->context);
        }
        if (isset($this->_usedProperties['webProfiler'])) {
            $output['web_profiler'] = $this->webProfiler->toArray();
        }
        if (isset($this->_usedProperties['security'])) {
            $output['security'] = $this->security->toArray();
        }
        if (isset($this->_usedProperties['email'])) {
            $output['email'] = $this->email->toArray();
        }
        if (isset($this->_usedProperties['workflows'])) {
            $output['workflows'] = array_map(fn ($v) => $v->toArray(), $this->workflows);
        }
        if (isset($this->_usedProperties['httpclient'])) {
            $output['httpclient'] = $this->httpclient->toArray();
        }
        if (isset($this->_usedProperties['applicationlog'])) {
            $output['applicationlog'] = $this->applicationlog->toArray();
        }
        if (isset($this->_usedProperties['properties'])) {
            $output['properties'] = $this->properties->toArray();
        }
        if (isset($this->_usedProperties['perspectives'])) {
            $output['perspectives'] = $this->perspectives->toArray();
        }
        if (isset($this->_usedProperties['customViews'])) {
            $output['custom_views'] = $this->customViews->toArray();
        }
        if (isset($this->_usedProperties['templatingEngine'])) {
            $output['templating_engine'] = $this->templatingEngine->toArray();
        }
        if (isset($this->_usedProperties['gotenberg'])) {
            $output['gotenberg'] = $this->gotenberg->toArray();
        }
        if (isset($this->_usedProperties['dependency'])) {
            $output['dependency'] = $this->dependency->toArray();
        }
        if (isset($this->_usedProperties['productRegistration'])) {
            $output['product_registration'] = $this->productRegistration->toArray();
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
