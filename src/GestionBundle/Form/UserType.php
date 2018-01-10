<?php

namespace GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use FOS\UserBundle\Util\LegacyFormHelper;



class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email')
             ->add('password', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('roles', 'collection', array(
                  
                   'type' => 'choice',
                   'options' => array(
                       'choices' => array(
                           'ROLE_CHEF' => 'Chef de Projet',
                           'ROLE_RESPONSABLE' => 'Responsable de projet',
                           'FINANCIER' => 'Financier',
                           'COMMERCIAL' => 'Commercial'
                       )
                   )
               )
           )
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
            'data_class' => 'GestionBundle\Entity\User'
        ));
    }
}
