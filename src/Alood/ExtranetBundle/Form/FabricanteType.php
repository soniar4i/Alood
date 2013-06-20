<?php

namespace Alood\ExtranetBundle\Form;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\CallbackValidator;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Cupon\OfertaBundle\Listener\OfertaTypeListener;
use Alood\ExtranetBundle\Utilidades\DateTime;
use Alood\ExtranetBundle\Controller\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;

class FabricanteType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		 $builder
 			->add('usuario', 'text', array('disabled' => true))
 		    ->add('nombre', 'text')
 			->add('password', 'repeated',   array('type' => 'password', 'invalid_message' => 'Las dos contraseñas deben coincidir',
               'options' => array('label' => 'Contraseña')))
 			->add('email', 'email')
 			->add('telefono', 'text');
	}
	
	public function getName(){
		return 'fabricante';
	}
}