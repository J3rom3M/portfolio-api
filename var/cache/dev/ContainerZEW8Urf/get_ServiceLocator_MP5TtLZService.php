<?php

namespace ContainerZEW8Urf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MP5TtLZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MP5TtLZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MP5TtLZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\PostController::delete' => ['privates', '.service_locator.GgAWaCI', 'get_ServiceLocator_GgAWaCIService', true],
            'App\\Controller\\PostController::getAll' => ['privates', '.service_locator.d00XA5i', 'get_ServiceLocator_D00XA5iService', true],
            'App\\Controller\\PostController::post' => ['privates', '.service_locator.MosDl4q', 'get_ServiceLocator_MosDl4qService', true],
            'App\\Controller\\PostController::putAndPatch' => ['privates', '.service_locator.7r.G9U.', 'get_ServiceLocator_7r_G9U_Service', true],
            'App\\Controller\\ProfileController::delete' => ['privates', '.service_locator.lDJtsQc', 'get_ServiceLocator_LDJtsQcService', true],
            'App\\Controller\\ProfileController::getAll' => ['privates', '.service_locator.vkQyYwq', 'get_ServiceLocator_VkQyYwqService', true],
            'App\\Controller\\ProfileController::profile' => ['privates', '.service_locator.MosDl4q', 'get_ServiceLocator_MosDl4qService', true],
            'App\\Controller\\ProfileController::putAndPatch' => ['privates', '.service_locator.f2iTGue', 'get_ServiceLocator_F2iTGueService', true],
            'App\\Controller\\TechnoController::delete' => ['privates', '.service_locator.dpwtab0', 'get_ServiceLocator_Dpwtab0Service', true],
            'App\\Controller\\TechnoController::getAll' => ['privates', '.service_locator.gKF4aO4', 'get_ServiceLocator_GKF4aO4Service', true],
            'App\\Controller\\TechnoController::putAndPatch' => ['privates', '.service_locator.vy.A3AP', 'get_ServiceLocator_Vy_A3APService', true],
            'App\\Controller\\TechnoController::techno' => ['privates', '.service_locator.MosDl4q', 'get_ServiceLocator_MosDl4qService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\PostController:delete' => ['privates', '.service_locator.GgAWaCI', 'get_ServiceLocator_GgAWaCIService', true],
            'App\\Controller\\PostController:getAll' => ['privates', '.service_locator.d00XA5i', 'get_ServiceLocator_D00XA5iService', true],
            'App\\Controller\\PostController:post' => ['privates', '.service_locator.MosDl4q', 'get_ServiceLocator_MosDl4qService', true],
            'App\\Controller\\PostController:putAndPatch' => ['privates', '.service_locator.7r.G9U.', 'get_ServiceLocator_7r_G9U_Service', true],
            'App\\Controller\\ProfileController:delete' => ['privates', '.service_locator.lDJtsQc', 'get_ServiceLocator_LDJtsQcService', true],
            'App\\Controller\\ProfileController:getAll' => ['privates', '.service_locator.vkQyYwq', 'get_ServiceLocator_VkQyYwqService', true],
            'App\\Controller\\ProfileController:profile' => ['privates', '.service_locator.MosDl4q', 'get_ServiceLocator_MosDl4qService', true],
            'App\\Controller\\ProfileController:putAndPatch' => ['privates', '.service_locator.f2iTGue', 'get_ServiceLocator_F2iTGueService', true],
            'App\\Controller\\TechnoController:delete' => ['privates', '.service_locator.dpwtab0', 'get_ServiceLocator_Dpwtab0Service', true],
            'App\\Controller\\TechnoController:getAll' => ['privates', '.service_locator.gKF4aO4', 'get_ServiceLocator_GKF4aO4Service', true],
            'App\\Controller\\TechnoController:putAndPatch' => ['privates', '.service_locator.vy.A3AP', 'get_ServiceLocator_Vy_A3APService', true],
            'App\\Controller\\TechnoController:techno' => ['privates', '.service_locator.MosDl4q', 'get_ServiceLocator_MosDl4qService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\PostController::delete' => '?',
            'App\\Controller\\PostController::getAll' => '?',
            'App\\Controller\\PostController::post' => '?',
            'App\\Controller\\PostController::putAndPatch' => '?',
            'App\\Controller\\ProfileController::delete' => '?',
            'App\\Controller\\ProfileController::getAll' => '?',
            'App\\Controller\\ProfileController::profile' => '?',
            'App\\Controller\\ProfileController::putAndPatch' => '?',
            'App\\Controller\\TechnoController::delete' => '?',
            'App\\Controller\\TechnoController::getAll' => '?',
            'App\\Controller\\TechnoController::putAndPatch' => '?',
            'App\\Controller\\TechnoController::techno' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\PostController:delete' => '?',
            'App\\Controller\\PostController:getAll' => '?',
            'App\\Controller\\PostController:post' => '?',
            'App\\Controller\\PostController:putAndPatch' => '?',
            'App\\Controller\\ProfileController:delete' => '?',
            'App\\Controller\\ProfileController:getAll' => '?',
            'App\\Controller\\ProfileController:profile' => '?',
            'App\\Controller\\ProfileController:putAndPatch' => '?',
            'App\\Controller\\TechnoController:delete' => '?',
            'App\\Controller\\TechnoController:getAll' => '?',
            'App\\Controller\\TechnoController:putAndPatch' => '?',
            'App\\Controller\\TechnoController:techno' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
