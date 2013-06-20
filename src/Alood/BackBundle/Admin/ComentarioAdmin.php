<?php

namespace Alood\BackBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class ComentarioAdmin extends Admin {
	protected function configureListFields(ListMapper $mapper){
	$mapper
		->addIdentifier('id', null, array('label' => 'ID'))
	    ->add('producto')
		->add('usuarios')
		->add('puntuacion')
		->add('texto');
	}
	protected function configureDatagridFilters(DatagridMapper $mapper){
	$mapper
	    ->add('producto')
		->add('usuarios')
		->add('puntuacion');
	}
	protected function configureFormFields(FormMapper $mapper){
	$mapper
		->add('id', null, array('disabled' => true))
	    ->add('producto')
		->add('usuarios')
		->add('puntuacion')
		->add('texto');
		
	}
	
	
}