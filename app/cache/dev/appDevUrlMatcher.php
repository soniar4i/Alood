<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/')) {
            // requestAlergenos
            if (0 === strpos($pathinfo, '/api/usuario') && preg_match('#^/api/usuario/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Alood\\RequestBundle\\Controller\\ApiController::alergenosUserAction',)), array('_route' => 'requestAlergenos'));
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

            // eliminarProducto
            if (0 === strpos($pathinfo, '/extranet/producto/eliminar') && preg_match('#^/extranet/producto/eliminar/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Alood\\ExtranetBundle\\Controller\\DefaultController::eliminarProdAction',)), array('_route' => 'eliminarProducto'));
            }

            // buscarProd
            if ($pathinfo === '/extranet/producto/buscar') {
                return array (  '_controller' => 'Alood\\ExtranetBundle\\Controller\\DefaultController::buscarAction',  '_route' => 'buscarProd',);
            }

            // editarPerfil
            if (0 === strpos($pathinfo, '/extranet/producto/editar/perfil') && preg_match('#^/extranet/producto/editar/perfil/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Alood\\ExtranetBundle\\Controller\\DefaultController::editarPerfilAction',)), array('_route' => 'editarPerfil'));
            }

            // back_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Alood\\BackBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'back_homepage'));
            }

            // front_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Alood\\FrontBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'front_homepage'));
            }

            // registroUsuario
            if (rtrim($pathinfo, '/') === '/api-registro') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'registroUsuario');
                }

                return array (  '_controller' => 'Alood\\RequestBundle\\Controller\\ApiController::registroUserAction',  '_route' => 'registroUsuario',);
            }

            // api_login
            if (rtrim($pathinfo, '/') === '/api/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_login');
                }

                return array (  '_controller' => 'Alood\\RequestBundle\\Controller\\ApiController::apiLoginAction',  '_route' => 'api_login',);
            }

            if (0 === strpos($pathinfo, '/profile')) {
                // sonata_user_profile_show
                if (rtrim($pathinfo, '/') === '/profile') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'sonata_user_profile_show',);
                }
                not_sonata_user_profile_show:

                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileController::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileController::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                // fos_user_registration_confirm
                if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_confirm;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ($pathinfo === '/register/confirmed') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
                }
                not_fos_user_resetting_reset:

            }

            // fos_user_change_password
            if ($pathinfo === '/change-password/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            if (0 === strpos($pathinfo, '/admin')) {
                // sonata_admin_dashboard
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_admin_dashboard');
                    }

                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
                }

                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if ($pathinfo === '/admin/core/get-short-object-description') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            if (0 === strpos($pathinfo, '/admin')) {
                // admin_alood_extranet_fabricante_list
                if ($pathinfo === '/admin/alood/extranet/fabricante/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.alood.admin.fabricante',  '_sonata_name' => 'admin_alood_extranet_fabricante_list',  '_route' => 'admin_alood_extranet_fabricante_list',);
                }

                // admin_alood_extranet_fabricante_create
                if ($pathinfo === '/admin/alood/extranet/fabricante/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.alood.admin.fabricante',  '_sonata_name' => 'admin_alood_extranet_fabricante_create',  '_route' => 'admin_alood_extranet_fabricante_create',);
                }

                // admin_alood_extranet_fabricante_batch
                if ($pathinfo === '/admin/alood/extranet/fabricante/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.alood.admin.fabricante',  '_sonata_name' => 'admin_alood_extranet_fabricante_batch',  '_route' => 'admin_alood_extranet_fabricante_batch',);
                }

                // admin_alood_extranet_fabricante_edit
                if (0 === strpos($pathinfo, '/admin/alood/extranet/fabricante') && preg_match('#^/admin/alood/extranet/fabricante/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.alood.admin.fabricante',  '_sonata_name' => 'admin_alood_extranet_fabricante_edit',)), array('_route' => 'admin_alood_extranet_fabricante_edit'));
                }

                // admin_alood_extranet_fabricante_delete
                if (0 === strpos($pathinfo, '/admin/alood/extranet/fabricante') && preg_match('#^/admin/alood/extranet/fabricante/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.alood.admin.fabricante',  '_sonata_name' => 'admin_alood_extranet_fabricante_delete',)), array('_route' => 'admin_alood_extranet_fabricante_delete'));
                }

                // admin_alood_extranet_fabricante_show
                if (0 === strpos($pathinfo, '/admin/alood/extranet/fabricante') && preg_match('#^/admin/alood/extranet/fabricante/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.alood.admin.fabricante',  '_sonata_name' => 'admin_alood_extranet_fabricante_show',)), array('_route' => 'admin_alood_extranet_fabricante_show'));
                }

                // admin_alood_extranet_fabricante_export
                if ($pathinfo === '/admin/alood/extranet/fabricante/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.alood.admin.fabricante',  '_sonata_name' => 'admin_alood_extranet_fabricante_export',  '_route' => 'admin_alood_extranet_fabricante_export',);
                }

                // admin_alood_back_alergeno_list
                if ($pathinfo === '/admin/alood/back/alergeno/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.alood.admin.alergeno',  '_sonata_name' => 'admin_alood_back_alergeno_list',  '_route' => 'admin_alood_back_alergeno_list',);
                }

                // admin_alood_back_alergeno_create
                if ($pathinfo === '/admin/alood/back/alergeno/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.alood.admin.alergeno',  '_sonata_name' => 'admin_alood_back_alergeno_create',  '_route' => 'admin_alood_back_alergeno_create',);
                }

                // admin_alood_back_alergeno_batch
                if ($pathinfo === '/admin/alood/back/alergeno/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.alood.admin.alergeno',  '_sonata_name' => 'admin_alood_back_alergeno_batch',  '_route' => 'admin_alood_back_alergeno_batch',);
                }

                // admin_alood_back_alergeno_edit
                if (0 === strpos($pathinfo, '/admin/alood/back/alergeno') && preg_match('#^/admin/alood/back/alergeno/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.alood.admin.alergeno',  '_sonata_name' => 'admin_alood_back_alergeno_edit',)), array('_route' => 'admin_alood_back_alergeno_edit'));
                }

                // admin_alood_back_alergeno_delete
                if (0 === strpos($pathinfo, '/admin/alood/back/alergeno') && preg_match('#^/admin/alood/back/alergeno/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.alood.admin.alergeno',  '_sonata_name' => 'admin_alood_back_alergeno_delete',)), array('_route' => 'admin_alood_back_alergeno_delete'));
                }

                // admin_alood_back_alergeno_show
                if (0 === strpos($pathinfo, '/admin/alood/back/alergeno') && preg_match('#^/admin/alood/back/alergeno/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.alood.admin.alergeno',  '_sonata_name' => 'admin_alood_back_alergeno_show',)), array('_route' => 'admin_alood_back_alergeno_show'));
                }

                // admin_alood_back_alergeno_export
                if ($pathinfo === '/admin/alood/back/alergeno/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.alood.admin.alergeno',  '_sonata_name' => 'admin_alood_back_alergeno_export',  '_route' => 'admin_alood_back_alergeno_export',);
                }

                // admin_alood_extranet_producto_list
                if ($pathinfo === '/admin/alood/extranet/producto/list') {
                    return array (  '_controller' => 'Alood\\BackBundle\\Controller\\ProductoAdminController::listAction',  '_sonata_admin' => 'sonata.alood.admin.producto',  '_sonata_name' => 'admin_alood_extranet_producto_list',  '_route' => 'admin_alood_extranet_producto_list',);
                }

                // admin_alood_extranet_producto_create
                if ($pathinfo === '/admin/alood/extranet/producto/create') {
                    return array (  '_controller' => 'Alood\\BackBundle\\Controller\\ProductoAdminController::createAction',  '_sonata_admin' => 'sonata.alood.admin.producto',  '_sonata_name' => 'admin_alood_extranet_producto_create',  '_route' => 'admin_alood_extranet_producto_create',);
                }

                // admin_alood_extranet_producto_batch
                if ($pathinfo === '/admin/alood/extranet/producto/batch') {
                    return array (  '_controller' => 'Alood\\BackBundle\\Controller\\ProductoAdminController::batchAction',  '_sonata_admin' => 'sonata.alood.admin.producto',  '_sonata_name' => 'admin_alood_extranet_producto_batch',  '_route' => 'admin_alood_extranet_producto_batch',);
                }

                // admin_alood_extranet_producto_edit
                if (0 === strpos($pathinfo, '/admin/alood/extranet/producto') && preg_match('#^/admin/alood/extranet/producto/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Alood\\BackBundle\\Controller\\ProductoAdminController::editAction',  '_sonata_admin' => 'sonata.alood.admin.producto',  '_sonata_name' => 'admin_alood_extranet_producto_edit',)), array('_route' => 'admin_alood_extranet_producto_edit'));
                }

                // admin_alood_extranet_producto_delete
                if (0 === strpos($pathinfo, '/admin/alood/extranet/producto') && preg_match('#^/admin/alood/extranet/producto/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Alood\\BackBundle\\Controller\\ProductoAdminController::deleteAction',  '_sonata_admin' => 'sonata.alood.admin.producto',  '_sonata_name' => 'admin_alood_extranet_producto_delete',)), array('_route' => 'admin_alood_extranet_producto_delete'));
                }

                // admin_alood_extranet_producto_show
                if (0 === strpos($pathinfo, '/admin/alood/extranet/producto') && preg_match('#^/admin/alood/extranet/producto/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Alood\\BackBundle\\Controller\\ProductoAdminController::showAction',  '_sonata_admin' => 'sonata.alood.admin.producto',  '_sonata_name' => 'admin_alood_extranet_producto_show',)), array('_route' => 'admin_alood_extranet_producto_show'));
                }

                // admin_alood_extranet_producto_export
                if ($pathinfo === '/admin/alood/extranet/producto/export') {
                    return array (  '_controller' => 'Alood\\BackBundle\\Controller\\ProductoAdminController::exportAction',  '_sonata_admin' => 'sonata.alood.admin.producto',  '_sonata_name' => 'admin_alood_extranet_producto_export',  '_route' => 'admin_alood_extranet_producto_export',);
                }

                // admin_alood_back_comentario_list
                if ($pathinfo === '/admin/alood/back/comentario/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.alood.admin.comentario',  '_sonata_name' => 'admin_alood_back_comentario_list',  '_route' => 'admin_alood_back_comentario_list',);
                }

                // admin_alood_back_comentario_create
                if ($pathinfo === '/admin/alood/back/comentario/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.alood.admin.comentario',  '_sonata_name' => 'admin_alood_back_comentario_create',  '_route' => 'admin_alood_back_comentario_create',);
                }

                // admin_alood_back_comentario_batch
                if ($pathinfo === '/admin/alood/back/comentario/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.alood.admin.comentario',  '_sonata_name' => 'admin_alood_back_comentario_batch',  '_route' => 'admin_alood_back_comentario_batch',);
                }

                // admin_alood_back_comentario_edit
                if (0 === strpos($pathinfo, '/admin/alood/back/comentario') && preg_match('#^/admin/alood/back/comentario/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.alood.admin.comentario',  '_sonata_name' => 'admin_alood_back_comentario_edit',)), array('_route' => 'admin_alood_back_comentario_edit'));
                }

                // admin_alood_back_comentario_delete
                if (0 === strpos($pathinfo, '/admin/alood/back/comentario') && preg_match('#^/admin/alood/back/comentario/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.alood.admin.comentario',  '_sonata_name' => 'admin_alood_back_comentario_delete',)), array('_route' => 'admin_alood_back_comentario_delete'));
                }

                // admin_alood_back_comentario_show
                if (0 === strpos($pathinfo, '/admin/alood/back/comentario') && preg_match('#^/admin/alood/back/comentario/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.alood.admin.comentario',  '_sonata_name' => 'admin_alood_back_comentario_show',)), array('_route' => 'admin_alood_back_comentario_show'));
                }

                // admin_alood_back_comentario_export
                if ($pathinfo === '/admin/alood/back/comentario/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.alood.admin.comentario',  '_sonata_name' => 'admin_alood_back_comentario_export',  '_route' => 'admin_alood_back_comentario_export',);
                }

                // admin_alood_back_usuario_list
                if ($pathinfo === '/admin/alood/back/usuario/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.alood.admin.usuario',  '_sonata_name' => 'admin_alood_back_usuario_list',  '_route' => 'admin_alood_back_usuario_list',);
                }

                // admin_alood_back_usuario_create
                if ($pathinfo === '/admin/alood/back/usuario/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.alood.admin.usuario',  '_sonata_name' => 'admin_alood_back_usuario_create',  '_route' => 'admin_alood_back_usuario_create',);
                }

                // admin_alood_back_usuario_batch
                if ($pathinfo === '/admin/alood/back/usuario/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.alood.admin.usuario',  '_sonata_name' => 'admin_alood_back_usuario_batch',  '_route' => 'admin_alood_back_usuario_batch',);
                }

                // admin_alood_back_usuario_edit
                if (0 === strpos($pathinfo, '/admin/alood/back/usuario') && preg_match('#^/admin/alood/back/usuario/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.alood.admin.usuario',  '_sonata_name' => 'admin_alood_back_usuario_edit',)), array('_route' => 'admin_alood_back_usuario_edit'));
                }

                // admin_alood_back_usuario_delete
                if (0 === strpos($pathinfo, '/admin/alood/back/usuario') && preg_match('#^/admin/alood/back/usuario/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.alood.admin.usuario',  '_sonata_name' => 'admin_alood_back_usuario_delete',)), array('_route' => 'admin_alood_back_usuario_delete'));
                }

                // admin_alood_back_usuario_show
                if (0 === strpos($pathinfo, '/admin/alood/back/usuario') && preg_match('#^/admin/alood/back/usuario/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.alood.admin.usuario',  '_sonata_name' => 'admin_alood_back_usuario_show',)), array('_route' => 'admin_alood_back_usuario_show'));
                }

                // admin_alood_back_usuario_export
                if ($pathinfo === '/admin/alood/back/usuario/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.alood.admin.usuario',  '_sonata_name' => 'admin_alood_back_usuario_export',  '_route' => 'admin_alood_back_usuario_export',);
                }

                // admin_sonata_user_user_list
                if ($pathinfo === '/admin/sonata/user/user/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                }

                // admin_sonata_user_user_create
                if ($pathinfo === '/admin/sonata/user/user/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                }

                // admin_sonata_user_user_batch
                if ($pathinfo === '/admin/sonata/user/user/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                }

                // admin_sonata_user_user_edit
                if (0 === strpos($pathinfo, '/admin/sonata/user/user') && preg_match('#^/admin/sonata/user/user/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',)), array('_route' => 'admin_sonata_user_user_edit'));
                }

                // admin_sonata_user_user_delete
                if (0 === strpos($pathinfo, '/admin/sonata/user/user') && preg_match('#^/admin/sonata/user/user/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',)), array('_route' => 'admin_sonata_user_user_delete'));
                }

                // admin_sonata_user_user_show
                if (0 === strpos($pathinfo, '/admin/sonata/user/user') && preg_match('#^/admin/sonata/user/user/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',)), array('_route' => 'admin_sonata_user_user_show'));
                }

                // admin_sonata_user_user_export
                if ($pathinfo === '/admin/sonata/user/user/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                }

                // admin_sonata_user_group_list
                if ($pathinfo === '/admin/sonata/user/group/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                }

                // admin_sonata_user_group_create
                if ($pathinfo === '/admin/sonata/user/group/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                }

                // admin_sonata_user_group_batch
                if ($pathinfo === '/admin/sonata/user/group/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                }

                // admin_sonata_user_group_edit
                if (0 === strpos($pathinfo, '/admin/sonata/user/group') && preg_match('#^/admin/sonata/user/group/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',)), array('_route' => 'admin_sonata_user_group_edit'));
                }

                // admin_sonata_user_group_delete
                if (0 === strpos($pathinfo, '/admin/sonata/user/group') && preg_match('#^/admin/sonata/user/group/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',)), array('_route' => 'admin_sonata_user_group_delete'));
                }

                // admin_sonata_user_group_show
                if (0 === strpos($pathinfo, '/admin/sonata/user/group') && preg_match('#^/admin/sonata/user/group/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',)), array('_route' => 'admin_sonata_user_group_show'));
                }

                // admin_sonata_user_group_export
                if ($pathinfo === '/admin/sonata/user/group/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin')) {
                // sonata_user_admin_security_login
                if (rtrim($pathinfo, '/') === '/admin/login') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_user_admin_security_login');
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                }

                // sonata_user_admin_security_check
                if (rtrim($pathinfo, '/') === '/admin/login_check') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_user_admin_security_check');
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                }

                // sonata_user_admin_security_logout
                if (rtrim($pathinfo, '/') === '/admin/logout') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_user_admin_security_logout');
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

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
