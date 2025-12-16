<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'WorkflowsConfig'.\DIRECTORY_SEPARATOR.'CustomExtensionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'WorkflowsConfig'.\DIRECTORY_SEPARATOR.'AuditTrailConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'WorkflowsConfig'.\DIRECTORY_SEPARATOR.'MarkingStoreConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'WorkflowsConfig'.\DIRECTORY_SEPARATOR.'SupportStrategyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'WorkflowsConfig'.\DIRECTORY_SEPARATOR.'PlacesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'WorkflowsConfig'.\DIRECTORY_SEPARATOR.'TransitionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'WorkflowsConfig'.\DIRECTORY_SEPARATOR.'GlobalActionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class WorkflowsConfig 
{
    private $placeholders;
    private $customExtensions;
    private $enabled;
    private $priority;
    private $label;
    private $auditTrail;
    private $type;
    private $markingStore;
    private $supports;
    private $supportStrategy;
    private $initialMarkings;
    private $places;
    private $transitions;
    private $globalActions;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function placeholders(mixed $value): static
    {
        $this->_usedProperties['placeholders'] = true;
        $this->placeholders = $value;

        return $this;
    }

    /**
     * Use this key to attach additional config information to a workflow, for example via bundles, etc.
     */
    public function customExtensions(array $value = []): \Symfony\Config\Pimcore\WorkflowsConfig\CustomExtensionsConfig
    {
        if (null === $this->customExtensions) {
            $this->_usedProperties['customExtensions'] = true;
            $this->customExtensions = new \Symfony\Config\Pimcore\WorkflowsConfig\CustomExtensionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "customExtensions()" has already been initialized. You cannot pass values the second time you call customExtensions().');
        }

        return $this->customExtensions;
    }

    /**
     * Can be used to enable or disable the workflow.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * When multiple custom view or permission settings from different places in different workflows are valid, the workflow with the highest priority will be used.
     * @default 0
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function priority($value): static
    {
        $this->_usedProperties['priority'] = true;
        $this->priority = $value;

        return $this;
    }

    /**
     * Will be used in the backend interface as nice name for the workflow. If not set the technical workflow name will be used as label too.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function label($value): static
    {
        $this->_usedProperties['label'] = true;
        $this->label = $value;

        return $this;
    }

    /**
     * @template TValue of array|bool
     * @param TValue $value
     * Enable default audit trail feature provided by Symfony. Take a look at the Symfony docs for more details.
     * @default {"enabled":false}
     * @return \Symfony\Config\Pimcore\WorkflowsConfig\AuditTrailConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pimcore\WorkflowsConfig\AuditTrailConfig : static)
     */
    public function auditTrail(array|bool $value = []): \Symfony\Config\Pimcore\WorkflowsConfig\AuditTrailConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['auditTrail'] = true;
            $this->auditTrail = $value;

            return $this;
        }

        if (!$this->auditTrail instanceof \Symfony\Config\Pimcore\WorkflowsConfig\AuditTrailConfig) {
            $this->_usedProperties['auditTrail'] = true;
            $this->auditTrail = new \Symfony\Config\Pimcore\WorkflowsConfig\AuditTrailConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "auditTrail()" has already been initialized. You cannot pass values the second time you call auditTrail().');
        }

        return $this->auditTrail;
    }

    /**
     * A workflow with type "workflow" can handle multiple places at one time whereas a state_machine provides a finite state_machine (only one place at one time). Take a look at the Symfony docs for more details.
     * @default null
     * @param ParamConfigurator|'workflow'|'state_machine' $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * Handles the way how the state/place is stored. If not defined "state_table" will be used as default. Take a look at @TODO for a description of the different types.
     */
    public function markingStore(array $value = []): \Symfony\Config\Pimcore\WorkflowsConfig\MarkingStoreConfig
    {
        if (null === $this->markingStore) {
            $this->_usedProperties['markingStore'] = true;
            $this->markingStore = new \Symfony\Config\Pimcore\WorkflowsConfig\MarkingStoreConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "markingStore()" has already been initialized. You cannot pass values the second time you call markingStore().');
        }

        return $this->markingStore;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|string $value
     *
     * @return $this
     */
    public function supports(ParamConfigurator|string|array $value): static
    {
        $this->_usedProperties['supports'] = true;
        $this->supports = $value;

        return $this;
    }

    /**
     * Can be used to implement a special logic which subjects are supported by the workflow. For example only products matching certain criteria.
     * @example "expression"
     * @example ["\\Pimcore\\Model\\DataObject\\Product","subject.getProductType() == \"article\" and is_fully_authenticated() and \"ROLE_PIMCORE_ADMIN\" in roles"]
     */
    public function supportStrategy(array $value = []): \Symfony\Config\Pimcore\WorkflowsConfig\SupportStrategyConfig
    {
        if (null === $this->supportStrategy) {
            $this->_usedProperties['supportStrategy'] = true;
            $this->supportStrategy = new \Symfony\Config\Pimcore\WorkflowsConfig\SupportStrategyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "supportStrategy()" has already been initialized. You cannot pass values the second time you call supportStrategy().');
        }

        return $this->supportStrategy;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|string $value
     *
     * @return $this
     */
    public function initialMarkings(ParamConfigurator|string|array $value): static
    {
        $this->_usedProperties['initialMarkings'] = true;
        $this->initialMarkings = $value;

        return $this;
    }

    /**
     * @template TValue of mixed
     * @param TValue $value
     * @example {"closed":{"label":"close product","permissions":[{"condition":"is_fully_authenticated() and 'ROLE_PIMCORE_ADMIN' in roles","modify":false},{"modify":false,"objectLayout":2}]}}
     * @return \Symfony\Config\Pimcore\WorkflowsConfig\PlacesConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pimcore\WorkflowsConfig\PlacesConfig : static)
     */
    public function places(mixed $value = []): \Symfony\Config\Pimcore\WorkflowsConfig\PlacesConfig|static
    {
        $this->_usedProperties['places'] = true;
        if (!\is_array($value)) {
            $this->places[] = $value;

            return $this;
        }

        return $this->places[] = new \Symfony\Config\Pimcore\WorkflowsConfig\PlacesConfig($value);
    }

    /**
     * @template TValue of mixed
     * @param TValue $value
     * @example {"from":"open","to":"closed","options":{"label":"close product","notes":{"commentEnabled":true,"commentRequired":true,"additionalFields":[{"name":"accept","title":"accept terms","required":true,"fieldType":"checkbox"},{"name":"select","title":"please select a type","setterFn":"setSpecialWorkflowType","fieldType":"select","fieldTypeSettings":{"options":[{"key":"Option A","value":"a"},{"key":"Option B","value":"b"},{"key":"Option C","value":"c"}]}}]}}}
     * @return \Symfony\Config\Pimcore\WorkflowsConfig\TransitionsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Pimcore\WorkflowsConfig\TransitionsConfig : static)
     */
    public function transitions(mixed $value = []): \Symfony\Config\Pimcore\WorkflowsConfig\TransitionsConfig|static
    {
        $this->_usedProperties['transitions'] = true;
        if (!\is_array($value)) {
            $this->transitions[] = $value;

            return $this;
        }

        return $this->transitions[] = new \Symfony\Config\Pimcore\WorkflowsConfig\TransitionsConfig($value);
    }

    /**
     * Actions which will be added to actions button independently of the current workflow place.
     */
    public function globalActions(array $value = []): \Symfony\Config\Pimcore\WorkflowsConfig\GlobalActionsConfig
    {
        $this->_usedProperties['globalActions'] = true;

        return $this->globalActions[] = new \Symfony\Config\Pimcore\WorkflowsConfig\GlobalActionsConfig($value);
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('placeholders', $config)) {
            $this->_usedProperties['placeholders'] = true;
            $this->placeholders = $config['placeholders'];
            unset($config['placeholders']);
        }

        if (array_key_exists('custom_extensions', $config)) {
            $this->_usedProperties['customExtensions'] = true;
            $this->customExtensions = new \Symfony\Config\Pimcore\WorkflowsConfig\CustomExtensionsConfig($config['custom_extensions']);
            unset($config['custom_extensions']);
        }

        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('priority', $config)) {
            $this->_usedProperties['priority'] = true;
            $this->priority = $config['priority'];
            unset($config['priority']);
        }

        if (array_key_exists('label', $config)) {
            $this->_usedProperties['label'] = true;
            $this->label = $config['label'];
            unset($config['label']);
        }

        if (array_key_exists('audit_trail', $config)) {
            $this->_usedProperties['auditTrail'] = true;
            $this->auditTrail = \is_array($config['audit_trail']) ? new \Symfony\Config\Pimcore\WorkflowsConfig\AuditTrailConfig($config['audit_trail']) : $config['audit_trail'];
            unset($config['audit_trail']);
        }

        if (array_key_exists('type', $config)) {
            $this->_usedProperties['type'] = true;
            $this->type = $config['type'];
            unset($config['type']);
        }

        if (array_key_exists('marking_store', $config)) {
            $this->_usedProperties['markingStore'] = true;
            $this->markingStore = new \Symfony\Config\Pimcore\WorkflowsConfig\MarkingStoreConfig($config['marking_store']);
            unset($config['marking_store']);
        }

        if (array_key_exists('supports', $config)) {
            $this->_usedProperties['supports'] = true;
            $this->supports = $config['supports'];
            unset($config['supports']);
        }

        if (array_key_exists('support_strategy', $config)) {
            $this->_usedProperties['supportStrategy'] = true;
            $this->supportStrategy = new \Symfony\Config\Pimcore\WorkflowsConfig\SupportStrategyConfig($config['support_strategy']);
            unset($config['support_strategy']);
        }

        if (array_key_exists('initial_markings', $config)) {
            $this->_usedProperties['initialMarkings'] = true;
            $this->initialMarkings = $config['initial_markings'];
            unset($config['initial_markings']);
        }

        if (array_key_exists('places', $config)) {
            $this->_usedProperties['places'] = true;
            $this->places = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Pimcore\WorkflowsConfig\PlacesConfig($v) : $v, $config['places']);
            unset($config['places']);
        }

        if (array_key_exists('transitions', $config)) {
            $this->_usedProperties['transitions'] = true;
            $this->transitions = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Pimcore\WorkflowsConfig\TransitionsConfig($v) : $v, $config['transitions']);
            unset($config['transitions']);
        }

        if (array_key_exists('globalActions', $config)) {
            $this->_usedProperties['globalActions'] = true;
            $this->globalActions = array_map(fn ($v) => new \Symfony\Config\Pimcore\WorkflowsConfig\GlobalActionsConfig($v), $config['globalActions']);
            unset($config['globalActions']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['placeholders'])) {
            $output['placeholders'] = $this->placeholders;
        }
        if (isset($this->_usedProperties['customExtensions'])) {
            $output['custom_extensions'] = $this->customExtensions->toArray();
        }
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['priority'])) {
            $output['priority'] = $this->priority;
        }
        if (isset($this->_usedProperties['label'])) {
            $output['label'] = $this->label;
        }
        if (isset($this->_usedProperties['auditTrail'])) {
            $output['audit_trail'] = $this->auditTrail instanceof \Symfony\Config\Pimcore\WorkflowsConfig\AuditTrailConfig ? $this->auditTrail->toArray() : $this->auditTrail;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['markingStore'])) {
            $output['marking_store'] = $this->markingStore->toArray();
        }
        if (isset($this->_usedProperties['supports'])) {
            $output['supports'] = $this->supports;
        }
        if (isset($this->_usedProperties['supportStrategy'])) {
            $output['support_strategy'] = $this->supportStrategy->toArray();
        }
        if (isset($this->_usedProperties['initialMarkings'])) {
            $output['initial_markings'] = $this->initialMarkings;
        }
        if (isset($this->_usedProperties['places'])) {
            $output['places'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Pimcore\WorkflowsConfig\PlacesConfig ? $v->toArray() : $v, $this->places);
        }
        if (isset($this->_usedProperties['transitions'])) {
            $output['transitions'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Pimcore\WorkflowsConfig\TransitionsConfig ? $v->toArray() : $v, $this->transitions);
        }
        if (isset($this->_usedProperties['globalActions'])) {
            $output['globalActions'] = array_map(fn ($v) => $v->toArray(), $this->globalActions);
        }

        return $output;
    }

}
