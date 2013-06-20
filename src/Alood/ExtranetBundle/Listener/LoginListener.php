<?php

namespace Alood\ExtranetBundle\Listener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;


class LoginListener{
	
	private $router, $user = null;
	
	public function __construct(Router $router){
		$this->router = $router;
	}
	public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
	{
		$token = $event->getAuthenticationToken();
		//$this->user = $token->getUser()->getUsuario();
	}
	public function onKernelResponse(FilterResponseEvent $event)
	{
		if (null != $this->user) {
			$portada = $this->router->generate('extranet', array( 'usuario' => $this->user));
			$event->setResponse(new RedirectResponse($portada));
		}
	}
}