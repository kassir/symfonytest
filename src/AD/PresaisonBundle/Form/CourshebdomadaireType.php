<?php

namespace AD\PresaisonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CourshebdomadaireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('jourcourshebdo')
            ->add('heuredebutcourshebdo', 'time')
            ->add('heurefincourshebdo', 'time')
            ->add('iddanse1')
            ->add('idniveau')
            ->add('iddanse')
            ->add('idsalle1')
            ->add('idsalle')
            ->add('idprof')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AD\PresaisonBundle\Entity\Courshebdomadaire'
        ));
    }
}
