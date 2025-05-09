<?php

namespace ContainerNQgt8wx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DveO1kUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DveO1kU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DveO1kU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'quiz' => ['privates', '.errored..service_locator.DveO1kU.App\\Entity\\Quiz', NULL, 'Cannot autowire service ".service_locator.DveO1kU": it needs an instance of "App\\Entity\\Quiz" but this type has been excluded in "config/services.yaml".'],
            'quizRepository' => ['privates', 'App\\Repository\\QuizRepository', 'getQuizRepositoryService', true],
        ], [
            'quiz' => 'App\\Entity\\Quiz',
            'quizRepository' => 'App\\Repository\\QuizRepository',
        ]);
    }
}
