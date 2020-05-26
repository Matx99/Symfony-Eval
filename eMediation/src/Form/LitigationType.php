<?php

namespace App\Form;

use App\Entity\Litigation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LitigationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subject')
            ->add('article')
            ->add('payment')
            ->add('refund')
            ->add('delay')
            ->add('status')
            ->add('expertiseField')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Litigation::class,
        ]);
    }
}
