<?php

namespace VolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class billetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('date')->add('source')->add('destination')->add('prix')->add('classe', ChoiceType::class, [
    'choices' => [
        'eco' => 'eco',
        'pre' => 'pre',
    ],
    'choice_attr' => function($choice, $key, $value) {
        // adds a class like attending_yes, attending_no, etc
        return ['class' => 'attending_'.strtolower($key)];
    },
]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VolBundle\Entity\billet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'volbundle_billet';
    }


}
