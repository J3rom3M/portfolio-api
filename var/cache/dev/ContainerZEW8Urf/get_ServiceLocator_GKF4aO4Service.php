<?php

namespace ContainerZEW8Urf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GKF4aO4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gKF4aO4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gKF4aO4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'technosRepository' => ['privates', 'App\\Repository\\TechnosRepository', 'getTechnosRepositoryService', true],
        ], [
            'technosRepository' => 'App\\Repository\\TechnosRepository',
        ]);
    }
}
