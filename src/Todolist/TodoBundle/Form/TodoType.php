<?php

namespace Todolist\TodoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TodoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null , array("label"=>"Ajouter une chose à faire:"))
            ->add('description' , null , array("label"=> "Description de la chose à faire:"))
            ->add('date', 'datetime', array("label"=>"Faire au plus tard:" 
	));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Todolist\TodoBundle\Entity\Todo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'todolist_todobundle_todo';
    }
}
