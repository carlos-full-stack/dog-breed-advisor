<?php

namespace App\Form;

use App\Entity\Dog;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('good_with_children')
            ->add('good_with_other_dogs')
            ->add('shedding')
            ->add('grooming')
            ->add('drooling')
            ->add('coat_length')
            ->add('good_with_strangers')
            ->add('playfulness')
            ->add('protectiveness')
            ->add('trainability')
            ->add('energy')
            ->add('barking')
            ->add('house_size')
            ->add('ppp')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dog::class,
        ]);
    }
}
