<?php

namespace ContainerVxz7rY3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmployeControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\EmployeController' shared autowired service.
     *
     * @return \App\Controller\EmployeController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\EmployeController'] = $instance = new \App\Controller\EmployeController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\EmployeController', $container));

        return $instance;
    }
}
