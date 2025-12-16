<?php

namespace ContainerBEOUcSK;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/Templating/Navigation.php';

class NavigationGhost46bfb35 extends \Pimcore\Twig\Extension\Templating\Navigation implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'charset' => [parent::class, 'charset', null, 8],
        "\0".parent::class."\0".'builder' => [parent::class, 'builder', null, 16],
        "\0".parent::class."\0".'rendererLocator' => [parent::class, 'rendererLocator', null, 16],
        'builder' => [parent::class, 'builder', null, 16],
        'charset' => [parent::class, 'charset', null, 8],
        'rendererLocator' => [parent::class, 'rendererLocator', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('NavigationGhost46bfb35', false)) {
    \class_alias(__NAMESPACE__.'\\NavigationGhost46bfb35', 'NavigationGhost46bfb35', false);
}
