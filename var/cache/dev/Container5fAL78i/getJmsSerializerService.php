<?php

namespace Container5fAL78i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializerService extends App_KernelDevContainer
{
    /*
     * Gets the public 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'metadata_driver' => ['privates', 'jms_serializer.metadata.typed_properties_driver', 'getJmsSerializer_Metadata_TypedPropertiesDriverService', true],
        ], [
            'metadata_driver' => '?',
        ]), 'metadata_driver'), 'Metadata\\ClassHierarchyMetadata', false);
        $a->setCache(($container->privates['jms_serializer.metadata.cache.file_cache'] ?? ($container->privates['jms_serializer.metadata.cache.file_cache'] = new \Metadata\Cache\FileCache(($container->targetDir.''.'/jms_serializer_default')))));
        $a->setIncludeInterfaces(false);
        $b = new \JMS\Serializer\Handler\LazyHandlerRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jms_serializer.array_collection_handler' => ['privates', 'jms_serializer.array_collection_handler', 'getJmsSerializer_ArrayCollectionHandlerService', true],
            'jms_serializer.constraint_violation_handler' => ['privates', 'jms_serializer.constraint_violation_handler', 'getJmsSerializer_ConstraintViolationHandlerService', true],
            'jms_serializer.datetime_handler' => ['privates', 'jms_serializer.datetime_handler', 'getJmsSerializer_DatetimeHandlerService', true],
            'jms_serializer.form_error_handler' => ['privates', 'jms_serializer.form_error_handler', 'getJmsSerializer_FormErrorHandlerService', true],
            'jms_serializer.iterator_handler' => ['privates', 'jms_serializer.iterator_handler', 'getJmsSerializer_IteratorHandlerService', true],
        ], [
            'jms_serializer.array_collection_handler' => '?',
            'jms_serializer.constraint_violation_handler' => '?',
            'jms_serializer.datetime_handler' => '?',
            'jms_serializer.form_error_handler' => '?',
            'jms_serializer.iterator_handler' => '?',
        ]));
        $b->registerHandler(1, 'ArrayCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'ArrayCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'ArrayCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\Common\\Collections\\ArrayCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\Common\\Collections\\ArrayCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\Common\\Collections\\ArrayCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ORM\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ORM\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ORM\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']);
        $b->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolationList', 'xml', [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml']);
        $b->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolationList', 'json', [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson']);
        $b->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolation', 'xml', [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml']);
        $b->registerHandler(1, 'Symfony\\Component\\Validator\\ConstraintViolation', 'json', [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson']);
        $b->registerHandler(1, 'DateTime', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime']);
        $b->registerHandler(1, 'DateTime', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime']);
        $b->registerHandler(1, 'DateTimeImmutable', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable']);
        $b->registerHandler(1, 'DateTimeImmutable', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable']);
        $b->registerHandler(1, 'DateInterval', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval']);
        $b->registerHandler(1, 'DateInterval', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval']);
        $b->registerHandler(1, 'DateTimeInterface', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeInterface']);
        $b->registerHandler(1, 'DateTimeInterface', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeInterface']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\Form', 'xml', [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\Form', 'json', [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\FormInterface', 'xml', [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToXml']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\FormInterface', 'json', [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToJson']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\FormError', 'xml', [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml']);
        $b->registerHandler(1, 'Symfony\\Component\\Form\\FormError', 'json', [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson']);
        $b->registerHandler(1, 'Iterator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'Iterator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'ArrayIterator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'ArrayIterator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'Generator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(1, 'Generator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']);
        $b->registerHandler(2, 'ArrayCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'ArrayCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'ArrayCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\Common\\Collections\\ArrayCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\Common\\Collections\\ArrayCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\Common\\Collections\\ArrayCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ORM\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ORM\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ORM\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\MongoDB\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'json', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'xml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'Doctrine\\ODM\\PHPCR\\PersistentCollection', 'yml', [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']);
        $b->registerHandler(2, 'DateTime', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson']);
        $b->registerHandler(2, 'DateTime', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml']);
        $b->registerHandler(2, 'DateTimeImmutable', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson']);
        $b->registerHandler(2, 'DateTimeImmutable', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml']);
        $b->registerHandler(2, 'DateInterval', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson']);
        $b->registerHandler(2, 'DateInterval', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml']);
        $b->registerHandler(2, 'DateTimeInterface', 'json', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromJson']);
        $b->registerHandler(2, 'DateTimeInterface', 'xml', [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromXml']);
        $b->registerHandler(2, 'Iterator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']);
        $b->registerHandler(2, 'Iterator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']);
        $b->registerHandler(2, 'ArrayIterator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']);
        $b->registerHandler(2, 'ArrayIterator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']);
        $b->registerHandler(2, 'Generator', 'json', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator']);
        $b->registerHandler(2, 'Generator', 'xml', [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator']);
        $c = ($container->privates['jms_serializer.expression_evaluator'] ?? $container->load('getJmsSerializer_ExpressionEvaluatorService'));

        $d = new \JMS\Serializer\Accessor\DefaultAccessorStrategy($c);
        $e = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jms_serializer.doctrine_proxy_subscriber' => ['privates', 'jms_serializer.doctrine_proxy_subscriber', 'getJmsSerializer_DoctrineProxySubscriberService', true],
        ], [
            'jms_serializer.doctrine_proxy_subscriber' => '?',
        ]));
        $e->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], NULL, NULL, 'Doctrine\\Persistence\\Proxy');
        $e->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], NULL, NULL, 'Doctrine\\Common\\Persistence\\Proxy');
        $e->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\ORM\\PersistentCollection');
        $e->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\ODM\\MongoDB\\PersistentCollection');
        $e->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\ODM\\PHPCR\\PersistentCollection');
        $e->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\Persistence\\Proxy');
        $e->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'Doctrine\\Common\\Persistence\\Proxy');
        $e->addListener('serializer.pre_serialize', [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], NULL, NULL, 'ProxyManager\\Proxy\\LazyLoadingInterface');
        $f = new \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory();
        $f->setOptions(1024);
        $g = new \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory(false);
        $g->setOptions(0);

        return $container->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, [2 => new \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory($a, $b, new \JMS\Serializer\Construction\DoctrineObjectConstructor(($container->services['doctrine'] ?? $container->getDoctrineService()), new \JMS\Serializer\Construction\UnserializeObjectConstructor(), 'null'), $d, $e, $c), 1 => new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory($a, $b, $d, $e, $c)], ['json' => $f, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory()], ['json' => $g, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory()], ($container->services['jms_serializer.serialization_context_factory'] ?? ($container->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($container->services['jms_serializer.deserialization_context_factory'] ?? ($container->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($container->privates['jms_serializer.type_parser'] ?? ($container->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }
}
