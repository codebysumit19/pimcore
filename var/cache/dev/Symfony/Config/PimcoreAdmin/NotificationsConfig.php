<?php

namespace Symfony\Config\PimcoreAdmin;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Notifications'.\DIRECTORY_SEPARATOR.'CheckNewNotificationConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class NotificationsConfig 
{
    private $enabled;
    private $checkNewNotification;
    private $_usedProperties = [];

    /**
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
     * @template TValue of array|bool
     * @param TValue $value
     * Can be used to enable or disable the check of new notifications (url: /admin/notification/find-last-unread).
     * @default {"enabled":true,"interval":30}
     * @return \Symfony\Config\PimcoreAdmin\Notifications\CheckNewNotificationConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\PimcoreAdmin\Notifications\CheckNewNotificationConfig : static)
     */
    public function checkNewNotification(array|bool $value = []): \Symfony\Config\PimcoreAdmin\Notifications\CheckNewNotificationConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['checkNewNotification'] = true;
            $this->checkNewNotification = $value;

            return $this;
        }

        if (!$this->checkNewNotification instanceof \Symfony\Config\PimcoreAdmin\Notifications\CheckNewNotificationConfig) {
            $this->_usedProperties['checkNewNotification'] = true;
            $this->checkNewNotification = new \Symfony\Config\PimcoreAdmin\Notifications\CheckNewNotificationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "checkNewNotification()" has already been initialized. You cannot pass values the second time you call checkNewNotification().');
        }

        return $this->checkNewNotification;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('enabled', $config)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $config['enabled'];
            unset($config['enabled']);
        }

        if (array_key_exists('check_new_notification', $config)) {
            $this->_usedProperties['checkNewNotification'] = true;
            $this->checkNewNotification = \is_array($config['check_new_notification']) ? new \Symfony\Config\PimcoreAdmin\Notifications\CheckNewNotificationConfig($config['check_new_notification']) : $config['check_new_notification'];
            unset($config['check_new_notification']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['checkNewNotification'])) {
            $output['check_new_notification'] = $this->checkNewNotification instanceof \Symfony\Config\PimcoreAdmin\Notifications\CheckNewNotificationConfig ? $this->checkNewNotification->toArray() : $this->checkNewNotification;
        }

        return $output;
    }

}
