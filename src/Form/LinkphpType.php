<?php

namespace App\Form;

use App\Entity\Linkphp;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LinkphpType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('thetitle',TextType::class,['attr' => ['class' => 'form-control']])
            ->add('thedesc',TextareaType::class,['attr' => ['class' => 'form-control']])
            ->add('theurl',UrlType::class,['attr' => ['class' => 'form-control']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Linkphp::class,
        ]);
    }
}
