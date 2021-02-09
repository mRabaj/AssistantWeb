<?php

namespace App\Form;

use App\Entity\Patient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\HealthProfessional;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', ChoiceType::class,[
                'choices'=>[
                    'Man'=>'Man',
                    'Women'=>'Women',                    
                    'Undetermined'=>'Undetermined'
                ]
            ])
            ->add('firstName')
            ->add('lastName')
            ->add('birthDate', DateTimeType::class,array('widget'=>'single_text','attr'=>array(
                'class'=>'form-control'
            )))
            ->add('city')
            ->add('phonenumber')
            ->add('address')
            ->add('postCode')
            ->add('mailAddress')
            ->add('numberOfChildren')
            ->add('occupationEducation')           
            ->add('socialSecurityNumber')
            ->add('disease')
            ->add('psycology')
            ->add('medicalTreatment')
            ->add('longLastingTreatment')
            ->add('punctualProcessing')
            ->add('otherMedicalHistory')
            ->add('sprain')
            ->add('fracture')
            ->add('dislocation')
            ->add('carAccident')
            ->add('accidentOnThePublicRoad')
            ->add('fall')
            ->add('otherTraumaHistory')
            ->add('orthopaedic')
            ->add('headChurigie')
            ->add('chestChurigie')
            ->add('churigiaOfAbdomen')
            ->add('gynecologicalChurigie')
            ->add('orl')
            ->add('death')
            ->add('childbirth')
            ->add('otherFamilyHistory')
            ->add('landlinePhone')
            ->add('address2')
            ->add('generalRemarks',TextareaType::class)
            ->add('maritalStatus', ChoiceType::class,
            [
                'choices'=>
                [
                    'no-specify'=>'no-specify',
                    'Single'=>'Single',
                    'in-a-relationship_with '=>'in-a-relationship_with ',
                    'civil-partnership'=>'civil-partnership',
                    'Divorced'=>'Divorced',
                    'widower'=>'widower',
                    
                ]
            ])
            ->add('leisure')
            ->add('mutual')
            ->add('sentBy')
            ->add('manualPreference', ChoiceType::class,
            [
                'choices'=>
                [
                    'right-handed'=>'right-handed',
                    'left-handed'=> 'left-handed',
                    
                ]
            ])
            ->add('notesOnHistory', TextareaType::class )
            ->add('professional', EntityType::class, [
                'class' => Healthprofessional::class,                
                'choice_label' => 'lastName',
                'label'=>'Praticien',
                'attr' => array(
                'class' => 'form-control',
                
                )
                ]);

                
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Patient::class,
            'transition_domain' =>'forms'
        ]);
    }
}
