<?php

namespace ContainerL0nRn4v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TBgEv1tService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TBgEv1t' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TBgEv1t'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'libraryRepository' => ['privates', 'App\\Repository\\LibraryRepository', 'getLibraryRepositoryService', true],
        ], [
            'libraryRepository' => 'App\\Repository\\LibraryRepository',
        ]);
    }
}
