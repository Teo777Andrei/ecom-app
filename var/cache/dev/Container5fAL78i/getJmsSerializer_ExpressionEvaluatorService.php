<?php

namespace Container5fAL78i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_ExpressionEvaluatorService extends App_KernelDevContainer
{
    /*
     * Gets the private 'jms_serializer.expression_evaluator' shared service.
     *
     * @return \JMS\Serializer\Expression\ExpressionEvaluator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
        $a->registerProvider(new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider());

        return $container->privates['jms_serializer.expression_evaluator'] = new \JMS\Serializer\Expression\ExpressionEvaluator($a, ['container' => $container]);
    }
}
