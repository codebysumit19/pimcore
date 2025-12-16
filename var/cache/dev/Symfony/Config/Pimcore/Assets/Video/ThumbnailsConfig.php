<?php

namespace Symfony\Config\Pimcore\Assets\Video;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Thumbnails'.\DIRECTORY_SEPARATOR.'DefinitionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ThumbnailsConfig 
{
    private $definitions;
    private $autoClearTempFiles;
    private $_usedProperties = [];

    public function definitions(array $value = []): \Symfony\Config\Pimcore\Assets\Video\Thumbnails\DefinitionsConfig
    {
        $this->_usedProperties['definitions'] = true;

        return $this->definitions[] = new \Symfony\Config\Pimcore\Assets\Video\Thumbnails\DefinitionsConfig($value);
    }

    /**
     * Automatically delete all video thumbnail files any time an image or its metadata is updated.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoClearTempFiles($value): static
    {
        $this->_usedProperties['autoClearTempFiles'] = true;
        $this->autoClearTempFiles = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('definitions', $config)) {
            $this->_usedProperties['definitions'] = true;
            $this->definitions = array_map(fn ($v) => new \Symfony\Config\Pimcore\Assets\Video\Thumbnails\DefinitionsConfig($v), $config['definitions']);
            unset($config['definitions']);
        }

        if (array_key_exists('auto_clear_temp_files', $config)) {
            $this->_usedProperties['autoClearTempFiles'] = true;
            $this->autoClearTempFiles = $config['auto_clear_temp_files'];
            unset($config['auto_clear_temp_files']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['definitions'])) {
            $output['definitions'] = array_map(fn ($v) => $v->toArray(), $this->definitions);
        }
        if (isset($this->_usedProperties['autoClearTempFiles'])) {
            $output['auto_clear_temp_files'] = $this->autoClearTempFiles;
        }

        return $output;
    }

}
