<?php

namespace ContainerC8FJN3A;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1coBbU6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1coBbU6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1coBbU6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'projectsRepository' => ['privates', 'App\\Repository\\ProjectsRepository', 'getProjectsRepositoryService', true],
        ], [
            'projectsRepository' => 'App\\Repository\\ProjectsRepository',
        ]);
    }
}
