<?php

// src/Form/BookingType.php

namespace App\Form;

use App\Entity\Booking;
use App\Entity\Service;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('service', EntityType::class, [
                'class' => Service::class,
                'choice_label' => 'name',
                'placeholder' => 'Choisissez un service',
            ])
            ->add('date', DateTimeType::class, [
                'widget' => 'single_text',
                'input' => 'datetime',
                'html5' => true,
                'attr' => ['class' => 'js-datetimepicker'],
                'date_label' => 'Date',
                'time_label' => 'Heure',
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Réserver',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}
