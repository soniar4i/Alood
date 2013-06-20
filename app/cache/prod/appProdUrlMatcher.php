<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/')) {
            // request_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Alood\\RequestBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'request_homepage'));
            }

            // extranet
            if (rtrim($pathinfo, '/') === '/extranet') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'extranet');
                }

                return array (  '_controller' => 'Alood\\ExtranetBundle\\Controller\\DefaultController::homeAction',  '_route' => 'extranet',);
            }

            // producto
            if (rtrim($pathinfo, '/') === '/extranet/producto/nuevo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'producto');
                }

                return array (  '_controller' => 'Alood\\ExtranetBundle\\Controller\\DefaultController::productoAction',  '_route' => 'producto',);
            }

            // editarProducto
            if (0 === strpos($pathinfo, '/extranet/producto/editar') && preg_match('#^/extranet/producto/editar/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Alood\\ExtranetBundle\\Controller\\DefaultController::editarprodAction',)), array('_route' => 'editarProducto'));
            }

            // verProducto
            if (0 === strpos($pathinfo, '/extranet/producto/ver') && preg_match('#^/extranet/producto/ver/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Alood\\ExtranetBundle\\Controller\\DefaultController::verprodAction',)), array('_route' => 'verProducto'));
            }

            // back_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Alood\\BackBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'back_homepage'));
            }

            // front_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Alood\\FrontBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'front_homepage'));
            }

            // estatica
            if (0 === strpos($pathinfo, '/nosotros') && preg_match('#^/nosotros/(?P<pagina>[^/]+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'estatica');
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Alood\\FrontBundle\\Controller\\SitioController::estaticaAction',)), array('_route' => 'estatica'));
            }

            // login
            if (rtrim($pathinfo, '/') === '/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login');
                }

                return array (  '_controller' => 'Alood\\FrontBundle\\Controller\\SitioController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if (rtrim($pathinfo, '/') === '/extranet/login_check') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login_check');
                }

                return array('_route' => 'login_check');
            }

            // logout
            if (rtrim($pathinfo, '/') === '/logout') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'logout');
                }

                return array('_route' => 'logout');
            }

            // mail
            if (rtrim($pathinfo, '/') === '/sucess') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mail');
                }

                return array (  '_controller' => 'Alood\\FrontBundle\\Controller\\SitioController::mailAction',  '_route' => 'mail',);
            }

            // portada
            if (rtrim($pathinfo, '/') === '') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'portada');
                }

                return array (  '_controller' => 'Alood\\FrontBundle\\Controller\\SitioController::homeAction',  '_route' => 'portada',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
