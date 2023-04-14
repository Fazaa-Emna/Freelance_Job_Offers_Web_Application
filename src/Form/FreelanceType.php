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


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\Choice;

class FreelanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('idbo', TextType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Please enter a valid value',
                ]),
            ],
        ])
            ->add('emailbo', EmailType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a valid value',
                    ]),
                ],
            ])
            ->add('categoryF', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a valid value',
                    ]),
                ],
            ])
            ->add('description', TextareaType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a valid value',
                    ]),
                    new Length([
                        'min' => 10,
                        'max' => 2000,
                        'minMessage' => 'The description should have at least {{ limit }} characters',
                        'maxMessage' => 'The description should have at most {{ limit }} characters',
                    ]),
                ],
            ])
            ->add('budget',NumberType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a valid value',
                    ]),
                    new GreaterThan([
                        'value' => 0,
                        'message' => 'The budget should be greater than zero',
                    ]),
                ],
            ])
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
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Freelance::class,
        ]);
    }
}
