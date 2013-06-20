<?php

/* FrontBundle:Sitio:portada.html.twig */
class __TwigTemplate_88214193a8bf33bcbf022820543fe1ee extends Twig_Template
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
\t<title>Alood</title>
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
\t\t\t\t\t\t<a class=\"active\" href=\"";
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
\t\t\t\t\t<li class=\"button1 green\">
\t\t\t\t\t\t<a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
        echo "\">Zona fabricantes</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</header>
\t\t<article>
\t\t\t<section id=\"principal\">
\t\t\t\t<img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/Samsung-Galaxy-S3.png"), "html", null, true);
        echo "\" alt=\"Pantalla Alood\"/>
\t\t\t</section>
\t\t\t<section id=\"secundario\">
\t\t\t\t<p>¿Alergias alimentarias?</p>
\t\t\t\t<p>Cuida tu salud con Alood</p>
\t\t\t\t<a href=\"#\" class=\"button green\">
\t\t\t\t\t<em></em>
\t\t\t\t\tDescarga gratis la aplicación
\t\t\t\t</a>
\t\t\t\t<p id=\"nota_pie\">Disponible para <a href=\"http://www.android.com\">Android</a></p>
\t\t\t</section>
\t\t</article>
\t\t<footer>
\t\t\tBy <a href=\"http://www.absolutelyorganicthoughts.com\">Absolutely Organic Girl</a>
\t\t</footer>
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
        return "FrontBundle:Sitio:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 7,  103 => 6,  81 => 38,  71 => 31,  65 => 28,  59 => 25,  53 => 22,  47 => 19,  39 => 14,  35 => 13,  29 => 9,  27 => 6,  20 => 1,);
    }
}
