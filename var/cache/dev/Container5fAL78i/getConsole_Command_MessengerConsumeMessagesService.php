<?php

namespace Container5fAL78i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerConsumeMessagesService extends App_KernelDevContainer
{
    /*
     * Gets the private 'console.command.messenger_consume_messages' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\ConsumeMessagesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.messenger_consume_messages'] = $instance = new \Symfony\Component\Messenger\Command\ConsumeMessagesCommand(($container->privates['messenger.routable_message_bus'] ?? $container->load('getMessenger_RoutableMessageBusService')), ($container->privates['messenger.receiver_locator'] ?? $container->load('getMessenger_ReceiverLocatorService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')), [0 => 'async', 1 => 'failed'], new \Symfony\Component\Messenger\EventListener\ResetServicesListener(($container->services['services_resetter'] ?? $container->load('getServicesResetterService'))), [0 => 'messenger.bus.default']);

        $instance->setName('messenger:consume');
        $instance->setDescription('Consume messages');

        return $instance;
    }
}
