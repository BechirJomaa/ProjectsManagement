<?php

namespace GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class ProjetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('dateDebut')
            ->add('dateFin')
            ->add('description', 'textarea', array('required' => true))
            ->add('cout')
            ->add('statut')
            ->add('adresse')
           
            ->add('client', 'entity',
            array(
                'class' => 'GestionBundle:Client',
                'label' => 'Client'
            ))
            ->add('submit', 'submit', array(
                'label' => 'Enregistrer', 
                'attr' => array('class' => 'btn')
            ))
            
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestionBundle\Entity\Projet'
        ));
    }
}
