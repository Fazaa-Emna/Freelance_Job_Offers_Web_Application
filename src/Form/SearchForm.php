<?php

namespace App\Form;

use App\Data\SearchData;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\LessThan;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\ExecutionContextInterface;


class SearchForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('q',TextType::class,[
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Search'
                ]
            ])

            ->add('categories', ChoiceType::class, [
                'label' => false,
                'choices' => array_combine($options['categories'], $options['categories']),
                'required' => false,
                'placeholder' => 'Select a category',
                'invalid_message' => "Invalid Category",
            ])


            ->add('dates', ChoiceType::class, [
                'label' => false,
                'choices' => [
                    'Any' => 'any',
                    'Today' => 'today',
                    'Last 2 days' => '2_days',
                    'Last 3 days' => '3_days',
                    'Last 5 days' => '5_days',
                    'Last 10 days' => '10_days',
                ],
                'expanded' => true,
                'multiple' => true,
                'required' => false,
                'invalid_message' => "",
            ])

            ->add('min', NumberType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Min Budget'
                ]
            ])
            ->add('max', NumberType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Max Budget'
                ]
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SearchData::class,
            'method' => 'GET', 
            'categories' => [],
            'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}