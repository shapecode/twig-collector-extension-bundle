<?php

namespace Shapecode\Bundle\TwigCollectorBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * Class ShapecodeTwigCollectorExtension
 * @package Shapecode\Bundle\TwigCollectorBundle\DependencyInjection
 * @author Nikita Loges
 */
class ShapecodeTwigCollectorExtension extends Extension
{

    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');
    }
}
