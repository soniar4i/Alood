<?php

namespace Alood\RequestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;
use Alood\BackBundle\Entity\Usuario;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Exception;

class ApiController extends Controller
{
	public function apiLoginAction()  
	 {  
 		$peticion = $this->getRequest();
 		$sesion = $peticion->getSession();
		$usuario = $this->get('security.context')->getToken()->getUser();
 		$error = $peticion->attributes->get(SecurityContext::AUTHENTICATION_ERROR, 
		$sesion->get(SecurityContext::AUTHENTICATION_ERROR));
 		
		$securityContext = $this->container->get('security.context');
 		if( $securityContext->isGranted('IS_AUTHENTICATED_FULLY')){
			$texto["user"] = $usuario->getUser();
			
			return new JsonResponse($texto);
		}
	 }
	 
 	public function registroUserAction()
 	 {  
 		$peticion = $this->getRequest();
		
 		if ($peticion->getMethod() == 'POST')
 		{
			$content = $peticion->getContent(); //Aquí obtiene el json {"dato":"valor"}
			
			$params = json_decode($content, true); // 2nd param to get as array
			try{
				$usuario = new Usuario();
				$usuario->setUser($params["usuario"]);
				$usuario->setEmail($params["email"]);
				$usuario->setPassword($params["password"]);
					
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($usuario);
				$em->flush();
				

				$texto["user"] = $usuario->getUser();

				return new JsonResponse($texto); 
			}catch(Exception $ex){
				$texto["error"] = "error";
			
				return new JsonResponse($texto);  
			}
			
		}return new Response("No es una petición post", 200);
 	 }
}
