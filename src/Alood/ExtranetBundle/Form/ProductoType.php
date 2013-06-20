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

class ProductoType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		 $builder
 			->add('barcode', 'text', array('disabled' => true))
			
 	        ->add('nombre', 'text', 
 		array('constraints' => array(new Assert\NotBlank( array('message' => 'indica un nombre para el producto.')))))
			
 			->add('foto', 'file', array('required' => false,'data_class' => null))
 			//->add('fechaRevision', 'date', array('data' => new \DateTime("now"), 'widget' => 'single_text', 'disabled' => true,))
		
 			->add('calorias', 'number', 
 		array('constraints' => array(new Assert\NotBlank(array('message' => 'Debes introducir el número de calorías del producto.'),
 		new Assert\Valid()))))
				
 			->add('alergenos', 'entity', 
 		array('class' => 'BackBundle:Alergeno', 'property' => 'nombre' ,'expanded' => true, 'multiple'  => true, 'required'  => false, 'mapped' => true));
	}
	public function getName(){
		return 'producto';
	}
}
?>