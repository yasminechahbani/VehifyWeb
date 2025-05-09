<?php

namespace ContainerNQgt8wx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XL_QmnpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XL.Qmnp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XL.Qmnp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'organizationRepository' => ['privates', 'App\\Repository\\EmployeRepository', 'getEmployeRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'entityManager' => '?',
            'organizationRepository' => 'App\\Repository\\EmployeRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
