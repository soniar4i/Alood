<?php

namespace Alood\RequestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;
use Alood\BackBundle\Entity\Usuario;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Exception;

class ReqApiController extends Controller
{
	public function registroUserAction($id){
		
		$texto["error"] = $id;
		return new JsonResponse($texto);
	}
}
