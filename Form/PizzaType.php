<?php

namespace Acme\PizzaBundle\Form;

use
    Symfony\Component\Form\Type\AbstractType,
    Symfony\Component\Form\FormBuilder
    ;

class PizzaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('price', 'money')
            ->end()
            ;
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Acme\PizzaBundle\Entity\Pizza',
        );
    }
}