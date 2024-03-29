<?php

namespace ContainerVHMHM9o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Kf3ZknsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Kf3Zkns' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Kf3Zkns'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entrepriseProfilRepository' => ['privates', 'App\\Repository\\EntrepriseProfilRepository', 'getEntrepriseProfilRepositoryService', true],
        ], [
            'entrepriseProfilRepository' => 'App\\Repository\\EntrepriseProfilRepository',
        ]);
    }
}
