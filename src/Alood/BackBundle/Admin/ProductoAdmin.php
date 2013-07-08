<?php

namespace Alood\BackBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Doctrine\Common\Collections\ArrayCollection;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Symfony\Component\HttpFoundation\Response;

class ProductoAdmin extends Admin {
	protected function configureListFields(ListMapper $mapper){
	$mapper
		->add('barcode', 'text')
		->addIdentifier('nombre', null, array('label' => 'Nombre'))
	    ->add('foto', 'file', array('required' => false,'data_class' => null))
	    ->add('calorias')
		->add('puntos')
		->add('fabricante')
	    ->add('valoraciones');
	}
	protected function configureDatagridFilters(DatagridMapper $mapper){
	$mapper
		->add('nombre')
		->add('fabricante');
	}
	protected function configureFormFields(FormMapper $mapper){
	    if ($this->getSubject()->getBarcode() > 0) {
			$mapper
			->add('barcode', 'text', array('disabled' => true))
			->add('nombre', 'text')
			->add('foto', 'file', array('required' => false,'data_class' => null))
			->add('calorias')
			->add('puntos', 'integer', array('disabled' => true))
			->add('alergenos','entity', array('class' => 'BackBundle:Alergeno','expanded' => true, 'compound' => true, 'multiple' => true,'by_reference' => false));
			//->add('comentarios', 'sonata_type_collection', array(), array(
             //   'edit' => 'inline',
               // 'inline' => 'table'));
	       }else{
			$mapper
   			->add('barcode', 'text')
   			->add('nombre', 'text')
   			->add('foto', 'file', array('required' => false,'data_class' => null))
   			->add('calorias')
   			->add('puntos', 'integer', array('disabled' => true))
   			->add('alergenos','entity', array('class' => 'BackBundle:Alergeno','expanded' => true, 'compound' => true, 'multiple' => true,'by_reference' => false));
   			//->add('comentarios', 'sonata_type_collection', array(), array(
                //   'edit' => 'inline',
                  // 'inline' => 'table'));
	       }
	}
	
	
	
	
}