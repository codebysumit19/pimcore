<?php

namespace Symfony\Config\Pimcore\Assets;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'LowQualityImagePreviewConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Image'.\DIRECTORY_SEPARATOR.'ThumbnailsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ImageConfig 
{
    private $maxPixels;
    private $lowQualityImagePreview;
    private $thumbnails;
    private $_usedProperties = [];

    /**
     * Maximum number of pixels an image can have when added (width × height).
     * @default 40000000
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxPixels($value): static
    {
        $this->_usedProperties['maxPixels'] = true;
        $this->maxPixels = $value;

        return $this;
    }

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * Allow a LQIP SVG image to be generated alongside any other thumbnails.
     * @default {"enabled":true}
     * @return \Symfony\Config\Pimcore\Assets\Image\LowQualityImagePreviewConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pimcore\Assets\Image\LowQualityImagePreviewConfig : static)
     */
    public function lowQualityImagePreview(array|bool $value = []): \Symfony\Config\Pimcore\Assets\Image\LowQualityImagePreviewConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['lowQualityImagePreview'] = true;
            $this->lowQualityImagePreview = $value;

            return $this;
        }

        if (!$this->lowQualityImagePreview instanceof \Symfony\Config\Pimcore\Assets\Image\LowQualityImagePreviewConfig) {
            $this->_usedProperties['lowQualityImagePreview'] = true;
            $this->lowQualityImagePreview = new \Symfony\Config\Pimcore\Assets\Image\LowQualityImagePreviewConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "lowQualityImagePreview()" has already been initialized. You cannot pass values the second time you call lowQualityImagePreview().');
        }

        return $this->lowQualityImagePreview;
    }

    /**
     * @default {"definitions":[],"clip_auto_support":true,"max_srcset_dpi_factor":2,"image_optimizers":{"enabled":true},"auto_formats":{"avif":{"enabled":true,"quality":50},"webp":{"enabled":true,"quality":null}},"status_cache":true,"auto_clear_temp_files":true}
     */
    public function thumbnails(array $value = []): \Symfony\Config\Pimcore\Assets\Image\ThumbnailsConfig
    {
        if (null === $this->thumbnails) {
            $this->_usedProperties['thumbnails'] = true;
            $this->thumbnails = new \Symfony\Config\Pimcore\Assets\Image\ThumbnailsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "thumbnails()" has already been initialized. You cannot pass values the second time you call thumbnails().');
        }

        return $this->thumbnails;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('max_pixels', $config)) {
            $this->_usedProperties['maxPixels'] = true;
            $this->maxPixels = $config['max_pixels'];
            unset($config['max_pixels']);
        }

        if (array_key_exists('low_quality_image_preview', $config)) {
            $this->_usedProperties['lowQualityImagePreview'] = true;
            $this->lowQualityImagePreview = \is_array($config['low_quality_image_preview']) ? new \Symfony\Config\Pimcore\Assets\Image\LowQualityImagePreviewConfig($config['low_quality_image_preview']) : $config['low_quality_image_preview'];
            unset($config['low_quality_image_preview']);
        }

        if (array_key_exists('thumbnails', $config)) {
            $this->_usedProperties['thumbnails'] = true;
            $this->thumbnails = new \Symfony\Config\Pimcore\Assets\Image\ThumbnailsConfig($config['thumbnails']);
            unset($config['thumbnails']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['maxPixels'])) {
            $output['max_pixels'] = $this->maxPixels;
        }
        if (isset($this->_usedProperties['lowQualityImagePreview'])) {
            $output['low_quality_image_preview'] = $this->lowQualityImagePreview instanceof \Symfony\Config\Pimcore\Assets\Image\LowQualityImagePreviewConfig ? $this->lowQualityImagePreview->toArray() : $this->lowQualityImagePreview;
        }
        if (isset($this->_usedProperties['thumbnails'])) {
            $output['thumbnails'] = $this->thumbnails->toArray();
        }

        return $output;
    }

}
