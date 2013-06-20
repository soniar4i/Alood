<?php

/* FrontBundle:Security:login.html.twig */
class __TwigTemplate_713eacb39f916cc8252e5a5356894f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
\t<title>Acceder | Alood</title>
\t<meta charset=\"utf-8\">
\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "</head>
<body>
\t<div class=\"contenedor\">
\t\t<header>
\t\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portada"), "html", null, true);
        echo "\">
\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/alood_logo.png"), "html", null, true);
        echo "\"/>
\t\t\t</a>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portada"), "html", null, true);
        echo "\">Inicio</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "quienes_somos")), "html", null, true);
        echo "\">Sobre Alood</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "demo")), "html", null, true);
        echo "\">Instrucciones</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estatica", array("pagina" => "contacto")), "html", null, true);
        echo "\">Contacto</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"no-space\">
\t\t\t\t\t\t<a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
        echo "\"> <p class=\"button1 green\">Zona fabricantes</p></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</header>
\t\t<article>
\t\t\t<section id=\"demo_principal\">
\t\t\t\t<h2>Zona Fabricantes</h2>
\t\t\t\t
\t\t\t\t<form action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t    <label for=\"username\">User:</label>
\t\t\t\t    <input id=\"username\" type=\"text\" name=\"_username\" /><br/>
\t\t\t\t    <label for=\"password\">Password:</label>
\t\t\t\t    <input id=\"password\" type=\"password\" name=\"_password\" />
\t\t\t\t\t
\t\t\t\t\t<div style=\"clear:both\"></div>
\t\t\t\t\t
\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
\t\t\t\t\t<label id=\"remember\" for=\"remember_me\">No cerrar sesión</label>
\t\t\t\t\t
\t\t\t\t\t<div style=\"clear:both\"></div>

\t\t\t\t\t<input type=\"submit\" name=\"login\" value=\"Iniciar Sesión\"/>
\t\t\t\t\t\t  
\t\t\t\t</form>
\t\t\t\t
\t\t\t\t<div style=\"clear:both\">
\t\t\t\t
\t\t\t\t";
        // line 59
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 60
            echo "\t\t\t\t<div class=\"error\"><p>Has ingresado una mala combinación de usuario y contraseña, por favor, prueba de nuevo con otra combinación</p></div>
\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t
\t\t\t</section>
\t\t</article>
\t</div>
</body>
</html>";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/css/portada.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 7,  120 => 6,  111 => 62,  107 => 60,  105 => 59,  83 => 40,  71 => 31,  65 => 28,  59 => 25,  53 => 22,  47 => 19,  39 => 14,  35 => 13,  29 => 9,  27 => 6,  20 => 1,);
    }
}
