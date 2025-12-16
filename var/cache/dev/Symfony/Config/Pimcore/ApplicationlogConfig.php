<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Applicationlog'.\DIRECTORY_SEPARATOR.'LoggersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Applicationlog'.\DIRECTORY_SEPARATOR.'MailNotificationConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class ApplicationlogConfig 
{
    private $loggers;
    private $mailNotification;
    private $archiveTreshold;
    private $archiveAlternativeDatabase;
    private $archiveDbTableStorageEngine;
    private $deleteArchiveThreshold;
    private $_usedProperties = [];

    public function loggers(array $value = []): \Symfony\Config\Pimcore\Applicationlog\LoggersConfig
    {
        if (null === $this->loggers) {
            $this->_usedProperties['loggers'] = true;
            $this->loggers = new \Symfony\Config\Pimcore\Applicationlog\LoggersConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "loggers()" has already been initialized. You cannot pass values the second time you call loggers().');
        }

        return $this->loggers;
    }

    public function mailNotification(array $value = []): \Symfony\Config\Pimcore\Applicationlog\MailNotificationConfig
    {
        if (null === $this->mailNotification) {
            $this->_usedProperties['mailNotification'] = true;
            $this->mailNotification = new \Symfony\Config\Pimcore\Applicationlog\MailNotificationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "mailNotification()" has already been initialized. You cannot pass values the second time you call mailNotification().');
        }

        return $this->mailNotification;
    }

    /**
     * Archive threshold in days
     * @default 30
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function archiveTreshold($value): static
    {
        $this->_usedProperties['archiveTreshold'] = true;
        $this->archiveTreshold = $value;

        return $this;
    }

    /**
     * Archive database name (optional). Tables will get archived to a different database,
     *                                  recommended when huge amounts of logs will be generated
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function archiveAlternativeDatabase($value): static
    {
        $this->_usedProperties['archiveAlternativeDatabase'] = true;
        $this->archiveAlternativeDatabase = $value;

        return $this;
    }

    /**
     * DB storage engine to be used for archive tables (e.g. ARCHIVE, InnoDB, Aria, ...)
     * @default 'archive'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function archiveDbTableStorageEngine($value): static
    {
        $this->_usedProperties['archiveDbTableStorageEngine'] = true;
        $this->archiveDbTableStorageEngine = $value;

        return $this;
    }

    /**
     * Threshold for deleting application log archive tables (in months)
     * @default '6'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function deleteArchiveThreshold($value): static
    {
        $this->_usedProperties['deleteArchiveThreshold'] = true;
        $this->deleteArchiveThreshold = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('loggers', $config)) {
            $this->_usedProperties['loggers'] = true;
            $this->loggers = new \Symfony\Config\Pimcore\Applicationlog\LoggersConfig($config['loggers']);
            unset($config['loggers']);
        }

        if (array_key_exists('mail_notification', $config)) {
            $this->_usedProperties['mailNotification'] = true;
            $this->mailNotification = new \Symfony\Config\Pimcore\Applicationlog\MailNotificationConfig($config['mail_notification']);
            unset($config['mail_notification']);
        }

        if (array_key_exists('archive_treshold', $config)) {
            $this->_usedProperties['archiveTreshold'] = true;
            $this->archiveTreshold = $config['archive_treshold'];
            unset($config['archive_treshold']);
        }

        if (array_key_exists('archive_alternative_database', $config)) {
            $this->_usedProperties['archiveAlternativeDatabase'] = true;
            $this->archiveAlternativeDatabase = $config['archive_alternative_database'];
            unset($config['archive_alternative_database']);
        }

        if (array_key_exists('archive_db_table_storage_engine', $config)) {
            $this->_usedProperties['archiveDbTableStorageEngine'] = true;
            $this->archiveDbTableStorageEngine = $config['archive_db_table_storage_engine'];
            unset($config['archive_db_table_storage_engine']);
        }

        if (array_key_exists('delete_archive_threshold', $config)) {
            $this->_usedProperties['deleteArchiveThreshold'] = true;
            $this->deleteArchiveThreshold = $config['delete_archive_threshold'];
            unset($config['delete_archive_threshold']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['loggers'])) {
            $output['loggers'] = $this->loggers->toArray();
        }
        if (isset($this->_usedProperties['mailNotification'])) {
            $output['mail_notification'] = $this->mailNotification->toArray();
        }
        if (isset($this->_usedProperties['archiveTreshold'])) {
            $output['archive_treshold'] = $this->archiveTreshold;
        }
        if (isset($this->_usedProperties['archiveAlternativeDatabase'])) {
            $output['archive_alternative_database'] = $this->archiveAlternativeDatabase;
        }
        if (isset($this->_usedProperties['archiveDbTableStorageEngine'])) {
            $output['archive_db_table_storage_engine'] = $this->archiveDbTableStorageEngine;
        }
        if (isset($this->_usedProperties['deleteArchiveThreshold'])) {
            $output['delete_archive_threshold'] = $this->deleteArchiveThreshold;
        }

        return $output;
    }

}
