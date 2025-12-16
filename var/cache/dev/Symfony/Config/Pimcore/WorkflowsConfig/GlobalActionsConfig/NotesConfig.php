<?php

namespace Symfony\Config\Pimcore\WorkflowsConfig\GlobalActionsConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Notes'.\DIRECTORY_SEPARATOR.'AdditionalFieldsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Notes'.\DIRECTORY_SEPARATOR.'CustomHtmlConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class NotesConfig 
{
    private $commentEnabled;
    private $commentRequired;
    private $commentSetterFn;
    private $commentGetterFn;
    private $type;
    private $title;
    private $additionalFields;
    private $customHtml;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function commentEnabled($value): static
    {
        $this->_usedProperties['commentEnabled'] = true;
        $this->commentEnabled = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function commentRequired($value): static
    {
        $this->_usedProperties['commentRequired'] = true;
        $this->commentRequired = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function commentSetterFn($value): static
    {
        $this->_usedProperties['commentSetterFn'] = true;
        $this->commentSetterFn = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function commentGetterFn($value): static
    {
        $this->_usedProperties['commentGetterFn'] = true;
        $this->commentGetterFn = $value;

        return $this;
    }

    /**
     * @default 'Status update'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function title($value): static
    {
        $this->_usedProperties['title'] = true;
        $this->title = $value;

        return $this;
    }

    public function additionalFields(array $value = []): \Symfony\Config\Pimcore\WorkflowsConfig\GlobalActionsConfig\Notes\AdditionalFieldsConfig
    {
        $this->_usedProperties['additionalFields'] = true;

        return $this->additionalFields[] = new \Symfony\Config\Pimcore\WorkflowsConfig\GlobalActionsConfig\Notes\AdditionalFieldsConfig($value);
    }

    public function customHtml(array $value = []): \Symfony\Config\Pimcore\WorkflowsConfig\GlobalActionsConfig\Notes\CustomHtmlConfig
    {
        if (null === $this->customHtml) {
            $this->_usedProperties['customHtml'] = true;
            $this->customHtml = new \Symfony\Config\Pimcore\WorkflowsConfig\GlobalActionsConfig\Notes\CustomHtmlConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "customHtml()" has already been initialized. You cannot pass values the second time you call customHtml().');
        }

        return $this->customHtml;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('commentEnabled', $config)) {
            $this->_usedProperties['commentEnabled'] = true;
            $this->commentEnabled = $config['commentEnabled'];
            unset($config['commentEnabled']);
        }

        if (array_key_exists('commentRequired', $config)) {
            $this->_usedProperties['commentRequired'] = true;
            $this->commentRequired = $config['commentRequired'];
            unset($config['commentRequired']);
        }

        if (array_key_exists('commentSetterFn', $config)) {
            $this->_usedProperties['commentSetterFn'] = true;
            $this->commentSetterFn = $config['commentSetterFn'];
            unset($config['commentSetterFn']);
        }

        if (array_key_exists('commentGetterFn', $config)) {
            $this->_usedProperties['commentGetterFn'] = true;
            $this->commentGetterFn = $config['commentGetterFn'];
            unset($config['commentGetterFn']);
        }

        if (array_key_exists('type', $config)) {
            $this->_usedProperties['type'] = true;
            $this->type = $config['type'];
            unset($config['type']);
        }

        if (array_key_exists('title', $config)) {
            $this->_usedProperties['title'] = true;
            $this->title = $config['title'];
            unset($config['title']);
        }

        if (array_key_exists('additionalFields', $config)) {
            $this->_usedProperties['additionalFields'] = true;
            $this->additionalFields = array_map(fn ($v) => new \Symfony\Config\Pimcore\WorkflowsConfig\GlobalActionsConfig\Notes\AdditionalFieldsConfig($v), $config['additionalFields']);
            unset($config['additionalFields']);
        }

        if (array_key_exists('customHtml', $config)) {
            $this->_usedProperties['customHtml'] = true;
            $this->customHtml = new \Symfony\Config\Pimcore\WorkflowsConfig\GlobalActionsConfig\Notes\CustomHtmlConfig($config['customHtml']);
            unset($config['customHtml']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['commentEnabled'])) {
            $output['commentEnabled'] = $this->commentEnabled;
        }
        if (isset($this->_usedProperties['commentRequired'])) {
            $output['commentRequired'] = $this->commentRequired;
        }
        if (isset($this->_usedProperties['commentSetterFn'])) {
            $output['commentSetterFn'] = $this->commentSetterFn;
        }
        if (isset($this->_usedProperties['commentGetterFn'])) {
            $output['commentGetterFn'] = $this->commentGetterFn;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['title'])) {
            $output['title'] = $this->title;
        }
        if (isset($this->_usedProperties['additionalFields'])) {
            $output['additionalFields'] = array_map(fn ($v) => $v->toArray(), $this->additionalFields);
        }
        if (isset($this->_usedProperties['customHtml'])) {
            $output['customHtml'] = $this->customHtml->toArray();
        }

        return $output;
    }

}
