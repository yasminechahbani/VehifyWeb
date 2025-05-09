<?php

namespace ContainerVxz7rY3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVictorPrdhRecaptchaBundle_RecaptchaValidatorService extends App_KernelProdContainer
{
    /*
     * Gets the public 'victor_prdh_recaptcha_bundle.recaptcha_validator' shared autowired service.
     *
     * @return \VictorPrdh\RecaptchaBundle\Validator\Constraints\IsValidCaptchaValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['victor_prdh_recaptcha_bundle.recaptcha_validator'] = new \VictorPrdh\RecaptchaBundle\Validator\Constraints\IsValidCaptchaValidator(($container->services['victor_prdh.recaptcha'] ??= new \ReCaptcha\ReCaptcha($container->getEnv('GOOGLE_RECAPTCHA_SECRET_KEY'))), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
