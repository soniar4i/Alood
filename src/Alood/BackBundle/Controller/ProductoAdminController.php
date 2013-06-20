<?php

namespace Alood\BackBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as CRUDController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sonata\AdminBundle\Exception\ModelManagerException;
use Symfony\Component\HttpFoundation\Request;
use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Alood\ExtranetBundle\Entity\Producto;


class ProductoAdminController extends CRUDController{
	/**
	     * return the Response object associated to the edit action
	     *
	     *
	     * @param mixed $id
	     *
	     * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
	     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
	     *
	     * @return Response
	     */
	    public function editAction($id = null)
	    {
	        // the key used to lookup the template
	        $templateKey = 'edit';
			
			$peticion = $this->get('request');

	        $id = $peticion->get($this->admin->getIdParameter());

	        $object = $this->admin->getObject($id);

	        if (!$object) {
	            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
	        }

	        if (false === $this->admin->isGranted('EDIT', $object)) {
	            throw new AccessDeniedException();
	        }

	        $this->admin->setSubject($object);
			
			$em = $this->getDoctrine()->getManager();
		
			$producto = $em->getRepository("ExtranetBundle:Producto")->findProducto($id);
			
			$prodFoto = $producto->getFoto();
	        /** @var $form \Symfony\Component\Form\Form */
	        $form = $this->admin->getForm();
	        $form->setData($object);

	        if ($peticion->getMethod() == 'POST') {
	            $form->bind($peticion);
				$fotoOriginal = $form->getData()->getFoto();

	            $isFormValid = $form->isValid();

	            // persist if the form was valid and if in preview mode the preview was approved
	            if ($isFormValid && (!$this->isInPreviewMode() || $this->isPreviewApproved())) {
					
					if ($prodFoto == null)
					{
						// Si no había foto antes, seguarda la foto nueva
						$directorioFotos = $this->container->getParameter('alood.directorio.imagenes');
						$object->subirFoto($directorioFotos.$prodFoto);
						//$prodFoto1 = $prodFoto->
						//return new Response("hay foto en el formulario pero no original" .$prodFoto, 200);
					}else{
						if($fotoOriginal == null){
							//$directorioFotos = $this->container->getParameter('alood.directorio.imagenes');
							$object->setFoto($prodFoto);
							//return new Response("Si hay foto originalmente" .$prodFoto, 200);
						}else{
							//Si hay foto antes, se guarda la nueva y se borra la anterior
							$directorioFotos = $this->container->getParameter('alood.directorio.imagenes');
							$object->subirFoto($directorioFotos);
							//return new Response("Si hay foto original y tambien en el formulario" .$prodFoto, 200);
							//unlink($directorioFotos.$prodFoto);
						}
					}
					
					
	                $this->admin->update($object);
	                $this->addFlash('sonata_flash_success', 'flash_edit_success');

	                if ($this->isXmlHttpRequest()) {
	                    return $this->renderJson(array(
	                        'result'    => 'ok',
	                        'objectId'  => $this->admin->getNormalizedIdentifier($object)
	                    ));
	                }

	                // redirect to edit mode
	                return $this->redirectTo($object);
	            }

	            // show an error message if the form failed validation
	            if (!$isFormValid) {
	                if (!$this->isXmlHttpRequest()) {
	                    $this->addFlash('sonata_flash_error', 'flash_edit_error');
	                }
	            } elseif ($this->isPreviewRequested()) {
	                // enable the preview template if the form was valid and preview was requested
	                $templateKey = 'preview';
	                $this->admin->getShow();
	            }
	        }

	        $view = $form->createView();

	        // set the theme for the current Admin Form
	        $this->get('twig')->getExtension('form')->renderer->setTheme($view, $this->admin->getFormTheme());

	        return $this->render($this->admin->getTemplate($templateKey), array(
	            'action' => 'edit',
	            'form'   => $view,
	            'object' => $object,
	        ));
	    }
		
		/**
		     * Adds a flash message for type.
		     *
		     * @param string $type
		     * @param string $message
		     */
		    public function addFlash($type, $message)
		    {
		        $this->get('session')
		             ->getFlashBag()
		             ->add($type, $message);
		    }
}

