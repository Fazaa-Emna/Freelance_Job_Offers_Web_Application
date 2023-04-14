<?php

namespace App\Form;

use App\Entity\Freelance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ImageType;
use Symfony\Component\Validator\Constraints\Image;

class FreelanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idbo')
            ->add('emailbo', EmailType::class)
            ->add('categoryF')
            ->add('description')
            ->add('budget')
            //->add('state')
            //->add('adddate')
            ->add('logo', FileType::class, [
                'label' => 'LOGO (PNG file)',
                'mapped' => false,
                'required' => false,
                'data_class' => null,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpeg',
                            'image/gif',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image file (PNG, JPEG or GIF)',
                    ])
                ],
            ])
            ->add('nbapplicants');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Freelance::class,
        ]);
    }
}
