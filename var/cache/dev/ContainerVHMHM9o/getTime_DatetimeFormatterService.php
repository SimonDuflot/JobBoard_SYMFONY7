<?php

namespace ContainerVHMHM9o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTime_DatetimeFormatterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'time.datetime_formatter' shared service.
     *
     * @return \Knp\Bundle\TimeBundle\DateTimeFormatter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-time-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DateTimeFormatter.php';

        return $container->privates['time.datetime_formatter'] = new \Knp\Bundle\TimeBundle\DateTimeFormatter(($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
