<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ConfigLocation'.\DIRECTORY_SEPARATOR.'ImageThumbnailsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConfigLocation'.\DIRECTORY_SEPARATOR.'VideoThumbnailsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConfigLocation'.\DIRECTORY_SEPARATOR.'DocumentTypesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConfigLocation'.\DIRECTORY_SEPARATOR.'PredefinedPropertiesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConfigLocation'.\DIRECTORY_SEPARATOR.'PredefinedAssetMetadataConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConfigLocation'.\DIRECTORY_SEPARATOR.'PerspectivesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConfigLocation'.\DIRECTORY_SEPARATOR.'CustomViewsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConfigLocation'.\DIRECTORY_SEPARATOR.'ObjectCustomLayoutsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConfigLocation'.\DIRECTORY_SEPARATOR.'SystemSettingsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ConfigLocation'.\DIRECTORY_SEPARATOR.'SelectOptionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ConfigLocationConfig 
{
    private $imageThumbnails;
    private $videoThumbnails;
    private $documentTypes;
    private $predefinedProperties;
    private $predefinedAssetMetadata;
    private $perspectives;
    private $customViews;
    private $objectCustomLayouts;
    private $systemSettings;
    private $selectOptions;
    private $_usedProperties = [];

    /**
     * @default {"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/image_thumbnails"}}}
     */
    public function imageThumbnails(array $value = []): \Symfony\Config\Pimcore\ConfigLocation\ImageThumbnailsConfig
    {
        if (null === $this->imageThumbnails) {
            $this->_usedProperties['imageThumbnails'] = true;
            $this->imageThumbnails = new \Symfony\Config\Pimcore\ConfigLocation\ImageThumbnailsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "imageThumbnails()" has already been initialized. You cannot pass values the second time you call imageThumbnails().');
        }

        return $this->imageThumbnails;
    }

    /**
     * @default {"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/video_thumbnails"}}}
     */
    public function videoThumbnails(array $value = []): \Symfony\Config\Pimcore\ConfigLocation\VideoThumbnailsConfig
    {
        if (null === $this->videoThumbnails) {
            $this->_usedProperties['videoThumbnails'] = true;
            $this->videoThumbnails = new \Symfony\Config\Pimcore\ConfigLocation\VideoThumbnailsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "videoThumbnails()" has already been initialized. You cannot pass values the second time you call videoThumbnails().');
        }

        return $this->videoThumbnails;
    }

    /**
     * @default {"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/document_types"}}}
     */
    public function documentTypes(array $value = []): \Symfony\Config\Pimcore\ConfigLocation\DocumentTypesConfig
    {
        if (null === $this->documentTypes) {
            $this->_usedProperties['documentTypes'] = true;
            $this->documentTypes = new \Symfony\Config\Pimcore\ConfigLocation\DocumentTypesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "documentTypes()" has already been initialized. You cannot pass values the second time you call documentTypes().');
        }

        return $this->documentTypes;
    }

    /**
     * @default {"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/predefined_properties"}}}
     */
    public function predefinedProperties(array $value = []): \Symfony\Config\Pimcore\ConfigLocation\PredefinedPropertiesConfig
    {
        if (null === $this->predefinedProperties) {
            $this->_usedProperties['predefinedProperties'] = true;
            $this->predefinedProperties = new \Symfony\Config\Pimcore\ConfigLocation\PredefinedPropertiesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "predefinedProperties()" has already been initialized. You cannot pass values the second time you call predefinedProperties().');
        }

        return $this->predefinedProperties;
    }

    /**
     * @default {"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/predefined_asset_metadata"}}}
     */
    public function predefinedAssetMetadata(array $value = []): \Symfony\Config\Pimcore\ConfigLocation\PredefinedAssetMetadataConfig
    {
        if (null === $this->predefinedAssetMetadata) {
            $this->_usedProperties['predefinedAssetMetadata'] = true;
            $this->predefinedAssetMetadata = new \Symfony\Config\Pimcore\ConfigLocation\PredefinedAssetMetadataConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "predefinedAssetMetadata()" has already been initialized. You cannot pass values the second time you call predefinedAssetMetadata().');
        }

        return $this->predefinedAssetMetadata;
    }

    /**
     * @default {"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/perspectives"}}}
     */
    public function perspectives(array $value = []): \Symfony\Config\Pimcore\ConfigLocation\PerspectivesConfig
    {
        if (null === $this->perspectives) {
            $this->_usedProperties['perspectives'] = true;
            $this->perspectives = new \Symfony\Config\Pimcore\ConfigLocation\PerspectivesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "perspectives()" has already been initialized. You cannot pass values the second time you call perspectives().');
        }

        return $this->perspectives;
    }

    /**
     * @default {"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/custom_views"}}}
     */
    public function customViews(array $value = []): \Symfony\Config\Pimcore\ConfigLocation\CustomViewsConfig
    {
        if (null === $this->customViews) {
            $this->_usedProperties['customViews'] = true;
            $this->customViews = new \Symfony\Config\Pimcore\ConfigLocation\CustomViewsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "customViews()" has already been initialized. You cannot pass values the second time you call customViews().');
        }

        return $this->customViews;
    }

    /**
     * @default {"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/object_custom_layouts"}}}
     */
    public function objectCustomLayouts(array $value = []): \Symfony\Config\Pimcore\ConfigLocation\ObjectCustomLayoutsConfig
    {
        if (null === $this->objectCustomLayouts) {
            $this->_usedProperties['objectCustomLayouts'] = true;
            $this->objectCustomLayouts = new \Symfony\Config\Pimcore\ConfigLocation\ObjectCustomLayoutsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "objectCustomLayouts()" has already been initialized. You cannot pass values the second time you call objectCustomLayouts().');
        }

        return $this->objectCustomLayouts;
    }

    /**
     * @default {"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/system_settings"}},"read_target":{"type":null,"options":{"directory":null}}}
     */
    public function systemSettings(array $value = []): \Symfony\Config\Pimcore\ConfigLocation\SystemSettingsConfig
    {
        if (null === $this->systemSettings) {
            $this->_usedProperties['systemSettings'] = true;
            $this->systemSettings = new \Symfony\Config\Pimcore\ConfigLocation\SystemSettingsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "systemSettings()" has already been initialized. You cannot pass values the second time you call systemSettings().');
        }

        return $this->systemSettings;
    }

    /**
     * @default {"write_target":{"type":"symfony-config","options":{"directory":"\/var\/www\/my-project\/var\/config\/select_options"}},"read_target":{"type":null,"options":{"directory":null}}}
     */
    public function selectOptions(array $value = []): \Symfony\Config\Pimcore\ConfigLocation\SelectOptionsConfig
    {
        if (null === $this->selectOptions) {
            $this->_usedProperties['selectOptions'] = true;
            $this->selectOptions = new \Symfony\Config\Pimcore\ConfigLocation\SelectOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "selectOptions()" has already been initialized. You cannot pass values the second time you call selectOptions().');
        }

        return $this->selectOptions;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('image_thumbnails', $config)) {
            $this->_usedProperties['imageThumbnails'] = true;
            $this->imageThumbnails = new \Symfony\Config\Pimcore\ConfigLocation\ImageThumbnailsConfig($config['image_thumbnails']);
            unset($config['image_thumbnails']);
        }

        if (array_key_exists('video_thumbnails', $config)) {
            $this->_usedProperties['videoThumbnails'] = true;
            $this->videoThumbnails = new \Symfony\Config\Pimcore\ConfigLocation\VideoThumbnailsConfig($config['video_thumbnails']);
            unset($config['video_thumbnails']);
        }

        if (array_key_exists('document_types', $config)) {
            $this->_usedProperties['documentTypes'] = true;
            $this->documentTypes = new \Symfony\Config\Pimcore\ConfigLocation\DocumentTypesConfig($config['document_types']);
            unset($config['document_types']);
        }

        if (array_key_exists('predefined_properties', $config)) {
            $this->_usedProperties['predefinedProperties'] = true;
            $this->predefinedProperties = new \Symfony\Config\Pimcore\ConfigLocation\PredefinedPropertiesConfig($config['predefined_properties']);
            unset($config['predefined_properties']);
        }

        if (array_key_exists('predefined_asset_metadata', $config)) {
            $this->_usedProperties['predefinedAssetMetadata'] = true;
            $this->predefinedAssetMetadata = new \Symfony\Config\Pimcore\ConfigLocation\PredefinedAssetMetadataConfig($config['predefined_asset_metadata']);
            unset($config['predefined_asset_metadata']);
        }

        if (array_key_exists('perspectives', $config)) {
            $this->_usedProperties['perspectives'] = true;
            $this->perspectives = new \Symfony\Config\Pimcore\ConfigLocation\PerspectivesConfig($config['perspectives']);
            unset($config['perspectives']);
        }

        if (array_key_exists('custom_views', $config)) {
            $this->_usedProperties['customViews'] = true;
            $this->customViews = new \Symfony\Config\Pimcore\ConfigLocation\CustomViewsConfig($config['custom_views']);
            unset($config['custom_views']);
        }

        if (array_key_exists('object_custom_layouts', $config)) {
            $this->_usedProperties['objectCustomLayouts'] = true;
            $this->objectCustomLayouts = new \Symfony\Config\Pimcore\ConfigLocation\ObjectCustomLayoutsConfig($config['object_custom_layouts']);
            unset($config['object_custom_layouts']);
        }

        if (array_key_exists('system_settings', $config)) {
            $this->_usedProperties['systemSettings'] = true;
            $this->systemSettings = new \Symfony\Config\Pimcore\ConfigLocation\SystemSettingsConfig($config['system_settings']);
            unset($config['system_settings']);
        }

        if (array_key_exists('select_options', $config)) {
            $this->_usedProperties['selectOptions'] = true;
            $this->selectOptions = new \Symfony\Config\Pimcore\ConfigLocation\SelectOptionsConfig($config['select_options']);
            unset($config['select_options']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['imageThumbnails'])) {
            $output['image_thumbnails'] = $this->imageThumbnails->toArray();
        }
        if (isset($this->_usedProperties['videoThumbnails'])) {
            $output['video_thumbnails'] = $this->videoThumbnails->toArray();
        }
        if (isset($this->_usedProperties['documentTypes'])) {
            $output['document_types'] = $this->documentTypes->toArray();
        }
        if (isset($this->_usedProperties['predefinedProperties'])) {
            $output['predefined_properties'] = $this->predefinedProperties->toArray();
        }
        if (isset($this->_usedProperties['predefinedAssetMetadata'])) {
            $output['predefined_asset_metadata'] = $this->predefinedAssetMetadata->toArray();
        }
        if (isset($this->_usedProperties['perspectives'])) {
            $output['perspectives'] = $this->perspectives->toArray();
        }
        if (isset($this->_usedProperties['customViews'])) {
            $output['custom_views'] = $this->customViews->toArray();
        }
        if (isset($this->_usedProperties['objectCustomLayouts'])) {
            $output['object_custom_layouts'] = $this->objectCustomLayouts->toArray();
        }
        if (isset($this->_usedProperties['systemSettings'])) {
            $output['system_settings'] = $this->systemSettings->toArray();
        }
        if (isset($this->_usedProperties['selectOptions'])) {
            $output['select_options'] = $this->selectOptions->toArray();
        }

        return $output;
    }

}
