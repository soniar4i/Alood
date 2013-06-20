<?php

namespace Alood\ExtranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Alood\ExtranetBundle\Entity\Fabricante;
use Alood\ExtranetBundle\Entity\Producto;
use Alood\BackBundle\Entity\Alergeno;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Alood\ExtranetBundle\Form\ProductoType;
use Alood\ExtranetBundle\Form\FabricanteType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class DefaultController extends Controller
{
    public function homeAction()
    {
		$usuario = $this->get('security.context')->getToken()->getUser();
		//Encuentra el usuario según el user del login y si lo encuentra, devuelve la entidad para buscar sus productos
		$em = $this->getDoctrine()->getManager();
		
		$paginador = $this->get('ideup.simple_paginator');
		$paginador->setItemsPerPage(20);
		$entities = $paginador->paginate($em->getRepository('ExtranetBundle:Producto')->queryTodosLosProductos($usuario))->getResult();
		return $this->render('ExtranetBundle:Default:home.html.twig', 
		array('entities' => $entities, 
		'usuario' => $usuario, 
		'paginador' => $paginador));
		
    }
	
	public function productoAction()
	{
		$peticion = $this->getRequest();
		$usuario = $this->get('security.context')->getToken()->getUser();
		
		$producto = new Producto();
		$formularioProd = $this->createForm(new ProductoType(), $producto);
		
		if ($peticion->getMethod() == 'POST')
		{
			$formularioProd->bind($peticion);
			if ($formularioProd->isValid()) 
			{
				$em = $this->getDoctrine()->getManager();
				try 
				{
					$producto->setFabricante($usuario);
					$producto->subirFoto($this->container->getParameter('alood.directorio.imagenes'));
					$producto->setPuntos(0);
					$producto->setValoraciones(0);
					
					$em->persist($producto);
					$em->flush();
					return $this->redirect($this->generateUrl('extranet'));
				} catch (Exception $ex) {
					return new Response("El error es: ".$ex->getMessage());
				}
			}else{
				return $this->render('ExtranetBundle:Default:producto.html.twig', array('formulario' =>
					$formularioProd->createView(),'usuario' => $usuario));
			}
		} elseif ($peticion->getMethod() == 'GET') {
			return $this->render('ExtranetBundle:Default:producto.html.twig', array('formulario' =>
				$formularioProd->createView(),'usuario' => $usuario,));
		}
		return $this->render('ExtranetBundle:Default:producto.html.twig', 
			array('formulario' => $formularioProd->createView(), 'usuario' => $usuario));
	}
	
	public function verprodAction($id){
		$usuario = $this->get('security.context')->getToken()->getUser();
		$em = $this->getDoctrine()->getManager();
		
		$producto = $em->getRepository("ExtranetBundle:Producto")->findProducto($id);
		
		if (!$producto){
			if(empty($producto)) return new Response("No hay producto");
		}else{
			if($usuario == $producto->getFabricante()){
				return $this->render('ExtranetBundle:Default:verprod.html.twig',
				array('producto' => $producto, 'usuario' => $usuario));
			}else{
				return new Response("No es tu producto", 200);
			}
			
		}
		
	}
	
	public function editarprodAction($id){
		$usuario = $this->get('security.context')->getToken()->getUser();
		$peticion = $this->getRequest();
		$em = $this->getDoctrine()->getManager();
		
		$producto = $em->getRepository("ExtranetBundle:Producto")->findProducto($id);
		
		if (!$producto) {
			throw $this->createNotFoundException('Pagina 404');
		}else{
			$prodFoto = $producto->getFoto();
			if($usuario == $producto->getFabricante()){
				$formularioProd = $this->createForm(new ProductoType(), $producto);
			
				if ($peticion->getMethod() == 'POST') 
				{
					$formularioProd->bind($peticion);
					$fotoOriginal = $formularioProd->getData()->getFoto();
					if ($formularioProd->isValid()) 
					{
						if ($prodFoto == null)
						{
							// Si no había foto antes, seguarda la foto nueva
							$directorioFotos = $this->container->getParameter('alood.directorio.imagenes');
							$producto->subirFoto($directorioFotos.$prodFoto);
							//$prodFoto1 = $prodFoto->
							//return new Response("hay foto en el formulario pero no original" .$prodFoto, 200);
						}else{
							if($fotoOriginal == null){
								//$directorioFotos = $this->container->getParameter('alood.directorio.imagenes');
								$producto->setFoto($prodFoto);
								//return new Response("Si hay foto originalmente" .$prodFoto, 200);
							}else{
								//Si hay foto antes, se guarda la nueva y se borra la anterior
								$directorioFotos = $this->container->getParameter('alood.directorio.imagenes');
								$producto->subirFoto($directorioFotos);
								//return new Response("Si hay foto original y tambien en el formulario" .$prodFoto, 200);
								unlink($directorioFotos.$prodFoto);
							}
						}
						$producto->setRevision();
						$em->persist($producto);
						$em->flush();
						return $this->redirect($this->generateUrl('extranet'));
					}
					return $this->render('ExtranetBundle:Default:editprod.html.twig', 
					array('usuario' => $usuario, 'producto' => $producto, 'formulario' => $formularioProd->createView()));
				}elseif($peticion->getMethod() == 'GET'){
					return $this->render('ExtranetBundle:Default:editprod.html.twig', 
					array('usuario' => $usuario, 'producto' => $producto, 'formulario' => $formularioProd->createView()));
				}
			}else{
				return new Response("No es tu producto", 200);
			}
		}
		return $this->render('ExtranetBundle:Default:editprod.html.twig', 
		array('usuario' => $usuario, 'producto' => $producto, 'formulario' => $formularioProd->createView()));
	}
	
	public function eliminarProdAction($id){
		$usuario = $this->get('security.context')->getToken()->getUser();
		$peticion = $this->getRequest();
		$em = $this->getDoctrine()->getManager();
		
		$producto = $em->getRepository("ExtranetBundle:Producto")->find($id);
		
		if (!$producto) {
			throw $this->createNotFoundException('pagina 404');
		}else{
			if($usuario == $producto->getFabricante()){
				$em->remove($producto);
				$em->flush();
			}else{
				return new Response("No es tu producto", 200);
			}
		}
		return $this->redirect($this->generateUrl('extranet'));
	}
	
	public function buscarAction(Request $request){
		$em = $this->getDoctrine()->getManager();
		$usuario = $this->get('security.context')->getToken()->getUser();
		$this->request = $request;
		
		if ($request->isMethod('POST')) 
		{
			$barcode = $this->getRequest()->get('barcode');
			$producto = $em->getRepository("ExtranetBundle:Producto")->find($barcode);
			
			if (!$producto) {
				throw $this->createNotFoundException('pagina 404');
			}else{
				if($usuario == $producto->getFabricante()){
					return $this->render('ExtranetBundle:Default:resultado.html.twig', 
					array('entities' => $producto, 'usuario' => $usuario));
				}else{
					return new Response("No es tu producto", 200);
				}
			}
		}elseif ($request->getMethod() == 'GET') {
			return $this->redirect($this->generateUrl('extranet'));
		}
	}
	
	public function editarPerfilAction($id){
		
		$usuario = $this->get('security.context')->getToken()->getUser();
		$peticion = $this->getRequest();
		$em = $this->getDoctrine()->getManager();
		
		$fab = $em->getRepository("ExtranetBundle:Fabricante")->find($id);
		
		if (!$fab) {
			throw $this->createNotFoundException('Pagina 404');
		}else{
			if($usuario == $fab->getUsuario()){
				
				$formularioFab = $this->createForm(new FabricanteType(), $fab);
			
				if ($peticion->getMethod() == 'POST') 
				{
					$formularioFab->bind($peticion);
					if ($formularioFab->isValid()) {
						$fab->setUsuario($id);
						$em->persist($fab);
						$em->flush();
						return $this->redirect($this->generateUrl('extranet'));
					}else{
						return $this->render('ExtranetBundle:Default:editarperfil.html.twig', 
						array('usuario' => $usuario, 'fabricante' => $fab, 'formulario' => $formularioFab->createView()));
					}
				}elseif($peticion->getMethod() == 'GET'){
					return $this->render('ExtranetBundle:Default:editarperfil.html.twig', 
					array('usuario' => $usuario, 'fabricante' => $fab, 'formulario' => $formularioFab->createView()));
				}
			}throw $this->createNotFoundException('Pagina 404');
		}
			return $this->redirect($this->generateUrl('extranet'));
	}
}
