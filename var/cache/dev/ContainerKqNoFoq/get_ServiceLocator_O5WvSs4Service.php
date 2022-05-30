<?php

namespace ContainerKqNoFoq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O5WvSs4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o5WvSs4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o5WvSs4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\LibraryController::createBookProcess' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\LibraryController::deleteBookByIsbnProcess' => ['privates', '.service_locator.nLzTFMn', 'get_ServiceLocator_NLzTFMnService', true],
            'App\\Controller\\LibraryController::showAllBooks' => ['privates', '.service_locator.TBgEv1t', 'get_ServiceLocator_TBgEv1tService', true],
            'App\\Controller\\LibraryController::showBookByIsbnProcess' => ['privates', '.service_locator.TBgEv1t', 'get_ServiceLocator_TBgEv1tService', true],
            'App\\Controller\\LibraryController::updateBook' => ['privates', '.service_locator.TBgEv1t', 'get_ServiceLocator_TBgEv1tService', true],
            'App\\Controller\\LibraryController::updateBookProcess' => ['privates', '.service_locator.nLzTFMn', 'get_ServiceLocator_NLzTFMnService', true],
            'App\\Controller\\ProjController::highscore' => ['privates', '.service_locator.eHdw9EY', 'get_ServiceLocator_EHdw9EYService', true],
            'App\\Controller\\ProjController::plump' => ['privates', '.service_locator.wMLwGX5', 'get_ServiceLocator_WMLwGX5Service', true],
            'App\\Controller\\ProjController::reset' => ['privates', '.service_locator.wMLwGX5', 'get_ServiceLocator_WMLwGX5Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\LibraryController:createBookProcess' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\LibraryController:deleteBookByIsbnProcess' => ['privates', '.service_locator.nLzTFMn', 'get_ServiceLocator_NLzTFMnService', true],
            'App\\Controller\\LibraryController:showAllBooks' => ['privates', '.service_locator.TBgEv1t', 'get_ServiceLocator_TBgEv1tService', true],
            'App\\Controller\\LibraryController:showBookByIsbnProcess' => ['privates', '.service_locator.TBgEv1t', 'get_ServiceLocator_TBgEv1tService', true],
            'App\\Controller\\LibraryController:updateBook' => ['privates', '.service_locator.TBgEv1t', 'get_ServiceLocator_TBgEv1tService', true],
            'App\\Controller\\LibraryController:updateBookProcess' => ['privates', '.service_locator.nLzTFMn', 'get_ServiceLocator_NLzTFMnService', true],
            'App\\Controller\\ProjController:highscore' => ['privates', '.service_locator.eHdw9EY', 'get_ServiceLocator_EHdw9EYService', true],
            'App\\Controller\\ProjController:plump' => ['privates', '.service_locator.wMLwGX5', 'get_ServiceLocator_WMLwGX5Service', true],
            'App\\Controller\\ProjController:reset' => ['privates', '.service_locator.wMLwGX5', 'get_ServiceLocator_WMLwGX5Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\LibraryController::createBookProcess' => '?',
            'App\\Controller\\LibraryController::deleteBookByIsbnProcess' => '?',
            'App\\Controller\\LibraryController::showAllBooks' => '?',
            'App\\Controller\\LibraryController::showBookByIsbnProcess' => '?',
            'App\\Controller\\LibraryController::updateBook' => '?',
            'App\\Controller\\LibraryController::updateBookProcess' => '?',
            'App\\Controller\\ProjController::highscore' => '?',
            'App\\Controller\\ProjController::plump' => '?',
            'App\\Controller\\ProjController::reset' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\LibraryController:createBookProcess' => '?',
            'App\\Controller\\LibraryController:deleteBookByIsbnProcess' => '?',
            'App\\Controller\\LibraryController:showAllBooks' => '?',
            'App\\Controller\\LibraryController:showBookByIsbnProcess' => '?',
            'App\\Controller\\LibraryController:updateBook' => '?',
            'App\\Controller\\LibraryController:updateBookProcess' => '?',
            'App\\Controller\\ProjController:highscore' => '?',
            'App\\Controller\\ProjController:plump' => '?',
            'App\\Controller\\ProjController:reset' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
