<?php

namespace Alood\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Alood\ExtranetBundle\Entity\Fabricante;
use Symfony\Component\Security\Core\SecurityContext;
use Exception;

class SitioController extends Controller
{
    public function estaticaAction($pagina)
    {
		if($pagina=="quienes_somos") { return $this->render('FrontBundle:Sitio:nosotros.html.twig'); }
		elseif($pagina=="demo") { return $this->render('FrontBundle:Sitio:demo.html.twig'); }
		elseif($pagina=="contacto") 
			{
				$peticion = $this->getRequest();
				
				// Se crea un formulario "in situ", sin clase asociada
				$formulario = $this->createFormBuilder()
					->add('nombre', 'text')
			        ->add('remitente', 'email')
					->add('mensaje', 'textarea')
			        ->getForm();
				
				if ($peticion->getMethod() == 'POST') 
				{
					$formulario->bindRequest($peticion);
					if ($formulario->isValid())
					{
						$datos = $formulario->getData();
						
						$contenido = sprintf(" Remitente: %s \n\n Email: %s \n\n Mensaje: %s \n\n Dirección IP: %s \n",
						$datos['nombre'],
						$datos['remitente'],
						htmlspecialchars($datos['mensaje']),
						$peticion->server->get('REMOTE_ADDR'));
						
						$mensaje = \Swift_Message::newInstance()
							->setSubject('Contacto')
							->setFrom($datos['remitente'])
							->setTo('soniar4i@gmail.com')
							->setBody($contenido);
						
						$this->container->get('mailer')->send($mensaje);
						
						
						return $this->redirect($this->generateUrl('mail'));
					}
					
				} elseif ($peticion->getMethod() == 'GET') {
					return $this->render('FrontBundle:Sitio:contacto.html.twig', array('formulario' => $formulario->createView(),));	
				} 
			}
		else { return new Response("Página de error 404",200); }
    }
	
	
    public function homeAction()
    {
		return $this->render('FrontBundle:Sitio:portada.html.twig');
    }
	
    public function mailAction()
    {
		return $this->render('FrontBundle:Sitio:mail.html.twig');
    }
	

	public function loginAction()
	{
		$peticion = $this->getRequest();
		$sesion = $peticion->getSession();
		$error = $peticion->attributes->get(
			SecurityContext::AUTHENTICATION_ERROR,
			$sesion->get(SecurityContext::AUTHENTICATION_ERROR)
		);
		$securityContext = $this->container->get('security.context');
		if( $securityContext->isGranted('IS_AUTHENTICATED_FULLY')){
			return $this->redirect($this->generateUrl('extranet'));
		}else{
			return $this->render('FrontBundle:Security:login.html.twig', array(
				'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
				'error'         => $error
			));
		}
		
	}	
    
}