<?php

namespace ContainerALkqxjc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8dVHRGVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8dVHRGV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8dVHRGV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'game' => ['privates', 'App\\Proj\\Play', NULL, 'Cannot autowire service "App\\Proj\\Play": argument "$players" of method "__construct()" is type-hinted "array", you should configure its value explicitly.'],
        ], [
            'game' => 'App\\Proj\\Play',
        ]);
    }
}
