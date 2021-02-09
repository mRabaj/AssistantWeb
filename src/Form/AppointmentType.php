<?php
    namespace App\Form;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    use App\Entity\Patient;
  
    use Symfony\Bridge\Doctrine\Form\Type\EntityType;


    class AppointmentType extends AbstractType
    {
        /**
        * @param FormBuilderInterface $builder
        * @param array $options
        */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            
            $builder

            
            ->add('patient', EntityType::class, [
                'class' => Patient::class,                
                'choice_label' => 'lastName',
                'label'=>'Patient',
                'attr' => array(
                'class' => 'form-control',
                'title' => 'patient\'s name'
                )])
                ->add('startmeeting', DateTimeType::class, array('label'=>'Début heure de RDV','date_widget'=>'single_text', 'attr' => array(
                    'class' => 'form-control',
                    'title' => 'Start of the meeting',
                )))
                ->add('endmeeting', DateTimeType::class, array('label'=>'Date fin de rendez vous', 'date_widget'=>'single_text','attr' => array(
                    'class' => 'form-control',
                    'title' => 'End of meeting',
                    
                )));

            $builder->add('save', SubmitType::class, array(
            'label' => 'Enregistrer',
            'attr' => array(
            'class' => 'btn btn-primary btn-margin',
            'title' => 'Enregistrer'
            )));
        }
        /**
        * @param OptionsResolver $resolver
        */
        public function configureOptions(OptionsResolver $resolver)
        {
        $resolver->setDefaults(array(
        'data_class' => 'App\Entity\Appointment',
        'route'=>null
        ));
    }
    }