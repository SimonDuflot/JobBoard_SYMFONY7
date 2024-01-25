<?php

namespace Container2Vl4tQY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VnOax60Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vnOax60' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vnOax60'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'homeSettingRepository' => ['privates', 'App\\Repository\\HomeSettingRepository', 'getHomeSettingRepositoryService', true],
            'offerRepository' => ['privates', 'App\\Repository\\OfferRepository', 'getOfferRepositoryService', true],
        ], [
            'em' => '?',
            'homeSettingRepository' => 'App\\Repository\\HomeSettingRepository',
            'offerRepository' => 'App\\Repository\\OfferRepository',
        ]);
    }
}