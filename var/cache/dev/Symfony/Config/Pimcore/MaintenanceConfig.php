<?php

namespace Symfony\Config\Pimcore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Maintenance'.\DIRECTORY_SEPARATOR.'HousekeepingConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MaintenanceConfig 
{
    private $housekeeping;
    private $_usedProperties = [];

    /**
     * @default {"cleanup_tmp_files_atime_older_than":86400,"cleanup_profiler_files_atime_older_than":1800}
     */
    public function housekeeping(array $value = []): \Symfony\Config\Pimcore\Maintenance\HousekeepingConfig
    {
        if (null === $this->housekeeping) {
            $this->_usedProperties['housekeeping'] = true;
            $this->housekeeping = new \Symfony\Config\Pimcore\Maintenance\HousekeepingConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "housekeeping()" has already been initialized. You cannot pass values the second time you call housekeeping().');
        }

        return $this->housekeeping;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('housekeeping', $config)) {
            $this->_usedProperties['housekeeping'] = true;
            $this->housekeeping = new \Symfony\Config\Pimcore\Maintenance\HousekeepingConfig($config['housekeeping']);
            unset($config['housekeeping']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['housekeeping'])) {
            $output['housekeeping'] = $this->housekeeping->toArray();
        }

        return $output;
    }

}
