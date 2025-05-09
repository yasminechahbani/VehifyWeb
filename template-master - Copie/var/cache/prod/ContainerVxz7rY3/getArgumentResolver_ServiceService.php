<?php

namespace ContainerVxz7rY3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\EmployeController::delete' => ['privates', '.service_locator.I3mS6IL', 'get_ServiceLocator_I3mS6ILService', true],
            'App\\Controller\\EmployeController::edit' => ['privates', '.service_locator.I3mS6IL', 'get_ServiceLocator_I3mS6ILService', true],
            'App\\Controller\\EmployeController::index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\EmployeController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\EmployeController::show' => ['privates', '.service_locator.je7oNoj', 'get_ServiceLocator_Je7oNojService', true],
            'App\\Controller\\EquipementController::delete' => ['privates', '.service_locator.YpyZEBv', 'get_ServiceLocator_YpyZEBvService', true],
            'App\\Controller\\EquipementController::edit' => ['privates', '.service_locator.YpyZEBv', 'get_ServiceLocator_YpyZEBvService', true],
            'App\\Controller\\EquipementController::index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\EquipementController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\EquipementController::show' => ['privates', '.service_locator.wYMas87', 'get_ServiceLocator_WYMas87Service', true],
            'App\\Controller\\GoogleController::connectAction' => ['privates', '.service_locator.Wko0FFz', 'get_ServiceLocator_Wko0FFzService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.JwMuhT7', 'get_ServiceLocator_JwMuhT7Service', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\UserController::editProfile' => ['privates', '.service_locator.pbtqkCT', 'get_ServiceLocator_PbtqkCTService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.8IbU9zc', 'get_ServiceLocator_8IbU9zcService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'App\\Controller\\UserController::verifier' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\EmployeController:delete' => ['privates', '.service_locator.I3mS6IL', 'get_ServiceLocator_I3mS6ILService', true],
            'App\\Controller\\EmployeController:edit' => ['privates', '.service_locator.I3mS6IL', 'get_ServiceLocator_I3mS6ILService', true],
            'App\\Controller\\EmployeController:index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\EmployeController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\EmployeController:show' => ['privates', '.service_locator.je7oNoj', 'get_ServiceLocator_Je7oNojService', true],
            'App\\Controller\\EquipementController:delete' => ['privates', '.service_locator.YpyZEBv', 'get_ServiceLocator_YpyZEBvService', true],
            'App\\Controller\\EquipementController:edit' => ['privates', '.service_locator.YpyZEBv', 'get_ServiceLocator_YpyZEBvService', true],
            'App\\Controller\\EquipementController:index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\EquipementController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\EquipementController:show' => ['privates', '.service_locator.wYMas87', 'get_ServiceLocator_WYMas87Service', true],
            'App\\Controller\\GoogleController:connectAction' => ['privates', '.service_locator.Wko0FFz', 'get_ServiceLocator_Wko0FFzService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.JwMuhT7', 'get_ServiceLocator_JwMuhT7Service', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\UserController:editProfile' => ['privates', '.service_locator.pbtqkCT', 'get_ServiceLocator_PbtqkCTService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.8IbU9zc', 'get_ServiceLocator_8IbU9zcService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'App\\Controller\\UserController:verifier' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\EmployeController::delete' => '?',
            'App\\Controller\\EmployeController::edit' => '?',
            'App\\Controller\\EmployeController::index' => '?',
            'App\\Controller\\EmployeController::new' => '?',
            'App\\Controller\\EmployeController::show' => '?',
            'App\\Controller\\EquipementController::delete' => '?',
            'App\\Controller\\EquipementController::edit' => '?',
            'App\\Controller\\EquipementController::index' => '?',
            'App\\Controller\\EquipementController::new' => '?',
            'App\\Controller\\EquipementController::show' => '?',
            'App\\Controller\\GoogleController::connectAction' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::editProfile' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Controller\\UserController::verifier' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\EmployeController:delete' => '?',
            'App\\Controller\\EmployeController:edit' => '?',
            'App\\Controller\\EmployeController:index' => '?',
            'App\\Controller\\EmployeController:new' => '?',
            'App\\Controller\\EmployeController:show' => '?',
            'App\\Controller\\EquipementController:delete' => '?',
            'App\\Controller\\EquipementController:edit' => '?',
            'App\\Controller\\EquipementController:index' => '?',
            'App\\Controller\\EquipementController:new' => '?',
            'App\\Controller\\EquipementController:show' => '?',
            'App\\Controller\\GoogleController:connectAction' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:editProfile' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'App\\Controller\\UserController:verifier' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]));
    }
}
