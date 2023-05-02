<?php

namespace App\Form;

use App\Entity\Application;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ApplicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idfreelancer')
            //->add('idbo')
            ->add('fnFreelancer')
            ->add('lnFreelancer')
            ->add('emailfreelancer', EmailType::class)
            //->add('applicationdate')
            ->add('urlCv', FileType::class, [
                'label' => 'CV (PDF file)',
                'mapped' => false,
                'required' => false,
            ])
            //->add('confirmation')
            //->add('notification')
            //->add('idfreelance')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Application::class,
        ]);
    }
}
