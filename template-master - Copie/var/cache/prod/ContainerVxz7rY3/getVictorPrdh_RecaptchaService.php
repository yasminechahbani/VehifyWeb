<?php

namespace ContainerVxz7rY3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVictorPrdh_RecaptchaService extends App_KernelProdContainer
{
    /*
     * Gets the public 'victor_prdh.recaptcha' shared service.
     *
     * @return \ReCaptcha\ReCaptcha
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['victor_prdh.recaptcha'] = new \ReCaptcha\ReCaptcha($container->getEnv('GOOGLE_RECAPTCHA_SECRET_KEY'));
    }
}
