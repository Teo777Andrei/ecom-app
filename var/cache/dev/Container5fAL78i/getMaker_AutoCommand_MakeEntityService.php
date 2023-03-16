<?php

namespace Container5fAL78i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoCommand_MakeEntityService extends App_KernelDevContainer
{
    /*
     * Gets the private 'maker.auto_command.make_entity' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService'));
        $b = ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService'));

        $container->privates['maker.auto_command.make_entity'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeEntity($a, ($container->privates['maker.doctrine_helper'] ?? $container->load('getMaker_DoctrineHelperService')), NULL, $b, ($container->privates['maker.entity_class_generator'] ?? $container->load('getMaker_EntityClassGeneratorService')), ($container->privates['maker.php_compat_util'] ?? $container->load('getMaker_PhpCompatUtilService'))), $a, $b);

        $instance->setName('make:entity');
        $instance->setDescription('Creates or updates a Doctrine entity class, and optionally an API Platform resource');

        return $instance;
    }
}
