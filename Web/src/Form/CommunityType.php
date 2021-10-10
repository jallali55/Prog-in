<?php

namespace App\Form;

use App\Entity\Community;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommunityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('grp_name')
            ->add('email')
            ->add('phone')
            ->add('description')
            ->add ('save',SubmitType::class, ['attr' => ['formnovalidate' => 'formnovalidate']])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Community::class,
        ]);
    }
}
