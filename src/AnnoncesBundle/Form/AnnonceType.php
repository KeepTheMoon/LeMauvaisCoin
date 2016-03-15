<?php

namespace AnnoncesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnonceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('aTitre')
            ->add('aDescription')
            ->add('aPrix')
            ->add('aImage')
            ->add('aProfessionnel')
            ->add('aType')
            ->add('auser')
            ->add('a_Nomcat')
            ->add('a_idVille')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AnnoncesBundle\Entity\Annonce'
        ));
    }
}
