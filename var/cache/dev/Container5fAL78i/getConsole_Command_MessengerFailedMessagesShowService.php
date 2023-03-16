<?php

namespace Container5fAL78i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerFailedMessagesShowService extends App_KernelDevContainer
{
    /*
     * Gets the private 'console.command.messenger_failed_messages_show' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\FailedMessagesShowCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.messenger_failed_messages_show'] = $instance = new \Symfony\Component\Messenger\Command\FailedMessagesShowCommand('failed', ($container->privates['.service_locator.Y4J.A.e'] ?? $container->load('get_ServiceLocator_Y4J_A_EService')));

        $instance->setName('messenger:failed:show');
        $instance->setDescription('Show one or more messages from the failure transport');

        return $instance;
    }
}
