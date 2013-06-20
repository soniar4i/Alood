<?php

namespace Alood\BackBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class UsuarioAdmin extends Admin {
	protected function configureListFields(ListMapper $mapper){
	$mapper
		->addIdentifier('user', null, array('label' => 'usuario'))
	    ->add('email')
		->add('password');
	}
	protected function configureDatagridFilters(DatagridMapper $mapper){
	$mapper
	    ->add('user')
		->add('email')
		->add('password');
	}
	protected function configureFormFields(FormMapper $mapper){
	$mapper
		->add('user', null, array('disabled' => true))
	    ->add('email')
	    ->add('password', 'repeated',   array('type' => 'password', 'invalid_message' => 'Las dos contraseñas deben coincidir',
			'options' => array('label' => 'Contraseña')))
		->add('alergenos','sonata_type_model',array('expanded' => true, 'compound' => true, 'multiple' => true));
		
		
	}
	
	
}