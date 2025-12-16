<?php

namespace Symfony\Config\PimcoreAdmin;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BrandingConfig 
{
    private $loginScreenInvertColors;
    private $colorLoginScreen;
    private $colorAdminInterface;
    private $colorAdminInterfaceBackground;
    private $loginScreenCustomImage;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function loginScreenInvertColors($value): static
    {
        $this->_usedProperties['loginScreenInvertColors'] = true;
        $this->loginScreenInvertColors = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function colorLoginScreen($value): static
    {
        $this->_usedProperties['colorLoginScreen'] = true;
        $this->colorLoginScreen = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function colorAdminInterface($value): static
    {
        $this->_usedProperties['colorAdminInterface'] = true;
        $this->colorAdminInterface = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function colorAdminInterfaceBackground($value): static
    {
        $this->_usedProperties['colorAdminInterfaceBackground'] = true;
        $this->colorAdminInterfaceBackground = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function loginScreenCustomImage($value): static
    {
        $this->_usedProperties['loginScreenCustomImage'] = true;
        $this->loginScreenCustomImage = $value;

        return $this;
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('login_screen_invert_colors', $config)) {
            $this->_usedProperties['loginScreenInvertColors'] = true;
            $this->loginScreenInvertColors = $config['login_screen_invert_colors'];
            unset($config['login_screen_invert_colors']);
        }

        if (array_key_exists('color_login_screen', $config)) {
            $this->_usedProperties['colorLoginScreen'] = true;
            $this->colorLoginScreen = $config['color_login_screen'];
            unset($config['color_login_screen']);
        }

        if (array_key_exists('color_admin_interface', $config)) {
            $this->_usedProperties['colorAdminInterface'] = true;
            $this->colorAdminInterface = $config['color_admin_interface'];
            unset($config['color_admin_interface']);
        }

        if (array_key_exists('color_admin_interface_background', $config)) {
            $this->_usedProperties['colorAdminInterfaceBackground'] = true;
            $this->colorAdminInterfaceBackground = $config['color_admin_interface_background'];
            unset($config['color_admin_interface_background']);
        }

        if (array_key_exists('login_screen_custom_image', $config)) {
            $this->_usedProperties['loginScreenCustomImage'] = true;
            $this->loginScreenCustomImage = $config['login_screen_custom_image'];
            unset($config['login_screen_custom_image']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['loginScreenInvertColors'])) {
            $output['login_screen_invert_colors'] = $this->loginScreenInvertColors;
        }
        if (isset($this->_usedProperties['colorLoginScreen'])) {
            $output['color_login_screen'] = $this->colorLoginScreen;
        }
        if (isset($this->_usedProperties['colorAdminInterface'])) {
            $output['color_admin_interface'] = $this->colorAdminInterface;
        }
        if (isset($this->_usedProperties['colorAdminInterfaceBackground'])) {
            $output['color_admin_interface_background'] = $this->colorAdminInterfaceBackground;
        }
        if (isset($this->_usedProperties['loginScreenCustomImage'])) {
            $output['login_screen_custom_image'] = $this->loginScreenCustomImage;
        }

        return $output;
    }

}
