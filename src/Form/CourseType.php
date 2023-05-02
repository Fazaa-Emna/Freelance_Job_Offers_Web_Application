<?php

namespace App\Form;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use App\Entity\Course;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class CourseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('price')
            ->add('photo', FileType::class, [
                'mapped' => false, // don't map this field to any entity property
           ])
            ->add('category', ChoiceType::class, [
                'choices'  => [
                    'Mathematics' => 'Mathematics',
                    'Marketing' => 'Marketing',
                    'Bussiness' => 'Bussiness',
                    'Development' => 'Development'
                ],
            ]);
          
    }
 

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Course::class,
        ]);
    }
}
