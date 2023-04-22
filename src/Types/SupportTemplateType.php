<?php

namespace App\Types;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SupportTemplateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mailFrom', TextType::class, [
                'attr' => ['hidden' => true],
                'label' => false
            ])
            ->add('issue', TextType::class, [
                'attr' => ['class' => 'form-control mb-4']
            ])
            ->add('content', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control mb-4',
                    'rows' => 5
                    ]
            ])
            ->add('save', SubmitType::class, [
                'attr' => ['class' => 'btn btn-success']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'attr' => ['class' => 'support-form']
        ]);
    }
    
}