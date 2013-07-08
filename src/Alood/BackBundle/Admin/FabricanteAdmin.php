<?php

namespace Alood\BackBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class FabricanteAdmin extends Admin {
	protected function configureListFields(ListMapper $mapper){
	$mapper
		->addIdentifier('usuario', null, array('label' => 'Usuario'))
	    ->add('nombre')
	    ->add('password')
	    ->add('email')
	    ->add('telefono');
	}
	protected function configureDatagridFilters(DatagridMapper $mapper){
	$mapper
	              ->add('usuario');
	}
	protected function configureFormFields(FormMapper $mapper){
	$mapper
		->add('usuario', 'text')
		->add('nombre', 'text')
    	->add('password', 'repeated',   array('type' => 'password', 'invalid_message' => 'Las dos contraseñas deben coincidir',
              'options' => array('label' => 'Contraseña')))
	    ->add('email', 'email')
	    ->add('telefono', 'text')
		->end();
	}
	
	
}