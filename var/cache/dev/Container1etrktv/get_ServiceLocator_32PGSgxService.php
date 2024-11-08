<?php

namespace Container1etrktv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_32PGSgxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.32PGSgx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.32PGSgx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\BookingController::reserver' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\BookingController::reservations' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\BookingController::annuler' => ['privates', '.service_locator.3AFEbSY', 'get_ServiceLocator_3AFEbSYService', true],
            'App\\Controller\\BookingController::confirmer' => ['privates', '.service_locator.3AFEbSY', 'get_ServiceLocator_3AFEbSYService', true],
            'App\\Controller\\ServiceController::list' => ['privates', '.service_locator.2BmsL9T', 'get_ServiceLocator_2BmsL9TService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\BookingController:reserver' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\BookingController:reservations' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\BookingController:annuler' => ['privates', '.service_locator.3AFEbSY', 'get_ServiceLocator_3AFEbSYService', true],
            'App\\Controller\\BookingController:confirmer' => ['privates', '.service_locator.3AFEbSY', 'get_ServiceLocator_3AFEbSYService', true],
            'App\\Controller\\ServiceController:list' => ['privates', '.service_locator.2BmsL9T', 'get_ServiceLocator_2BmsL9TService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\BookingController::reserver' => '?',
            'App\\Controller\\BookingController::reservations' => '?',
            'App\\Controller\\BookingController::annuler' => '?',
            'App\\Controller\\BookingController::confirmer' => '?',
            'App\\Controller\\ServiceController::list' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\BookingController:reserver' => '?',
            'App\\Controller\\BookingController:reservations' => '?',
            'App\\Controller\\BookingController:annuler' => '?',
            'App\\Controller\\BookingController:confirmer' => '?',
            'App\\Controller\\ServiceController:list' => '?',
        ]);
    }
}
