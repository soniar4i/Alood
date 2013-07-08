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
        return array (  65 => 28,  53 => 22,  20 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 60,  38 => 6,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  67 => 15,  61 => 13,  47 => 19,  105 => 59,  93 => 28,  76 => 16,  72 => 14,  68 => 12,  27 => 6,  91 => 20,  84 => 28,  94 => 39,  88 => 6,  79 => 17,  59 => 25,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 34,  78 => 21,  75 => 23,  71 => 31,  58 => 9,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 7,  120 => 6,  115 => 39,  106 => 36,  101 => 32,  96 => 21,  83 => 40,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 7,  41 => 7,  37 => 8,  35 => 13,  32 => 4,  29 => 9,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 62,  108 => 37,  102 => 30,  98 => 31,  95 => 34,  92 => 33,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 14,  36 => 5,  33 => 4,  30 => 7,);
    }
}
