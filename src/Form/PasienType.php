<?php

namespace App\Form;

use App\Entity\Pasien;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PasienType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('no_rm')
            ->add('nama')
            ->add('jenis_kelamin')
            ->add('tanggal_lahir')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pasien::class,
        ]);
    }
}
