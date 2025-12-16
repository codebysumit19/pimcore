<?php

namespace Symfony\Config\Pimcore\Applicationlog;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MailNotificationConfig 
{
    private $sendLogSummary;
    private $filterPriority;
    private $mailReceiver;
    private $_usedProperties = [];

    /**
     * Send log summary via email
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function sendLogSummary($value): static
    {
        $this->_usedProperties['sendLogSummary'] = true;
        $this->sendLogSummary = $value;

        return $this;
    }

    /**
     * Filter threshold for email summary, choose one of: 8 (debug),7 (info),6 (notice),5 (warning),4 (error),3 (critical),2 (alert),1 (emerg). You can use the integer or the string representation.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filterPriority($value): static
    {
        $this->_usedProperties['filterPriority'] = true;
        $this->filterPriority = $value;

        return $this;
    }

    /**
     * Log summary receivers. Separate multiple email receivers by using ;
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mailReceiver($value): static
    {
        $this->_usedProperties['mailReceiver'] = true;
        $this->mailReceiver = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('send_log_summary', $config)) {
            $this->_usedProperties['sendLogSummary'] = true;
            $this->sendLogSummary = $config['send_log_summary'];
            unset($config['send_log_summary']);
        }

        if (array_key_exists('filter_priority', $config)) {
            $this->_usedProperties['filterPriority'] = true;
            $this->filterPriority = $config['filter_priority'];
            unset($config['filter_priority']);
        }

        if (array_key_exists('mail_receiver', $config)) {
            $this->_usedProperties['mailReceiver'] = true;
            $this->mailReceiver = $config['mail_receiver'];
            unset($config['mail_receiver']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['sendLogSummary'])) {
            $output['send_log_summary'] = $this->sendLogSummary;
        }
        if (isset($this->_usedProperties['filterPriority'])) {
            $output['filter_priority'] = $this->filterPriority;
        }
        if (isset($this->_usedProperties['mailReceiver'])) {
            $output['mail_receiver'] = $this->mailReceiver;
        }

        return $output;
    }

}
