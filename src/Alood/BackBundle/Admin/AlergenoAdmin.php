<?php

namespace Alood\BackBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class AlergenoAdmin extends Admin {
	protected function configureListFields(ListMapper $mapper){
	$mapper
		->addIdentifier('id', null, array('label' => 'ID'))
	    ->add('nombre');
	}
	protected function configureDatagridFilters(DatagridMapper $mapper){
	$mapper
	              ->add('nombre');
	}
	protected function configureFormFields(FormMapper $mapper){
	$mapper
		->add('nombre', 'text');
	}
	
	
}