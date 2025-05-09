<?php

namespace ContainerNQgt8wx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_Security_Listener_CheckTwoFactorCodeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.security.listener.check_two_factor_code' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Http\EventListener\CheckTwoFactorCodeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'AbstractCheckCodeListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'CheckTwoFactorCodeListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'PreparationRecorderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'TokenPreparationRecorder.php';

        return $container->privates['scheb_two_factor.security.listener.check_two_factor_code'] = new \Scheb\TwoFactorBundle\Security\Http\EventListener\CheckTwoFactorCodeListener(new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TokenPreparationRecorder(($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container))), ($container->privates['scheb_two_factor.provider_registry'] ?? $container->load('getSchebTwoFactor_ProviderRegistryService')));
    }
}
