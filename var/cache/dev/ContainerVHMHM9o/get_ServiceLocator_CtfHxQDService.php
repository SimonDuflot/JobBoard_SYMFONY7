<?php

namespace ContainerVHMHM9o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CtfHxQDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CtfHxQD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CtfHxQD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'tokenStorageInterface' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'uploadFilesService' => ['services', 'App\\Services\\UploadFilesService', 'getUploadFilesServiceService', true],
            'userProfilRepository' => ['privates', 'App\\Repository\\UserProfilRepository', 'getUserProfilRepositoryService', true],
        ], [
            'em' => '?',
            'tokenStorageInterface' => '?',
            'uploadFilesService' => 'App\\Services\\UploadFilesService',
            'userProfilRepository' => 'App\\Repository\\UserProfilRepository',
        ]);
    }
}
