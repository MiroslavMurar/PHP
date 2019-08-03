<?php

namespace App\Form;

use App\Entity\OrderrForm;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderrFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('phone')
            ->add('nameAndSurname')
            ->add('street')
            ->add('city')
            ->add('zip')
            ->add('note')
            ->add('totalPrice')
            ->add('created')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => OrderrForm::class,
        ]);
    }
}
