<?php

namespace Alood\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function quienes_somosAction()
    {
        return $this->render('FrontBundle:Default:quienes_somos.html.twig');
    }
    
}