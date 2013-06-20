<?php

/* ExtranetBundle:Default:editarperfil.html.twig */
class __TwigTemplate_ad2bf2319f96e99f0e0f536bfef3dda0 extends Twig_Template
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
\t<title>Panel de control | ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre"), "html", null, true);
        echo "</title>
\t<meta charset=\"utf-8\">
\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>
\t<div class=\"contenedor\">
\t\t<header>
\t\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("extranet"), "html", null, true);
        echo "\">
\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/front/images/alood_logo.png"), "html", null, true);
        echo "\"/>
\t\t\t</a>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editarPerfil", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuario"))), "html", null, true);
        echo "\">Editar perfil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"no-space\">
\t\t\t\t\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\"> <p class=\"button1 green\">Logout</p></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</header>
\t\t<article>
\t\t\t<section id=\"extranet_ppal\">
\t\t\t\t<h2>Editar perfil</h2>
\t\t\t\t
\t\t\t\t<form action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editarPerfil", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuario"))), "html", null, true);
        echo "\" method=\"post\" >
\t\t\t\t\t
\t\t\t\t\t
\t\t\t        <div class=\"form sidebyside\">
\t\t\t            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "usuario"), 'label', array("label" => "Usuario:"));
        echo "
\t\t\t            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "usuario"), 'widget', array("attr" => array("disabled" => "true")));
        echo "
\t\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "usuario"), 'errors');
        echo "
\t\t\t        </div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t        <div class=\"form sidebyside\">
\t\t\t            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre"), 'label', array("label" => "Nombre del fabricante:"));
        echo "
\t\t\t            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre"), 'widget', array("attr" => array("disabled" => "true")));
        echo "
\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre"), 'errors');
        echo "
\t\t\t        </div>
\t\t\t\t\t
\t\t\t\t\t<div style=\"clear:both\"></div>
\t\t\t\t\t
\t\t\t        <div class=\"form sidebyside\">
\t\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "email"), 'label', array("label" => "email:"));
        echo "
\t\t\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "email"), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "email"), 'errors');
        echo "
\t\t\t        </div>
\t\t\t\t\t
\t\t\t        <div class=\"form sidebyside\">
\t\t\t            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "telefono"), 'label', array("label" => "Telefono:"));
        echo "
\t\t\t            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "telefono"), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "telefono"), 'errors');
        echo "
\t\t\t        </div>
\t\t\t\t\t
\t\t\t\t\t<div style=\"clear:both\"></div>
\t\t\t\t\t
\t\t\t        <div class=\"form sidebyside\">
\t\t\t            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password"), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password"), 'errors');
        echo "
\t\t\t        </div>
\t\t\t\t\t
\t\t\t\t\t<div style=\"clear:both\"></div>
\t\t\t\t\t<br/>
\t\t\t\t\t<br/>
\t\t\t\t\t";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'rest');
        echo "
\t\t\t\t\t
\t\t\t\t    <input type=\"submit\" value=\"Guardar\" />
\t\t\t\t\t
\t\t\t\t\t<div style=\"clear:both; overflow:hidden\">
\t\t\t\t\t
\t\t\t\t\t<p class=\"error\">";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "</p>
\t\t\t\t\t
\t\t\t\t</form>
\t\t\t\t
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
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/extranet/css/extranet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t";
    }

    public function getTemplateName()
    {
        return "ExtranetBundle:Default:editarperfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 8,  175 => 6,  140 => 65,  112 => 52,  56 => 23,  113 => 6,  158 => 7,  110 => 50,  99 => 45,  82 => 39,  65 => 28,  53 => 22,  20 => 1,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 56,  107 => 60,  38 => 14,  144 => 66,  141 => 66,  135 => 47,  126 => 45,  109 => 41,  103 => 6,  67 => 15,  61 => 13,  47 => 19,  105 => 59,  93 => 28,  76 => 16,  72 => 14,  68 => 32,  27 => 6,  91 => 43,  84 => 28,  94 => 39,  88 => 45,  79 => 37,  59 => 25,  21 => 2,  44 => 12,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 58,  121 => 55,  118 => 44,  114 => 51,  104 => 36,  100 => 34,  78 => 21,  75 => 36,  71 => 31,  58 => 9,  34 => 11,  26 => 6,  24 => 3,  25 => 4,  19 => 1,  70 => 20,  63 => 24,  46 => 7,  22 => 2,  163 => 59,  155 => 6,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 59,  123 => 57,  120 => 6,  115 => 39,  106 => 7,  101 => 32,  96 => 21,  83 => 38,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 20,  43 => 7,  41 => 7,  37 => 8,  35 => 13,  32 => 10,  29 => 9,  184 => 70,  178 => 7,  171 => 62,  165 => 58,  162 => 78,  157 => 60,  153 => 72,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 53,  111 => 62,  108 => 51,  102 => 30,  98 => 31,  95 => 44,  92 => 6,  89 => 41,  85 => 25,  81 => 38,  73 => 19,  64 => 17,  60 => 23,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 15,  39 => 14,  36 => 5,  33 => 4,  30 => 6,);
    }
}
