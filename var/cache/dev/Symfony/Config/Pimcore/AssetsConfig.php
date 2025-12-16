<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Assets'.\DIRECTORY_SEPARATOR.'ThumbnailsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Assets'.\DIRECTORY_SEPARATOR.'FrontendPrefixesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Assets'.\DIRECTORY_SEPARATOR.'ImageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Assets'.\DIRECTORY_SEPARATOR.'VideoConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Assets'.\DIRECTORY_SEPARATOR.'DocumentConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Assets'.\DIRECTORY_SEPARATOR.'VersionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Assets'.\DIRECTORY_SEPARATOR.'MetadataConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Assets'.\DIRECTORY_SEPARATOR.'TypeDefinitionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class AssetsConfig 
{
    private $thumbnails;
    private $frontendPrefixes;
    private $previewImageThumbnail;
    private $defaultUploadPath;
    private $treePagingLimit;
    private $image;
    private $video;
    private $document;
    private $versions;
    private $iccRgbProfile;
    private $iccCmykProfile;
    private $metadata;
    private $typeDefinitions;
    private $_usedProperties = [];

    /**
     * @default {"allowed_formats":["avif","eps","gif","jpeg","jpg","pjpeg","png","svg","tiff","webm","webp","print"],"max_scaling_factor":5}
     */
    public function thumbnails(array $value = []): \Symfony\Config\Pimcore\Assets\ThumbnailsConfig
    {
        if (null === $this->thumbnails) {
            $this->_usedProperties['thumbnails'] = true;
            $this->thumbnails = new \Symfony\Config\Pimcore\Assets\ThumbnailsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "thumbnails()" has already been initialized. You cannot pass values the second time you call thumbnails().');
        }

        return $this->thumbnails;
    }

    /**
     * @default {"source":"","thumbnail":"","thumbnail_deferred":""}
     */
    public function frontendPrefixes(array $value = []): \Symfony\Config\Pimcore\Assets\FrontendPrefixesConfig
    {
        if (null === $this->frontendPrefixes) {
            $this->_usedProperties['frontendPrefixes'] = true;
            $this->frontendPrefixes = new \Symfony\Config\Pimcore\Assets\FrontendPrefixesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "frontendPrefixes()" has already been initialized. You cannot pass values the second time you call frontendPrefixes().');
        }

        return $this->frontendPrefixes;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function previewImageThumbnail($value): static
    {
        $this->_usedProperties['previewImageThumbnail'] = true;
        $this->previewImageThumbnail = $value;

        return $this;
    }

    /**
     * @default '_default_upload_bucket'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultUploadPath($value): static
    {
        $this->_usedProperties['defaultUploadPath'] = true;
        $this->defaultUploadPath = $value;

        return $this;
    }

    /**
     * @default 100
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function treePagingLimit($value): static
    {
        $this->_usedProperties['treePagingLimit'] = true;
        $this->treePagingLimit = $value;

        return $this;
    }

    /**
     * @default {"max_pixels":40000000,"low_quality_image_preview":{"enabled":true},"thumbnails":{"definitions":[],"clip_auto_support":true,"max_srcset_dpi_factor":2,"image_optimizers":{"enabled":true},"auto_formats":{"avif":{"enabled":true,"quality":50},"webp":{"enabled":true,"quality":null}},"status_cache":true,"auto_clear_temp_files":true}}
     */
    public function image(array $value = []): \Symfony\Config\Pimcore\Assets\ImageConfig
    {
        if (null === $this->image) {
            $this->_usedProperties['image'] = true;
            $this->image = new \Symfony\Config\Pimcore\Assets\ImageConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "image()" has already been initialized. You cannot pass values the second time you call image().');
        }

        return $this->image;
    }

    /**
     * @default {"thumbnails":{"definitions":[],"auto_clear_temp_files":true}}
     */
    public function video(array $value = []): \Symfony\Config\Pimcore\Assets\VideoConfig
    {
        if (null === $this->video) {
            $this->_usedProperties['video'] = true;
            $this->video = new \Symfony\Config\Pimcore\Assets\VideoConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "video()" has already been initialized. You cannot pass values the second time you call video().');
        }

        return $this->video;
    }

    /**
     * @default {"thumbnails":{"enabled":true},"process_page_count":true,"process_text":true,"scan_pdf":true,"open_pdf_in_new_tab":"only-unsafe"}
     */
    public function document(array $value = []): \Symfony\Config\Pimcore\Assets\DocumentConfig
    {
        if (null === $this->document) {
            $this->_usedProperties['document'] = true;
            $this->document = new \Symfony\Config\Pimcore\Assets\DocumentConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "document()" has already been initialized. You cannot pass values the second time you call document().');
        }

        return $this->document;
    }

    /**
     * @default {"days":null,"steps":null,"disable_events":false,"use_hardlinks":true,"disable_stack_trace":false}
     */
    public function versions(array $value = []): \Symfony\Config\Pimcore\Assets\VersionsConfig
    {
        if (null === $this->versions) {
            $this->_usedProperties['versions'] = true;
            $this->versions = new \Symfony\Config\Pimcore\Assets\VersionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "versions()" has already been initialized. You cannot pass values the second time you call versions().');
        }

        return $this->versions;
    }

    /**
     * Absolute path to default ICC RGB profile (if no embedded profile is given)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function iccRgbProfile($value): static
    {
        $this->_usedProperties['iccRgbProfile'] = true;
        $this->iccRgbProfile = $value;

        return $this;
    }

    /**
     * Absolute path to default ICC CMYK profile (if no embedded profile is given)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function iccCmykProfile($value): static
    {
        $this->_usedProperties['iccCmykProfile'] = true;
        $this->iccCmykProfile = $value;

        return $this;
    }

    /**
     * @default {"alt":"","copyright":"","title":"","predefined":{"definitions":[]}}
     */
    public function metadata(array $value = []): \Symfony\Config\Pimcore\Assets\MetadataConfig
    {
        if (null === $this->metadata) {
            $this->_usedProperties['metadata'] = true;
            $this->metadata = new \Symfony\Config\Pimcore\Assets\MetadataConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "metadata()" has already been initialized. You cannot pass values the second time you call metadata().');
        }

        return $this->metadata;
    }

    /**
     * @default {"map":[]}
     */
    public function typeDefinitions(array $value = []): \Symfony\Config\Pimcore\Assets\TypeDefinitionsConfig
    {
        if (null === $this->typeDefinitions) {
            $this->_usedProperties['typeDefinitions'] = true;
            $this->typeDefinitions = new \Symfony\Config\Pimcore\Assets\TypeDefinitionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "typeDefinitions()" has already been initialized. You cannot pass values the second time you call typeDefinitions().');
        }

        return $this->typeDefinitions;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('thumbnails', $config)) {
            $this->_usedProperties['thumbnails'] = true;
            $this->thumbnails = new \Symfony\Config\Pimcore\Assets\ThumbnailsConfig($config['thumbnails']);
            unset($config['thumbnails']);
        }

        if (array_key_exists('frontend_prefixes', $config)) {
            $this->_usedProperties['frontendPrefixes'] = true;
            $this->frontendPrefixes = new \Symfony\Config\Pimcore\Assets\FrontendPrefixesConfig($config['frontend_prefixes']);
            unset($config['frontend_prefixes']);
        }

        if (array_key_exists('preview_image_thumbnail', $config)) {
            $this->_usedProperties['previewImageThumbnail'] = true;
            $this->previewImageThumbnail = $config['preview_image_thumbnail'];
            unset($config['preview_image_thumbnail']);
        }

        if (array_key_exists('default_upload_path', $config)) {
            $this->_usedProperties['defaultUploadPath'] = true;
            $this->defaultUploadPath = $config['default_upload_path'];
            unset($config['default_upload_path']);
        }

        if (array_key_exists('tree_paging_limit', $config)) {
            $this->_usedProperties['treePagingLimit'] = true;
            $this->treePagingLimit = $config['tree_paging_limit'];
            unset($config['tree_paging_limit']);
        }

        if (array_key_exists('image', $config)) {
            $this->_usedProperties['image'] = true;
            $this->image = new \Symfony\Config\Pimcore\Assets\ImageConfig($config['image']);
            unset($config['image']);
        }

        if (array_key_exists('video', $config)) {
            $this->_usedProperties['video'] = true;
            $this->video = new \Symfony\Config\Pimcore\Assets\VideoConfig($config['video']);
            unset($config['video']);
        }

        if (array_key_exists('document', $config)) {
            $this->_usedProperties['document'] = true;
            $this->document = new \Symfony\Config\Pimcore\Assets\DocumentConfig($config['document']);
            unset($config['document']);
        }

        if (array_key_exists('versions', $config)) {
            $this->_usedProperties['versions'] = true;
            $this->versions = new \Symfony\Config\Pimcore\Assets\VersionsConfig($config['versions']);
            unset($config['versions']);
        }

        if (array_key_exists('icc_rgb_profile', $config)) {
            $this->_usedProperties['iccRgbProfile'] = true;
            $this->iccRgbProfile = $config['icc_rgb_profile'];
            unset($config['icc_rgb_profile']);
        }

        if (array_key_exists('icc_cmyk_profile', $config)) {
            $this->_usedProperties['iccCmykProfile'] = true;
            $this->iccCmykProfile = $config['icc_cmyk_profile'];
            unset($config['icc_cmyk_profile']);
        }

        if (array_key_exists('metadata', $config)) {
            $this->_usedProperties['metadata'] = true;
            $this->metadata = new \Symfony\Config\Pimcore\Assets\MetadataConfig($config['metadata']);
            unset($config['metadata']);
        }

        if (array_key_exists('type_definitions', $config)) {
            $this->_usedProperties['typeDefinitions'] = true;
            $this->typeDefinitions = new \Symfony\Config\Pimcore\Assets\TypeDefinitionsConfig($config['type_definitions']);
            unset($config['type_definitions']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['thumbnails'])) {
            $output['thumbnails'] = $this->thumbnails->toArray();
        }
        if (isset($this->_usedProperties['frontendPrefixes'])) {
            $output['frontend_prefixes'] = $this->frontendPrefixes->toArray();
        }
        if (isset($this->_usedProperties['previewImageThumbnail'])) {
            $output['preview_image_thumbnail'] = $this->previewImageThumbnail;
        }
        if (isset($this->_usedProperties['defaultUploadPath'])) {
            $output['default_upload_path'] = $this->defaultUploadPath;
        }
        if (isset($this->_usedProperties['treePagingLimit'])) {
            $output['tree_paging_limit'] = $this->treePagingLimit;
        }
        if (isset($this->_usedProperties['image'])) {
            $output['image'] = $this->image->toArray();
        }
        if (isset($this->_usedProperties['video'])) {
            $output['video'] = $this->video->toArray();
        }
        if (isset($this->_usedProperties['document'])) {
            $output['document'] = $this->document->toArray();
        }
        if (isset($this->_usedProperties['versions'])) {
            $output['versions'] = $this->versions->toArray();
        }
        if (isset($this->_usedProperties['iccRgbProfile'])) {
            $output['icc_rgb_profile'] = $this->iccRgbProfile;
        }
        if (isset($this->_usedProperties['iccCmykProfile'])) {
            $output['icc_cmyk_profile'] = $this->iccCmykProfile;
        }
        if (isset($this->_usedProperties['metadata'])) {
            $output['metadata'] = $this->metadata->toArray();
        }
        if (isset($this->_usedProperties['typeDefinitions'])) {
            $output['type_definitions'] = $this->typeDefinitions->toArray();
        }

        return $output;
    }

}
