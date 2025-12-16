<?php

namespace Symfony\Config\Pimcore\Assets\Video\Thumbnails;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DefinitionsConfig'.\DIRECTORY_SEPARATOR.'ItemsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DefinitionsConfig'.\DIRECTORY_SEPARATOR.'MediasConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DefinitionsConfig 
{
    private $id;
    private $name;
    private $description;
    private $group;
    private $videoBitrate;
    private $audioBitrate;
    private $quality;
    private $modificationDate;
    private $creationDate;
    private $items;
    private $medias;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function id($value): static
    {
        $this->_usedProperties['id'] = true;
        $this->id = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): static
    {
        $this->_usedProperties['name'] = true;
        $this->name = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function description($value): static
    {
        $this->_usedProperties['description'] = true;
        $this->description = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function group($value): static
    {
        $this->_usedProperties['group'] = true;
        $this->group = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function videoBitrate($value): static
    {
        $this->_usedProperties['videoBitrate'] = true;
        $this->videoBitrate = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function audioBitrate($value): static
    {
        $this->_usedProperties['audioBitrate'] = true;
        $this->audioBitrate = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function quality($value): static
    {
        $this->_usedProperties['quality'] = true;
        $this->quality = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function modificationDate($value): static
    {
        $this->_usedProperties['modificationDate'] = true;
        $this->modificationDate = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function creationDate($value): static
    {
        $this->_usedProperties['creationDate'] = true;
        $this->creationDate = $value;

        return $this;
    }

    public function items(array $value = []): \Symfony\Config\Pimcore\Assets\Video\Thumbnails\DefinitionsConfig\ItemsConfig
    {
        $this->_usedProperties['items'] = true;

        return $this->items[] = new \Symfony\Config\Pimcore\Assets\Video\Thumbnails\DefinitionsConfig\ItemsConfig($value);
    }

    public function medias(array $value = []): \Symfony\Config\Pimcore\Assets\Video\Thumbnails\DefinitionsConfig\MediasConfig
    {
        $this->_usedProperties['medias'] = true;

        return $this->medias[] = new \Symfony\Config\Pimcore\Assets\Video\Thumbnails\DefinitionsConfig\MediasConfig($value);
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('id', $config)) {
            $this->_usedProperties['id'] = true;
            $this->id = $config['id'];
            unset($config['id']);
        }

        if (array_key_exists('name', $config)) {
            $this->_usedProperties['name'] = true;
            $this->name = $config['name'];
            unset($config['name']);
        }

        if (array_key_exists('description', $config)) {
            $this->_usedProperties['description'] = true;
            $this->description = $config['description'];
            unset($config['description']);
        }

        if (array_key_exists('group', $config)) {
            $this->_usedProperties['group'] = true;
            $this->group = $config['group'];
            unset($config['group']);
        }

        if (array_key_exists('videoBitrate', $config)) {
            $this->_usedProperties['videoBitrate'] = true;
            $this->videoBitrate = $config['videoBitrate'];
            unset($config['videoBitrate']);
        }

        if (array_key_exists('audioBitrate', $config)) {
            $this->_usedProperties['audioBitrate'] = true;
            $this->audioBitrate = $config['audioBitrate'];
            unset($config['audioBitrate']);
        }

        if (array_key_exists('quality', $config)) {
            $this->_usedProperties['quality'] = true;
            $this->quality = $config['quality'];
            unset($config['quality']);
        }

        if (array_key_exists('modificationDate', $config)) {
            $this->_usedProperties['modificationDate'] = true;
            $this->modificationDate = $config['modificationDate'];
            unset($config['modificationDate']);
        }

        if (array_key_exists('creationDate', $config)) {
            $this->_usedProperties['creationDate'] = true;
            $this->creationDate = $config['creationDate'];
            unset($config['creationDate']);
        }

        if (array_key_exists('items', $config)) {
            $this->_usedProperties['items'] = true;
            $this->items = array_map(fn ($v) => new \Symfony\Config\Pimcore\Assets\Video\Thumbnails\DefinitionsConfig\ItemsConfig($v), $config['items']);
            unset($config['items']);
        }

        if (array_key_exists('medias', $config)) {
            $this->_usedProperties['medias'] = true;
            $this->medias = array_map(fn ($v) => new \Symfony\Config\Pimcore\Assets\Video\Thumbnails\DefinitionsConfig\MediasConfig($v), $config['medias']);
            unset($config['medias']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['id'])) {
            $output['id'] = $this->id;
        }
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['description'])) {
            $output['description'] = $this->description;
        }
        if (isset($this->_usedProperties['group'])) {
            $output['group'] = $this->group;
        }
        if (isset($this->_usedProperties['videoBitrate'])) {
            $output['videoBitrate'] = $this->videoBitrate;
        }
        if (isset($this->_usedProperties['audioBitrate'])) {
            $output['audioBitrate'] = $this->audioBitrate;
        }
        if (isset($this->_usedProperties['quality'])) {
            $output['quality'] = $this->quality;
        }
        if (isset($this->_usedProperties['modificationDate'])) {
            $output['modificationDate'] = $this->modificationDate;
        }
        if (isset($this->_usedProperties['creationDate'])) {
            $output['creationDate'] = $this->creationDate;
        }
        if (isset($this->_usedProperties['items'])) {
            $output['items'] = array_map(fn ($v) => $v->toArray(), $this->items);
        }
        if (isset($this->_usedProperties['medias'])) {
            $output['medias'] = array_map(fn ($v) => $v->toArray(), $this->medias);
        }

        return $output;
    }

}
